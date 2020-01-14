<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="site/css/style-admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<div class ="main-container" style="display: flex;">

<?php
include_once 'inc/myconnect.php';
include_once 'inc/function.php';
include("navBar.php");
?>

<div class ="wrapper">
    <?php include("headerAdmin.php"); ?>
<div class="container">
    <div class="row">
        <div class="show-gird col-12 col-sm-12">
<?php
$output = "";
$output .= "<br/><label class='text-success'>Câu hỏi được nhập</label><br /><table class='table table-bordered'>";
$output .= '<td width="50%">'.'Câu hỏi'.'</td>';
$output .= '<td width="10%">'.'A'.'</td>';
$output .= '<td width="10%">'.'B'.'</td>';
$output .= '<td width="10%">'.'C'.'</td>';
$output .= '<td width="10%">'.'D'.'</td>';
$output .= '<td width="8%">'.''.'</td>';
$output .= '</tr>';

$query_2 = "SELECT * FROM questionstn WHERE Made=3";
$results_2 = mysqli_query($dbc, $query_2);
kt_query($results_2, $query_2);
while ($ch = mysqli_fetch_array($results_2, MYSQLI_ASSOC)) {
	$output .= '<td>'.$ch['NoiDung'].'</td>';
	$query_1 = "SELECT * FROM answerstn WHERE Made=".$ch['Made']." AND questions_id=".$ch['number'];
	$results_1 = mysqli_query($dbc, $query_1);
	kt_query($results_1, $query_1);
	$i=1;
	$dapan = intval($ch['answer']);
	while ($da = mysqli_fetch_array($results_1, MYSQLI_ASSOC)) {
		if($i === $dapan)
		    $output .= '<td style="color: green; font-weight: bold; ">'.$da['NoiDung'].'</td>';
		else
			$output .= '<td style="color: red; font-weight: bold; ">'.$da['NoiDung'].'</td>';

		$i++;
	}
    $output .= '<td>'.'<a>Chỉnh sửa</a>'.'</td>';
    $output .= '</tr>';

}
$output .= '</table>';
echo $output;
?>
<div style="float:right;">
<input type="submit" class="btn-style-general" name="2" value="Canel"/>
<input type="submit" name="1" class="btn-style-general" value="Cập nhật"> 
</div>


</div> <!-- tm-section -->        
    </div>
</div>
</div>
</div>
