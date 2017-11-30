<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LogInfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'LogInfo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'jsut a log';

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
        \Log::info('It works');
    }
}
