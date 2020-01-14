<?php

class MoPhong
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

    public function getMoPhong() {
        $query = $this->con->prepare("SELECT * FROM tbl_mophong");
        $query ->execute();
        $ar = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $ar[] = $row;
        }
        return array('status'=>200, 'message'=>$ar);
    }


    public function themMoPhong($ten, $link, $linkImg, $idMonHoc) {
        $query = $this->con->prepare("INSERT INTO tbl_mophong (id, TenMoPhong, link, link_img, MaMonHoc) VALUES (NULL, ?, ?, ?, ?)");
        $query->bindParam(1, $ten, PDO::PARAM_STR);
        $query->bindParam(2, $link, PDO::PARAM_STR);
        $query->bindParam(3, $linkImg, PDO::PARAM_STR);
        $query->bindParam(4, $idMonHoc, PDO::PARAM_STR);
        $query ->execute();
        return array('status'=>200, 'message'=>[]);
    }
}