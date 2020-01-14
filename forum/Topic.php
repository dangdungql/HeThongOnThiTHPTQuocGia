<?php
require('../inc/myconnect.php');
require('../inc/function.php');

class Topic
{
    function __construct()
    {
        try {
            $this->con = new PDO('mysql:host=localhost;dbname=webhoctap;charset=utf8', 'root', '');
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        } catch (PDOException $e) {
            echo 'Exception -> ';
            var_dump($e->getMessage());
        }


    }

    public function addTopic($title, $desc, $idMonHoc) {
        $query = $this->con->prepare("INSERT INTO topic (id, title, description, author_id, category_id) VALUES (NULL, ?, ?, 2, ?)");
        $query->bindParam(1, $title, PDO::PARAM_STR);
        $query->bindParam(2, $desc, PDO::PARAM_STR);
        $query->bindParam(3, $idMonHoc, PDO::PARAM_STR);

        $query ->execute();
        return array('status'=>200, 'message'=>[]);
    }

    public function addTopicComment($topic_id, $author_id = 2, $content) {
        $query = $this->con->prepare("INSERT INTO topic_comment (id, topic_id, author_id, content) VALUES (NULL, ?, ?, ?)");
        $query->bindParam(1, $topic_id, PDO::PARAM_STR);
        $query->bindParam(2, $author_id, PDO::PARAM_STR);
        $query->bindParam(3, $content, PDO::PARAM_STR);

        $query ->execute();
        return array('status'=>200, 'message'=>[]);
    }

}

?>
//var_dump($channel ->get("t6Uay62gWAkvL5x6Yf7b"));
