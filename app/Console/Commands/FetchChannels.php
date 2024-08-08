<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Livewire\IptvPlayer;
class FetchChannels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'channels:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch channels from the M3U source and store them in the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $iptvPlayer = new IptvPlayer();
        $iptvPlayer->fetchChannels();

        $this->info('Channels fetched and stored successfully.');
        return Command::SUCCESS;
    }
}