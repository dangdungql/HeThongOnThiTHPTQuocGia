<?php
require_once ("db.php");
$ct = $_GET['ct'];
//$sql = "SELECT * FROM tbl_comment ORDER BY parent_id desc, id desc";
$sql = 'SELECT tb.*, u.hinhanh FROM tbl_comment tb, tbluser u WHERE tb.id_baigiang='.$ct.' AND tb.id_user=u.id ORDER BY tb.parent_id desc, tb.id desc';


$result = mysqli_query($conn, $sql);
$record_set = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($record_set, $row);
}
mysqli_free_result($result);

mysqli_close($conn);
echo html_entity_decode(json_encode($record_set));
?>