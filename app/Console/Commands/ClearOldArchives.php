<?php

namespace App\Console\Commands;

use File;
use Artisan;
use App\Archive;
use Illuminate\Console\Command;

class ClearOldArchives extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:archives';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete archives that are older than a week';

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
        Artisan::call('down');
        $this->info('Maintenance mode enabled');
        $archives = Archive::where('created_at', '<', \Carbon\Carbon::now()->subWeek())->get();
        $this->info('Found ' . count($archives) . ' database records');
        foreach ($archives as $archive) {
            File::delete(public_path('archives/' . $archive->filename));
            $archive->delete();
        }
        $this->info('Arhives deleted');
        Artisan::call('up');
        $this->info('Maintenance mode disabled');
    }
}
