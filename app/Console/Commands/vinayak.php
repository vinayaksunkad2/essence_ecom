<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class vinayak extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vinayak';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getdata(){
        echo "hi world";
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       echo "hello vinayak";
       $this->getdata();
    }
}
