<?php

namespace App\Livewire;

use App\Models\Channel;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use M3uParser\M3uParser;

class IptvPlayer extends Component
{
    public $channels = [];
    public $channelsByGroup = [];
    public $groupedChannels = [];
    public $currentStream = '';
    public $currentChannelName = '';
    public $currentChannelLogo = '';
    public $selectedGroup = '';
    public $activeGroup = 'Music'; // Par défaut
    public function mount()
    {
        ini_set('memory_limit', '512M');
        // $this->fetchChannels();
    }

    public function fetchChannels()
    {
        set_time_limit(120);
        try {
            $url = "https://iptv-org.github.io/iptv/index.m3u";
            $content = Cache::remember('m3u_content', 3600, function () use ($url) {
                return file_get_contents($url);
            });

            if ($content === false) {
                throw new Exception('Unable to download m3u content.');
            }

            $tempFilePath = storage_path('app/temp_playlist.m3u');
            if (file_put_contents($tempFilePath, $content) === false) {
                throw new Exception('Unable to write m3u content to temporary file.');
            }

            $parser = new M3uParser();
            $parser->addDefaultTags();
            $playlist = $parser->parseFile($tempFilePath);

            $channelsByGroup = [];

            Channel::truncate();

            foreach ($playlist as $entry) {
                $channel = [
                    'name' => '',
                    'url' => $entry->getPath(),
                    'duration' => 0,
                    'tvg_name' => '',
                    'xmlTvId' => '',
                    'iconUrl' => '',
                    'logoUrl' => '',
                    'language' => '',
                    'tags' => [],
                    'group' => 'Unknown'
                ];

                foreach ($entry->getExtTags() as $extTag) {
                    if ($extTag instanceof \M3uParser\Tag\ExtInf) {
                        $channel['name'] = $extTag->getTitle();
                        $channel['duration'] = $extTag->getDuration();
                        if ($extTag->hasAttribute('tvg-name')) {
                            $channel['tvg_name'] = $extTag->getAttribute('tvg-name');
                        }
                        if ($extTag->hasAttribute('tvg-logo')) {
                            $channel['logoUrl'] = $extTag->getAttribute('tvg-logo');
                        }
                        if ($extTag->hasAttribute('group-title')) {
                            $channel['group'] = $extTag->getAttribute('group-title');
                        }
                    }

                    if ($extTag instanceof \M3uParser\Tag\ExtTv) {
                        $channel['xmlTvId'] = $extTag->getXmlTvId();
                        $channel['iconUrl'] = $extTag->getIconUrl();
                        $channel['language'] = $extTag->getLanguage();
                        $channel['tags'] = $extTag->getTags();
                    }
                }

                // Group channels by group-title
                $channelsByGroup[$channel['group']][] = $channel;
                $channels[] = $channel;
            }
            foreach ($channels as $channel) {
                Channel::updateOrCreate([
                    'url' => $channel['url'],
                    'group' => $channel['group'],
                    'language' => $channel['language'],
                    'xmlTvId' => $channel['xmlTvId'],
                    'iconUrl' => $channel['iconUrl'],
                    'logoUrl' => $channel['logoUrl'],
                    'tvg_name' => $channel['tvg_name'],
                    'name' => $channel['name'],
                    'duration' => $channel['duration'],
                    'tags' => json_encode($channel['tags']),

                ], $channel);
            }
            $this->channelsByGroup = $channelsByGroup;
        } catch (Exception $e) {
            // Log the error message
            Log::error('Error fetching channels: ' . $e->getMessage());
        }
    }

    public function setActiveGroup($group)
    {
        $this->activeGroup = $group;
        // $channelsQuery = Channel::query();

        // // Filtrer par groupe actif
        // if ($this->activeGroup !== 'All') {
        //     $channelsQuery->where('group', $this->activeGroup);
        // }

        // // Pagination des chaînes
        // $channels = $channelsQuery->paginate(10);
    }

    public function opModal($url, $logo, $name, $group)
    {

        $this->dispatch('opModal', $url);
        $this->dispatch('playStream', $url);
        $this->playStream($url, $logo, $name, $group);
    }

    public function playStream($url, $logo, $name, $group)
    {
        // $this->dispatch('playStream', $url);

        $this->currentStream = $url;
        $this->currentChannelLogo = $logo;
        $this->currentChannelName = $name;
        $this->selectedGroup = $group;
    }
    public function render()
    {
        $chaines = Channel::when($this->activeGroup, function($query) {
            $query->where('group', $this->activeGroup);
        })->get();
        
        return view('livewire.iptv-player', [
            'chaines' => $chaines,
            'channelsByGroup' => $this->channelsByGroup,
            'activeGroup' => $this->activeGroup,
        ]);
    }
}