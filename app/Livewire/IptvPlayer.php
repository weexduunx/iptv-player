<?php

namespace App\Livewire;

use Exception;
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
    public $activeGroup = 'Documentary'; // Par défaut
    public function mount()
    {
        ini_set('memory_limit', '512M');
        $this->fetchChannels();
    }

    // public function fetchChannels()
    // {
    //     try {
    //         $url = "https://iptv-org.github.io/iptv/index.m3u";
    //         $content = file_get_contents($url);
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

    //         // Utiliser un tableau associatif pour éviter les doublons
    //         $uniqueChannels = [];

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
    //                 'tags' => []
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
    //                 }

    //                 if ($extTag instanceof \M3uParser\Tag\ExtTv) {
    //                     $channel['xmlTvId'] = $extTag->getXmlTvId();
    //                     $channel['iconUrl'] = $extTag->getIconUrl();
    //                     $channel['language'] = $extTag->getLanguage();
    //                     $channel['tags'] = $extTag->getTags();
    //                 }
    //             }

    //             // Utiliser l'URL comme clé unique pour vérifier l'unicité
    //             if (!isset($uniqueChannels[$channel['url']])) {
    //                 $uniqueChannels[$channel['url']] = $channel;
    //             }
    //         }

    //         // Ajouter les chaînes uniques à la liste finale
    //         $this->channels = array_values($uniqueChannels);
    //     } catch (Exception $e) {
    //         // Log the error message
    //         \Log::error('Error fetching channels: ' . $e->getMessage());
    //     }
    // }

    // public function playStream($url)
    // {
    //     // dd($url);
    //     // $this->currentStream = $url;
    //     // $this->dispatch('playStream', $url);
    //     $channel = collect($this->channels)->firstWhere('url', $url);

    //     if ($channel) {
    //         $this->currentStream = $url;
    //         $this->currentChannelName = $channel['name'];
    //         $this->currentChannelLogo = $channel['logoUrl'] ?: $channel['iconUrl'];
    //         $this->dispatch('playStream', $url);
    //     }
    // }

    // public function fetchChannels()
    // {
    //     try {
    //         $url = "https://iptv-org.github.io/iptv/index.country.m3u";
    //         $content = file_get_contents($url);
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
    //         }

    //         $this->channelsByGroup = $channelsByGroup;
    //     } catch (Exception $e) {
    //         // Log the error message
    //         \Log::error('Error fetching channels: ' . $e->getMessage());
    //     }
    // }
    public function fetchChannels()
    {
        try {
            $url = "https://iptv-org.github.io/iptv/index.category.m3u";
            $content = file_get_contents($url);
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
            }

            $this->channelsByGroup = $channelsByGroup;
        } catch (Exception $e) {
            // Log the error message
            \Log::error('Error fetching channels: ' . $e->getMessage());
        }
    }

    public function setActiveGroup($group)
    {
        $this->activeGroup = $group;
    }

    public function playStream($url, $logo, $name, $group)
    {
        $this->dispatch('playStream', $url);

        $this->currentStream = $url;
        $this->currentChannelLogo = $logo;
        $this->currentChannelName = $name;
        $this->selectedGroup = $group;
    }
    public function render()
    {
        return view('livewire.iptv-player', [
            // 'channels' => $this->channels,
            'channelsByGroup' => $this->channelsByGroup,
            'activeGroup' => $this->activeGroup,
        ]);
    }
}