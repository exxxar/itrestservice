<?php

namespace App\Http\Controllers;

use BotMan\Drivers\Telegram\TelegramDriver;
use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;


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

        DriverManager::loadDriver(TelegramDriver::class);

        $this->botman = BotManFactory::create($this->config);
    }

    public function index(){
        $this->botman->listen();

        $this->botman->hears('hello', function (BotMan $bot) {
            $bot->reply('Hello yourself.');
        });
    }


}
