<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ShowGreet extends Command
{
    /**
     * The name and signature of the console command.
     * params name 是传入的第一个参数
     * @var string
     */
    protected $signature = 'ShowGreet:ShowGreet {name? : "彭丽霞"}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '欢迎';

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
        $this->info("Hello, my dear " . $this->argument('name'));
    }
}
