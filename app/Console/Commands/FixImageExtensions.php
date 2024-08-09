<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Channel;

class FixImageExtensions extends Command
{
    protected $signature = 'channels:fix-extensions';
    protected $description = 'Fix image extensions in the channels table';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Obtenez toutes les chaînes
        $channels = Channel::all();

        foreach ($channels as $channel) {
            $updated = false;

            // Corriger uniquement les extensions .jpg en .jpeg
            if (str_ends_with($channel->logoUrl, '.jpg')) {
                $newUrl = str_replace('.jpg', '.jpeg', $channel->logoUrl);
                $updated = true;
            }

            // Mettez à jour l'URL de l'image si elle a été modifiée
            if ($updated) {
                $channel->logoUrl = $newUrl;
                $channel->save();
                $this->info('Updated logoUrl for channel ID: ' . $channel->id);
            }
        }

        $this->info('Image extensions fixed successfully.');
    }
}
