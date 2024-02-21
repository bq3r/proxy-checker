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
        $output = $this->output;
        $output->write("<fg=blue>Enter the IP address:</> ");
        $data = readline('');
        $result = DataController::index($data);
        $output = $this->output;
        foreach ($result as $key => $value) {
            $output->writeln("<fg=green>$key:</> <fg=yellow>$value</>");
        }
    }
}
