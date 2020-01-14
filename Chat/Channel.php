<?php
require '../Connect/firebase.php';

class Channel
{
    protected $database;
    protected $dbname = 'channel';
    public function __construct()
    {
        $firebase = new Firebase();
        $this->database = $firebase->getDatabase($this->dbname);
    }

    public function get(string $channelId = NULL) {
        if(empty($channelId) || !isset($channelId)) {
            return false;
        }
        if($this->database->getSnapshot()->hasChild($channelId)) {
            return $this->database->getChild($channelId)->getValue();
        } else {
            return false;
        }
    }

    public function insert(array $data) {

    }

    public function delete(int $channelId) {

    }

    public function user1Chat() {
        $this->database->push(
            [
                'user_name' => 'Ten User',
                'user_id' => 1,
                'status' => 'Online',
                'text' => 'Xin chao',
            ]
        );
    }

    public function user2Chat() {
        $date = date_create();
        $this->database->push(
            [
                'user_id' => [
                    'id' => 1,
                    'avatar_url' => 'https://i.9mobi.vn/cf/images/2015/03/nkk/hinh-dep-15.jpg',
                    'name' => 'Nam Ho'
                ],
                'status' => 'Online',
                'text' => 'Xin chao',
                'createdAt' => date_timestamp_get($date),
            ]
        );
    }

    public function getListChat() {
        echo "hello";
        return $this->database->getValue();
    }
}

$channel = new Channel();
var_dump($channel->getListChat());
//var_dump($channel ->get("t6Uay62gWAkvL5x6Yf7b"));
