<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Ixbt;

class IxbtNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Ixbt:News';

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

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $xml = simplexml_load_file('https://www.ixbt.com/export/articles.rss');

        foreach ($xml->channel->item as $key => $value) 
        {

            $arr = new Ixbt;

            $arr->saveDb($value);
            
        }


    }
}
