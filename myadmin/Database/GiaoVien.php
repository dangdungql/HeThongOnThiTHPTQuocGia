<?php
session_start();

class GiaoVien
{
    private $con;
    function __construct()
    {
        try {
            $this->con = new PDO('mysql:host=localhost;dbname=onthi;charset=utf8', 'root', '');
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        } catch (PDOException $e) {
            echo 'Exception -> ';
            var_dump($e->getMessage());
        }


    }
    public function getListTeacher()
    {
        $query = $this->con->query("SELECT * FROM giao_vien");
        $ar = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $ar[] = $row;
        }
        return array('status'=>200, 'message'=>['list'=>$ar]);
    }

    public function getTeacherInfo($teacherId)
    {
        $query = $this->con->prepare("SELECT * FROM giao_vien where id = :user_id");
        $query->bindParam(":user_id", $teacherId, PDO::PARAM_STR);
        $query ->execute();
        $ar = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $ar[] = $row;
        }
        return array('status'=>200, 'message'=>$ar);
    }

    public function addTeacher($name, $username, $pass, $phone, $address, $subject)
    {
        $query = $this->con->prepare("INSERT INTO giao_vien (id, name, user_name, subject_name, address, phone_number) VALUES (NULL, ?, ?, ?, ?, ?)");
        $query->bindParam(1, $name, PDO::PARAM_STR);
        $query->bindParam(2, $username, PDO::PARAM_STR);
        $query->bindParam(3, $pass, PDO::PARAM_STR);
        $query->bindParam(5, $phone, PDO::PARAM_STR);
        $query->bindParam(4, $address, PDO::PARAM_STR);

        $query ->execute();
        return array('status'=>200, 'message'=>[]);

    }
}