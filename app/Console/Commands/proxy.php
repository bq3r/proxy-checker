<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\ScraperController;
use App\Http\Controllers\DataController;

class proxy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'proxy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get proxy information';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = readline('Enter the IP address: ');
        $result = DataController::index($data);
        foreach ($result as $key => $value) {
            echo "$key: $value\n";
        }
    }
}
