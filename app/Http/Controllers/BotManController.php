<?php

namespace App\Http\Controllers;

use BotMan\Drivers\Telegram\TelegramDriver;
use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use Illuminate\Support\Facades\Log;


class BotManController extends Controller
{
    //
    private $config;
    private $botman;


    public function __construct()
    {
        $this->config = [
            "telegram" => [
                "token" => env("TELEGRAM_BOT_TOKEN")
            ]
        ];

        Log::info("CONFIG");

       /* DriverManager::loadDriver(TelegramDriver::class);*/

        $this->botman = BotManFactory::create($this->config);
        Log::info("CONFIG 2");

        $this->botman->listen();
    }

    public function index(){


        Log::info("TEST");
        $this->botman->hears('hello', function ($bot) {

            Log::info("HELLO");

            $bot->reply('Hello yourself.');
        });
    }


}
