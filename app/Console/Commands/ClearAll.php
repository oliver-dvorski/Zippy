<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Artisan;

class ClearAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cleaning the dirt outta the system';

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
        $this->info('Entering maintenance mode');
        Artisan::call('down');
        $this->info('Deleting uploads');
        Artisan::call('clear:uploads');
        $this->info('Deleting old archives');
        Artisan::call('clear:archives');
        Artisan::call('up');
        $this->info('All done.');
    }
}
