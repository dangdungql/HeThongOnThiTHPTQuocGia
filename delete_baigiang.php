<?php
require_once ("db.php");
$id = mysqli_real_escape_string($conn,$_POST['baigiangdelete']);
//$id = json_encode($_POST['cmtdelete']);
//$id = $_GET['id'];
//$commentSenderName = isset($_POST['name']) ? $_POST['name'] : "";

$sql = "DELETE FROM chitietcongthuc WHERE MaChiTiet='".$id."'";
//$sql="INSERT INTO tblbinhluan(ibbaihoc,iduser,parent_id,binhluan,ngaydang,giodang) VALUES(1,1,1,'".$comment."',NOW(),NOW())";
$result = mysqli_query($conn, $sql);

if (! $result) {
    $result = mysqli_error($conn);
}
echo $result;
?>
