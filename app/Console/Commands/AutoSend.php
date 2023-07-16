<?php

namespace App\Console\Commands;

use App\Events\SendMessage;
use Illuminate\Console\Command;

class AutoSend extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:sen';

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
     * @return int
     */
    public function handle()
    {
        broadcast(new SendMessage([
            "id" => 1,
            "message" => "tôi là test"
        ]));
    }
}
