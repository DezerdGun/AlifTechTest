<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $data = array('data' => 'cron testing');
        Mail::send('mail',$data,function ($message){
           $message->to('mir6raid@gmail.com')
               ->subject('testedifdkog');
        });
    }
}
