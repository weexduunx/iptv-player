<?php

namespace App\Livewire;

use App\Models\Channel;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use M3uParser\M3uParser;
use Livewire\WithPagination;

class IptvPlayer extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $channels = [];
    public $channelsByGroup = [];
    public $groupedChannels = [];
    public $currentStream = '';
    public $currentChannelName = '';
    public $currentChannelLogo = '';
    public $selectedGroup = '';
    public $activeGroup = 'Senegal'; // Par défaut
    public $query = '';
    public $logoUrlBg, $logoUrl;

    public function mount()
    {
        ini_set('memory_limit', '512M');
        $this->logoUrl = asset('assets/images/retrotv.png');
        $this->logoUrlBg = asset('assets/images/iptv2.jpg');
    }

    public function search()
    {
        $this->resetPage();
        // $this->logoUrlBg = asset('assets/images/iptv2.jpg');
        // $this->logoUrl = asset('assets/images/retrotv.png');
    }

    public function updatedQuery()
    {
        $this->resetPage();
        // $this->logoUrlBg = asset('assets/images/iptv2.jpg');
        // $this->logoUrl = asset('assets/images/retrotv.png');
    }

    // public function fetchChannels()
    // {

    //     try {
    //         // Increase memory limit and execution time
    //         ini_set('memory_limit', '1024M');
    //         set_time_limit(300);
    //         $url = "https://iptv-org.github.io/iptv/index.country.m3u";
    //         $content = file_get_contents($url);
    //         // $content = Cache::remember('m3u_content', 3600, function () use ($url) {
    //         //     return file_get_contents($url);
    //         // });
    //         if ($content === false) {
    //             throw new Exception('Unable to download m3u content.');
    //         }

    //         $tempFilePath = storage_path('app/temp_playlist.m3u');
    //         if (file_put_contents($tempFilePath, $content) === false) {
    //             throw new Exception('Unable to write m3u content to temporary file.');
    //         }

    //         $parser = new M3uParser();
    //         $parser->addDefaultTags();
    //         $playlist = $parser->parseFile($tempFilePath);

    //         $channelsByGroup = [];

    //         Channel::truncate();

    //         foreach ($playlist as $entry) {
    //             $channel = [
    //                 'name' => '',
    //                 'url' => $entry->getPath(),
    //                 'duration' => 0,
    //                 'tvg_name' => '',
    //                 'xmlTvId' => '',
    //                 'iconUrl' => '',
    //                 'logoUrl' => '',
    //                 'language' => '',
    //                 'tags' => [],
    //                 'group' => 'Unknown'
    //             ];

    //             foreach ($entry->getExtTags() as $extTag) {
    //                 if ($extTag instanceof \M3uParser\Tag\ExtInf) {
    //                     $channel['name'] = $extTag->getTitle();
    //                     $channel['duration'] = $extTag->getDuration();
    //                     if ($extTag->hasAttribute('tvg-name')) {
    //                         $channel['tvg_name'] = $extTag->getAttribute('tvg-name');
    //                     }
    //                     if ($extTag->hasAttribute('tvg-logo')) {
    //                         $channel['logoUrl'] = $extTag->getAttribute('tvg-logo');
    //                     }
    //                     if ($extTag->hasAttribute('group-title')) {
    //                         $channel['group'] = $extTag->getAttribute('group-title');
    //                     }
    //                 }

    //                 if ($extTag instanceof \M3uParser\Tag\ExtTv) {
    //                     $channel['xmlTvId'] = $extTag->getXmlTvId();
    //                     $channel['iconUrl'] = $extTag->getIconUrl();
    //                     $channel['language'] = $extTag->getLanguage();
    //                     $channel['tags'] = $extTag->getTags();
    //                 }
    //             }

    //             // Group channels by group-title
    //             $channelsByGroup[$channel['group']][] = $channel;
    //             $channels[] = $channel;
    //         }
    //         foreach ($channels as $channel) {
    //             Channel::updateOrCreate([
    //                 'url' => $channel['url'],
    //                 'group' => $channel['group'],
    //                 'language' => $channel['language'],
    //                 'xmlTvId' => $channel['xmlTvId'],
    //                 'iconUrl' => $channel['iconUrl'],
    //                 'logoUrl' => $channel['logoUrl'],
    //                 'tvg_name' => $channel['tvg_name'],
    //                 'name' => $channel['name'],
    //                 'duration' => $channel['duration'],
    //                 'tags' => json_encode($channel['tags']),

    //             ], $channel);
    //         }
    //         $this->channelsByGroup = $channelsByGroup;
    //     } catch (Exception $e) {
    //         // Log the error message
    //         Log::error('Error fetching channels: ' . $e->getMessage());
    //     }
    // }

    // function convertImagetoBase64($url)
    // {
    //   $urlParts = pathinfo($url);
    //     $extension = $urlParts['extension'];

    //   $base64 = 'data:image/' . $extension . ';base64,' . base64_encode(\Illuminate\Support\Facades\Http::get($url)->body());
    //     return $base64;
    // }

    public function fetchChannels()
    {
        try {
            ini_set('memory_limit', '1024M');
            set_time_limit(1200);

            $url = "https://iptv-org.github.io/iptv/index.country.m3u";
            $content = file_get_contents($url);
            // $content = Cache::remember('m3u_content', 3600, function () use ($url) {
            //     return file_get_contents($url);
            // });
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

            $count = 0; // Counter to track the number of channels processed

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


                // Increment the counter
                $count++;
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

            // Log the number of channels processed
            Log::info("Channels processed: $count");
        } catch (Exception $e) {
            // Log the error message
            Log::error('Error fetching channels: ' . $e->getMessage());
        }
    }


    public function setActiveGroup($group)
    {
        $this->activeGroup = $group;
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
        $chaines = Channel::when($this->activeGroup, function ($query) {
            $query->where('group', $this->activeGroup);
        })->when($this->query, function ($query) {
            $query->where('name', 'like', '%' . $this->query . '%');
        })->paginate(6);


        return view('livewire.iptv-player', [
            'chaines' => $chaines,
            'channelsByGroup' => $this->channelsByGroup,
            'activeGroup' => $this->activeGroup,
        ]);
    }
}
