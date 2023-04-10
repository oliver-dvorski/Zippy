<?php

namespace App\Console\Commands;

use File;
use Artisan;
use App\Models\Archive;
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
    protected $description = 'Delete archives that are older than a month';

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
        if (env('APP_ENV') == 'local') {
            $archives = Archive::all();
        } else {
            $archives = Archive::where('created_at', '<', \Carbon\Carbon::now()->subMonth())->get();
        }
            
        foreach ($archives as $archive) {
            File::delete(storage_path('app/Archives/' . $archive->filename));
            $archive->delete();
        }
    }
}
