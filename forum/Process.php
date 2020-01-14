<?php

ini_set('display_errors', 1);
require 'Topic.php';

if (isset($_POST['addTopic']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

    $topic = new Topic();
    $title = $_POST["title"];
    $desc = $_POST["desc"];
    $idMonHoc = $_POST["idMonHoc"];
    echo json_encode($topic->addTopic($title, $desc, $idMonHoc));
    exit();
}
if(isset($_POST['addTopicComment'])&& $_SERVER['REQUEST_METHOD'] == 'POST') {

    $topic = new Topic();
    $topic_id = $_POST["topic_id"];
    $author_id = $_POST["author_id"];
    $content = $_POST["content"];
    echo json_encode($topic->addTopicComment($topic_id, $author_id, $content));
    exit();
}