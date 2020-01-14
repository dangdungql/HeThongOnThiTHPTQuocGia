<?php

ini_set('display_errors', 1);
require 'MoPhong.php';
if (isset($_POST['getListTeacher']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $teacher = new GiaoVien();
    $id = $_POST["id"];
    echo json_encode($teacher->getTeacherInfo($id));
    exit();
}
if (isset($_POST['addTeacher']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $teacher = new GiaoVien();
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $user_name = $_POST["user_name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $subject = $_POST["subject"];
    echo json_encode($teacher->addTeacher($name, $user_name, $pass, $phone, $address, $subject));
    exit();
}
if (isset($_POST['getMoPhong']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $mo_phong = new MoPhong();
    echo json_encode($mo_phong->getMoPhong());
    exit();
}
if(isset($_POST['themMoPhong']) &&$_SERVER['REQUEST_METHOD'] == 'POST') {
    $mo_phong = new MoPhong();
    $ten = $_POST["ten"];
    $link = $_POST["link"];
    $linkImg = $_POST["link_img"];
    $idMonHoc = $_POST["idMonHoc"];
    echo json_encode($mo_phong->themMoPhong($ten, $link, $linkImg, $idMonHoc));
    exit();
}