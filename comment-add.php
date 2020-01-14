<?php
include_once 'inc/myconnect.php';
include_once 'inc/function.php';

require_once ("db.php");
$commentId = isset($_POST['comment_id']) ? $_POST['comment_id'] : "";
$comment = isset($_POST['comment']) ? $_POST['comment'] : "";
//$commentSenderName = isset($_POST['name']) ? $_POST['name'] : "";
$ct = $_GET['ct'];
$name = "";
$id_u;
$date = date('Y-m-d H:i:s');
if( isset($_COOKIE["email"]) ){
        if($_COOKIE["email"] !== '' ){
        	$email = $_COOKIE["email"];
        	$query="SELECT * FROM tbluser WHERE taikhoan = '".$email."'";
	        $results=mysqli_query($dbc,$query);
	        kt_query($results,$query);
	        $tk=mysqli_fetch_array($results,MYSQLI_ASSOC);
	        $name = $tk['hoten'];
	        $id_u = $tk['id'];
        }}
//$name = "Đặng Việt Dũng";

$sql = "INSERT INTO tbl_comment(id_user,name,id_baigiang,parent_id,comment,date) VALUES ('".$id_u."','".$name."','".$ct."','" . $commentId . "','" . $comment . "','" . $date . "')";
//$sql="INSERT INTO tblbinhluan(ibbaihoc,iduser,parent_id,binhluan,ngaydang,giodang) VALUES(1,1,1,'".$comment."',NOW(),NOW())";
$result = mysqli_query($conn, $sql);

if (! $result) {
    $result = mysqli_error($conn);
}
echo $result;
// $query_2="INSERT tbl_comment(id_user,parent_id,comment,date) VALUES (1,'" . $commentId . "','" . $comment . "','" . $date . "')";
// $results_2=mysqli_query($dbc,$query_2);
// kt_query($results_2,$query_2);
// if (! $results_2) {
//     $results_2 = mysqli_error($conn);
// }
// echo $results_2;

?>
