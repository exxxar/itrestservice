<?php

namespace App\Http\Controllers;

use BotMan\Drivers\Telegram\TelegramDriver;
use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Api;


class BotManController extends Controller
{


    public function getWebhookUpdates(Request $request)
    {
        Log::info("BotManController@index");

        $telegram = new Api(env("TELEGRAM_BOT_TOKEN"));
        $response = $telegram->getMe();

        Log::info("step 2");

        $update = json_decode($telegram->getWebhookUpdate());

        if (empty($update) )
            return;

        if (isset($update->channel_post))
            return;

        if (is_null($update->message) && is_null($update->callback_query))
            return;

        $postdata = http_build_query(
            array(
                'message_id' => $update->message->message_id ?? $update->callback_query->message->message_id,
                'user' => json_encode([
                    "id" => $update->message->from->id ?? $update->callback_query->from->id,
                    "first_name" => $update->message->from->first_name ?? $update->callback_query->from->first_name ?? '',
                    "last_name" => $update->message->from->last_name ?? $update->callback_query->from->last_name ?? '',
                    "username" => $update->message->from->username ?? $update->callback_query->from->username ?? '',
                ]),
                'bot_name' => env("MY_BOT_NAME"),
                'query' => $update->message->text ?? $update->callback_query->data
            )
        );

        $opts = array('http' =>
            array(
                'method' => 'POST',
                'header' => 'Content-Type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );

        $context = stream_context_create($opts);

        try {
            $result = file_get_contents('http://skidka-service.ru/api/v1/methods', false, $context);
        } catch (\Exception $e) {

        }
    }


}
