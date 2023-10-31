<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class Telegram
{
    protected $http;
    protected $bot;
    const URL = 'https://api.telegram.org/bot';


    public function __construct(Http $http, $bot)
    {
        $this->http = $http;
        $this->bot  = $bot;
    }

    public function sendMessage($chatId, $message)
    {
        return $this->http::post(self::URL.$this->bot.'/sendMessage', [
            'chat_id' => $chatId, 'text' => $message, 'parse_mode' => 'html',
        ]);
    }

    public function sendDocument($chatId, $file, $replyId = null)
    {
        return $this->http::attach('document', Storage::get('/public/'.$file),
            'document.xlsx')->post(self::URL.$this->bot.'/sendDocument', [
            'chat_id' => $chatId, 'reply_to_message_id' => $replyId,
        ]);
    }
}