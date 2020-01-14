<?php include("general.php"); ?>
<?php include("headerMore.php"); 
include_once('inc/myconnect.php');
include_once('inc/function.php');
require_once ("vendor/autoload.php");
$khoa = $_GET['khoa'];
use Phpml\Regression\LeastSquares;
$samples = [[31.24, 6.57], [31.33, 7.65], [26.04, 6.72], [24.84, 5.63],[30.48, 6.34],[31.48, 4.98],[29.08, 5.03]];
?>
<div class="container">
    <div class="row">
        <div class="show-gird col-12 col-sm-12">
            

<?php
if (($handle = fopen("diemchuan.csv", "r")) !== false) {
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        $num = count($data);
        if($data[0]==$khoa)
        {
        $targets = [$data[1], $data[2], $data[3], $data[4],$data[5],$data[6],$data[7]];
        $query_1 = "SELECT * FROM tbl_khoa WHERE id=".$data[0];
        $results_1 = mysqli_query($dbc, $query_1);
        kt_query($results_1, $query_1);
        $ch = mysqli_fetch_array($results_1, MYSQLI_ASSOC);

        $query_2 = "SELECT * FROM tbl_daihoc WHERE id=".$ch['id_daihoc'];
        $results_2 = mysqli_query($dbc, $query_2);
        kt_query($results_2, $query_2);
        $dh = mysqli_fetch_array($results_2, MYSQLI_ASSOC);
        
        $regression = new LeastSquares();
        $regression->train($samples, $targets);
        $t=$regression->predict([28.16, 4.6]);
        //echo $t."-";    
    
    ?>
    <br/>
        <h4 class="blue-text">Điểm thi khoa <?php echo $ch['TenKhoa'].$dh['TenTruong']; ?> và dự đoán điểm chuẩn năm 2020</h4>
    <br/>
<?php
$dataPoints = array(
	array("y" => (round($data[1],1))	, "label" => "2013"),
	array("y" => (round($data[2],1))	, "label" => "2014"),
	array("y" => $data[3]	, "label" => "2015"),
	array("y" => $data[4]	, "label" => "2016"),
	array("y" => $data[5]	, "label" => "2017"),
	array("y" => $data[6]	, "label" => "2018"),
	array("y" => $data[7]	, "label" => "2019"),
	array("y" => (round($t,1)) , "label" => "2020")
);
 	}}
    fclose($handle);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		 //text: "<?php echo $ch['TenKhoa'].$dh['TenTruong']; ?>"
	},
	axisY: {
		title: "<?php echo $ch['TenKhoa'].$dh['TenTruong']; ?>"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 500px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>    
</div> <!-- tm-section -->        
    </div>
</div>
