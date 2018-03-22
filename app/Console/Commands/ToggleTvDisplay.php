<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class ToggleTvDisplay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'raspi:toggle-tv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Toggle's the RasPi's HDMI output";

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
        $process = new Process("./home/pi/screen-control.sh");
        $process->run();
    }
}
