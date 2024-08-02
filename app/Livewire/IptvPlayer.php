<?php

namespace App\Livewire;

use Exception;
use Livewire\Component;
use M3uParser\M3uParser;

class IptvPlayer extends Component
{
    public $channels = [];
    public $currentStream = '';

    public function mount()
    {
        ini_set('memory_limit', '512M');
        $this->fetchChannels();
    }

    public function fetchChannels()
    {
        try {
            $url = "https://iptv-org.github.io/iptv/index.m3u";
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

            // Utiliser un tableau associatif pour éviter les doublons
            $uniqueChannels = [];

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
                    'tags' => []
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
                    }

                    if ($extTag instanceof \M3uParser\Tag\ExtTv) {
                        $channel['xmlTvId'] = $extTag->getXmlTvId();
                        $channel['iconUrl'] = $extTag->getIconUrl();
                        $channel['language'] = $extTag->getLanguage();
                        $channel['tags'] = $extTag->getTags();
                    }
                }

                // Utiliser l'URL comme clé unique pour vérifier l'unicité
                if (!isset($uniqueChannels[$channel['url']])) {
                    $uniqueChannels[$channel['url']] = $channel;
                }
            }

            // Ajouter les chaînes uniques à la liste finale
            $this->channels = array_values($uniqueChannels);
        } catch (Exception $e) {
            // Log the error message
            \Log::error('Error fetching channels: ' . $e->getMessage());
        }
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

    //             $this->channels[] = $channel;
    //         }
    //     } catch (Exception $e) {
    //         // Log the error message
    //         \Log::error('Error fetching channels: ' . $e->getMessage());
    //     }
    // }

    public function playStream($url)
    {
        // dd($url);
        $this->currentStream = $url;
        $this->dispatch('playStream', $url);
    }

    public function render()
    {
        return view('livewire.iptv-player', [
            'channels' => $this->channels,
        ]);
    }
}
