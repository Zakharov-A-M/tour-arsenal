<?php
//use GuzzleHttp\Client;

class TelegramBot
{
    protected $token = "470282078:AAGxLRixlaTZlJXsFdSYtFeEi-_mS7Ayf2E";
    public  $url = 'https://api.telegram.org/bot';

    protected function query($method, $params = [])
    {
        $this->url .= $this->token;
        $this->url .= '/'.$method;

        if (!empty($params)) {
            $this->url .= '?'.http_build_query($params);
        }

        var_dump($this->url);
        return file_get_contents($this->url);
    }


    public function  getUpdates()
    {
        $response = $this->query('getUpdates');
        return json_decode($response);
    }

    public function  sendMessage($chat_id, $text)
    {
        $response = $this->query('sendmessage', [
           'text' => $text,
            'chat_id' => $chat_id
        ]);
        return json_decode($response);
    }
}