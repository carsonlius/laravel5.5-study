<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Inspire extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'inspire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display an inspire quote';

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
        $this->comment(PHP_EOL . Inspire::quote() . PHP_EOL);
    }

    /*
    * just show a try
    *
    */
    protected function quote()
    {
        $this->info('Inspire quote');
    }
}

