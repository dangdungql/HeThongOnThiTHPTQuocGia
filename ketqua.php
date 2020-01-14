<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
label.a {
  left: 10px;
  right: 10px;
}

label.b {
  left: 20px;
  right: 20px;} 
div.c {
left: 20px;
right: 20px;} 
</style>
<label align="center"><font size="6">Kết quả</font></label>
<script>
$(document).ready(function(){
	$("#show").click(function(){
		$("td").toggle(1000);
	});
});
</script>
	<!-- <button id="show">Hiển thị chi tiết</button> -->
<?php 
include_once('inc/myconnect.php');
include_once('inc/function.php');

$s = $_GET['a'];
$md = $_GET['md'];
$ch = 0;

$n_nhanbiet = 0;
$n_thonghieu = 0;
$n_vandung = 0;
$n_vandungcao = 0;

$n_nb = 0;
$n_th = 0;
$n_vd = 0;
$n_vdc = 0;
//$sai = $_GET['sai'];

$query="SELECT * FROM questionstn WHERE Made=".$md;
$results=mysqli_query($dbc,$query);
kt_query($results,$query);
while($question=mysqli_fetch_array($results,MYSQLI_ASSOC))
{
    $ch = $question['MaChuong'];
	$answer_ = intval($question['answer']);
	$machuong = intval($question['MaChuong']);
	$mucdo = intval($question['Mucdo']);
	$number_ = intval($question['number'])-1;
	$arranswer[intval($question['number'])] = $answer_;

	$arrnc[intval($question['number'])]  = [$answer_,$machuong,$mucdo];


	switch ($mucdo) {
    case 1:
        $n_nhanbiet++;
        break;
    case 2:
        $n_thonghieu++;
        break;
    case 3:
        $n_vandung++;
        break;
    default:
        $n_vandungcao++;
        break;
}


	// $query_1="SELECT * FROM `answers` WHERE questions_id=".$question['id']." AND Made=1";
	// $results_1=mysqli_query($dbc,$query_1);
	// kt_query($results_1,$query_1);
	// while($answers=mysqli_fetch_array($results_1,MYSQLI_ASSOC))
	// {
	// 	if ($answers['cheking']==='1') {
			
	// 		$arranswer[intval($answers['questions_id'])]=intval($answers['id']);
	// 	}
	// }


	// $query_1="SELECT * FROM `answers` WHERE questions_id=".$question['id']." AND Made=1";
	// $results_1=mysqli_query($dbc,$query_1);
	// kt_query($results_1,$query_1);
	// while($answers=mysqli_fetch_array($results_1,MYSQLI_ASSOC))
	// {
	// 	if ($answers['cheking']==='1') {
			
	// 		$arranswer[intval($answers['questions_id'])]=intval($answers['id']);
	// 	}
	// }
}

$diem=0;
$output = '';
if($s!='e30='&&$s!='' )
{	
	$a_url=urldecode($s);
	$a_64=base64_decode($a_url);
	$a_64=str_replace("{","",$a_64);
	$a_64=str_replace("}","",$a_64);
	$arr=explode(",",$a_64);
	$arrvalue;
	for ($i=1; $i < 60; $i++) { 
		$arrvalue[$i]=0;
	}
	for ($i=0; $i < count($arr); $i++) { 
		$k=explode(":",$arr[$i]);
		$k[0]=str_replace('"',"",$k[0]);
		$k[1]=str_replace('"',"",$k[1]);
		$arrvalue[intval($k[0])]=intval($k[1]);
	}
	$d=0;
	$s=0;


	$query="SELECT * FROM questionstn WHERE Made=".$md;
	$results=mysqli_query($dbc,$query);
	kt_query($results,$query);
	$j=1;
	while($question=mysqli_fetch_array($results,MYSQLI_ASSOC))
	{?>
		
		<div>
			<label align="justify" style="padding: 0px 100px 0px 100px;"><font size="4">Câu <?php echo $question['number']; ?> : <?php echo $question['NoiDung'];?></font></label>
		</div>
		<div>
		<?php
		$query_1 = "SELECT * FROM `answerstn` WHERE questions_id=".$question['number']." AND  Made=".$md ;
		$results_1=mysqli_query($dbc,$query_1);
		kt_query($results_1,$query_1);
		$l=1;
		while($answers=mysqli_fetch_array($results_1,MYSQLI_ASSOC))
		{
			if ($arrvalue[$j]==$arrnc[$j][0]) {

			?>
			<label align="justify" style="padding: 0px 180px 0px 180px;"><font size="4" <?php if($arrvalue[$j] == $l){?> color=#00FF00 <?php } ?>><?php echo $answers['NoiDung']; ?></font></label>
			</br>
			<?php
			}

			else if (!$arrvalue[$j]) {
			?>
			<label align="justify" style="padding: 0px 180px 0px 180px;"><font size="4" <?php if($arrnc[$j][0] == $l){?> color="blue" <?php } ?>><?php echo $answers['NoiDung']; ?></font></label>
			</br>
			<?php
			}
			else {
			?>
			<label align="justify" style="padding: 0px 180px 0px 180px;"><font size="4" <?php if($arrnc[$j][0] == $l){?> color=#00FF00 <?php } else if($arrvalue[$j] == $l){?> color="red" <?php } ?>><?php echo $answers['NoiDung']; ?></font></label>
			</br>
			<?php
			}
			$l++;
		}
		$j++;
	}
	?>
		
	<?php
	    $output .= "<div align='center'><div align='center' style='width:50%;'><table class='table table-bordered'>";
	    $output .= '<td align="center" style="display: none;">'.'Câu hỏi'.'</td>';
	    $output .= '<td align="center" style="display: none;">'.'Câu trả lời'.'</td>';
	    $output .= '</tr>';
		for ($i=1; $i <= count($arranswer); $i++) { 
			if ($arrvalue[$i]==$arrnc[$i][0]) {
				switch ($arrnc[$i][2]) {
			    case 1:
			        $n_nb++;
			        break;
			    case 2:
			        $n_th++;
			        break;
			    case 3:
			        $n_vd++;
			        break;
			    default:
			        $n_vdc++;
			        break;
			    }
				$d++;
				$output .= '<td align="center" style="display: none; color:blue;">'.$i.'</td>';
	            $output .= '<td align="center" style="display: none; color:blue;">Đúng</td>';
				?>
	<!-- 			<p hidden style="color:blue;">Câu số <?php echo $i ?> : Đúng </p>
	 -->			<?php
			}
			else if (!$arrvalue[$i]) {
				$s++;
				$output .= '<td align="center" style="display: none;">'.$i.'</td>';
	            $output .= '<td align="center" style="display: none;">Không Chọn</td>';
				?>
	<!-- 			<p hidden>Câu số <?php echo $i ?> : không chọn</p>
	 -->			<?php
			}
			else
			{
				$s++;
				$output .= '<td align="center" style="display: none; color:red;">'.$i.'</td>';
	            $output .= '<td align="center" style="display: none; color:red;">Sai</td>';
				?>
				<!-- <p hidden style="color:red;">Câu số <?php echo $i ?> : Sai</p> -->
				<?php
			}
			$output .= '</tr>';
		}
		$output .= '</table></div></div>';
		$diem=10*($d)/($d+$s);
	?>
	</div>
	<?php
	echo $output;
	$m_nb = 0;
	$m_th = 0;
	$m_vd = 0;
	$m_vdc = 0;
	//$n1=0;
	if($n_nhanbiet !== 0)
	{
		$m_nb = round($n_nb/$n_nhanbiet,2);
		$query_3 = "SELECT COUNT(id) FROM tbl_hs_mucdo WHERE MaChuong = ".$ch." AND Mucdo = 1";
		$results_3 = mysqli_query($dbc,$query_3);
		kt_query($results_3,$query_3);
		$number_ch = mysqli_fetch_array($results_3,MYSQLI_ASSOC);
		$n = intval($number_ch['COUNT(id)']);
		if($n<3)
		{
			$query_2 = "INSERT INTO tbl_hs_mucdo ( MaHocSinh,MaChuong,Mucdo,Trinhdo,ThoiGian) VALUES ('1','".$ch."','1',".$m_nb.",NOW())"; 
			$results_2 = mysqli_query($dbc, $query_2); 
			kt_query($results_2, $query_2);

		}
		else
		{
			$query_3 = "SELECT * FROM tbl_hs_mucdo WHERE MaChuong = ".$ch." AND Mucdo = 1 ORDER BY ThoiGian ASC LIMIT 1";
			$results_3 = mysqli_query($dbc,$query_3);
			kt_query($results_3,$query_3);
			$number_n = mysqli_fetch_array($results_3,MYSQLI_ASSOC);
			$id_n = $number_n['id'];

			$query_3 = "UPDATE tbl_hs_mucdo SET Trinhdo=".$m_nb.", ThoiGian=NOW() WHERE id=".$id_n;
			$results_3 = mysqli_query($dbc,$query_3);
			kt_query($results_3,$query_3);
		}
	}
	if($n_thonghieu !== 0)
	{
		$m_th = round($n_th/$n_thonghieu,2);
		$query_3 = "SELECT COUNT(id) FROM tbl_hs_mucdo WHERE MaChuong = ".$ch." AND Mucdo = 2";
		$results_3 = mysqli_query($dbc,$query_3);
		kt_query($results_3,$query_3);
		$number_ch = mysqli_fetch_array($results_3,MYSQLI_ASSOC);
		$n = intval($number_ch['COUNT(id)']);
		if($n<3)
		{
			$query_2 = "INSERT INTO tbl_hs_mucdo ( MaHocSinh,MaChuong,Mucdo,Trinhdo,ThoiGian) VALUES ('1','".$ch."','2',".$m_th.",NOW())"; 
			$results_2 = mysqli_query($dbc, $query_2); 
			kt_query($results_2, $query_2);

		}
		else
		{
			$query_3 = "SELECT * FROM tbl_hs_mucdo WHERE MaChuong = ".$ch." AND Mucdo = 2 ORDER BY ThoiGian ASC LIMIT 1";
			$results_3 = mysqli_query($dbc,$query_3);
			kt_query($results_3,$query_3);
			$number_n = mysqli_fetch_array($results_3,MYSQLI_ASSOC);
			$id_n = $number_n['id'];

			$query_3 = "UPDATE tbl_hs_mucdo SET Trinhdo=".$m_th.", ThoiGian=NOW() WHERE id=".$id_n;
			$results_3 = mysqli_query($dbc,$query_3);
			kt_query($results_3,$query_3);
		}
	}
	if($n_vandung !== 0)
	{
		$m_vd = round($n_vd/$n_vandung,2);
		$query_3 = "SELECT COUNT(id) FROM tbl_hs_mucdo WHERE MaChuong = ".$ch." AND Mucdo = 3";
		$results_3 = mysqli_query($dbc,$query_3);
		kt_query($results_3,$query_3);
		$number_ch = mysqli_fetch_array($results_3,MYSQLI_ASSOC);
		$n = intval($number_ch['COUNT(id)']);
		if($n<3)
		{
			$query_2 = "INSERT INTO tbl_hs_mucdo ( MaHocSinh,MaChuong,Mucdo,Trinhdo,ThoiGian) VALUES ('1','".$ch."','3',".$m_vd.",NOW())"; 
			$results_2 = mysqli_query($dbc, $query_2); 
			kt_query($results_2, $query_2);

		}
		else
		{
			$query_3 = "SELECT * FROM tbl_hs_mucdo WHERE MaChuong = ".$ch." AND Mucdo = 3 ORDER BY ThoiGian ASC LIMIT 1";
			$results_3 = mysqli_query($dbc,$query_3);
			kt_query($results_3,$query_3);
			$number_n = mysqli_fetch_array($results_3,MYSQLI_ASSOC);
			$id_n = $number_n['id'];

			$query_3 = "UPDATE tbl_hs_mucdo SET Trinhdo=".$m_vd.", ThoiGian=NOW() WHERE id=".$id_n;
			$results_3 = mysqli_query($dbc,$query_3);
			kt_query($results_3,$query_3);
		}
	}
	if($n_vandungcao !== 0)
	{
		$m_vdc = round($n_vdc/$n_vandungcao,2);
		$query_3 = "SELECT COUNT(id) FROM tbl_hs_mucdo WHERE MaChuong = ".$ch." AND Mucdo = 4";
		$results_3 = mysqli_query($dbc,$query_3);
		kt_query($results_3,$query_3);
		$number_ch = mysqli_fetch_array($results_3,MYSQLI_ASSOC);
		$n = intval($number_ch['COUNT(id)']);
		if($n<3)
		{
			$query_2 = "INSERT INTO tbl_hs_mucdo ( MaHocSinh,MaChuong,Mucdo,Trinhdo,ThoiGian) VALUES ('1','".$ch."','4',".$m_vdc.",NOW())"; 
			$results_2 = mysqli_query($dbc, $query_2); 
			kt_query($results_2, $query_2);

		}
		else
		{
			$query_3 = "SELECT * FROM tbl_hs_mucdo WHERE MaChuong = ".$ch." AND Mucdo = 4 ORDER BY ThoiGian ASC LIMIT 1";
			$results_3 = mysqli_query($dbc,$query_3);
			kt_query($results_3,$query_3);
			$number_n = mysqli_fetch_array($results_3,MYSQLI_ASSOC);
			$id_n = $number_n['id'];

			$query_3 = "UPDATE tbl_hs_mucdo SET Trinhdo=".$m_vdc.", ThoiGian=NOW() WHERE id=".$id_n;
			$results_3 = mysqli_query($dbc,$query_3);
			kt_query($results_3,$query_3);
		}
	}

}
 ?>
<div align="center">
	<label> <font size="6">Điểm : <?php echo $diem; echo "-".$m_nb."-".$m_th."-".$m_vd."-".$m_vdc."-" ?></font></label>
</div>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <style>
        body
            {
                margin:0;
                padding:0;
                background-color:#f1f1f1;
            }
            .box
            {
/*                width:700px;
*/                border:1px solid #ccc;
                background-color:#fff;
                border-radius:5px;
                margin-top:10px;
            }
        
        </style>
    </head>
