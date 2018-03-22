<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class Reboot extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'raspi:reboot';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Reboot the RasPi";

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $script_location = resource_path('scripts/reboot.sh');
        $process = new Process("bash {$script_location}");
        $process->run();
    }
}
