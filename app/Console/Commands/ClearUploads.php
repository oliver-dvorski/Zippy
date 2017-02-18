<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use File;
use Artisan;

class ClearUploads extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:uploads';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear uploaded files that have never been zipped';

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
        File::deleteDirectory(storage_path('app/Uploaded_Files'));
    }
}
