<?php
include_once('inc/myconnect.php');
include_once('inc/function.php');
$data = isset($_POST['number']) ? $_POST['number'] : "0";

$id = '';
if( isset($_COOKIE["email"]) and $_COOKIE["email"] !== '' ){
	$id = $_COOKIE["email"];
}

// else if( (isset($_COOKIE["current_user"])) and ($_COOKIE["current_user"] !== '' )){
// 	$id = $_COOKIE["current_user"];
// }

$time_lb = $_POST['time_startlb'];
$luachon = $_POST['da_test'];
$made =  $_POST['made'];
$dapandung =  $_POST['dapandung'];
$query_2 = "INSERT INTO hs_baithi ( id_user, id_baithi,gionapbai,diem,giolambai,luachon) VALUES ( '".$id."', ".$made.", NOW(),".$data.",'".$time_lb."','".$luachon."')"; 
//$results_2 = mysqli_query($dbc, $query_2); 
//kt_query($results_2, $query_2);


$ar_dung = explode(",",$dapandung);
	$arr_dung = array();
	for($i=0;$i<count($ar_dung)-1;$i++)
	{
		$t_test = intval($ar_dung[$i]);
		array_push($arr_dung,$t_test);
	}
$arrsave = array();
	$query_1 = "SELECT * FROM dethi WHERE Made=".$made;
    $results_1 = mysqli_query($dbc, $query_1);
    kt_query($results_1, $query_1);
    $da = mysqli_fetch_array($results_1, MYSQLI_ASSOC);
    $dapan = $da['dapan'];
    $chuong = $da['MaChuong'];
    $mucdo = $da['Mucdo'];

    $ar_da = explode(",",$dapan);
    $ar_chuong = explode(",",$chuong);
    $ar_md = explode(",", $mucdo);

    // $k = array_count_values($ar_chuong);
    // for($i=0;$i<count($k);$i++)
    // {

	for($i = 0 ; $i < count($ar_chuong) ; $i++)
	{
		$t_test = intval($ar_chuong[$i]);
		if(!in_array($t_test, $arrsave))
		{
			array_push($arrsave,$t_test);
		}
	}
    for($i = 0 ; $i < count($arrsave) ; $i++)
	{
		$n_nhanbiet = 0;
		$n_thonghieu = 0;
		$n_vandung = 0;
		$n_vandungcao = 0;

		$n_nb = 0;
		$n_th = 0;
		$n_vd = 0;
		$n_vdc = 0;

		for($j = 0 ; $j < count($ar_chuong) ; $j++)
		{
			$num_question=$j+1;
			$t_test = intval($ar_chuong[$j]);
			if($arrsave[$i] === $t_test)
			{
				$mucdocauhoi = intval($ar_md[$j]);
				switch ($mucdocauhoi) {
					case 1:
				        $n_nhanbiet++;
				        if(in_array($num_question, $arr_dung))
				        {
				        	$n_nb++;
				        }
				        break;
				    case 2:
				        $n_thonghieu++;
				        if(in_array($num_question, $arr_dung))
				        {
				        	$n_th++;
				        }
				        break;
				    case 3:
				        $n_vandung++;
				        if(in_array($num_question, $arr_dung))
				        {
				        	$n_vd++;
				        }
				        break;
				    default:
				        $n_vandungcao++;
				        if(in_array($num_question, $arr_dung))
				        {
				        	$n_vdc++;
				        }
				        break;
				}
				
			}
		}
		$num_i = $i+1;
		if($n_nhanbiet !== 0)
		{
			$m_nb = round($n_nb/$n_nhanbiet,2);
			$query_3 = "SELECT COUNT(id) FROM tbl_hs_mucdo WHERE MaChuong = ".$arrsave[$i]." AND Mucdo = 1";
			$results_3 = mysqli_query($dbc,$query_3);
			kt_query($results_3,$query_3);
			$number_ch = mysqli_fetch_array($results_3,MYSQLI_ASSOC);
			$n = intval($number_ch['COUNT(id)']);
			if($n<3)
			{
				$query_2 = "INSERT INTO tbl_hs_mucdo ( MaHocSinh,MaChuong,Mucdo,Trinhdo,ThoiGian) VALUES ('1','".$arrsave[$i]."','1',".$m_nb.",NOW())"; 
				$results_2 = mysqli_query($dbc, $query_2); 
				kt_query($results_2, $query_2);

			}
			else
			{
				$query_3 = "SELECT * FROM tbl_hs_mucdo WHERE MaChuong = ".$arrsave[$i]." AND Mucdo = 1 ORDER BY ThoiGian ASC LIMIT 1";
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
			$query_3 = "SELECT COUNT(id) FROM tbl_hs_mucdo WHERE MaChuong = ".$arrsave[$i]." AND Mucdo = 2";
			$results_3 = mysqli_query($dbc,$query_3);
			kt_query($results_3,$query_3);
			$number_ch = mysqli_fetch_array($results_3,MYSQLI_ASSOC);
			$n = intval($number_ch['COUNT(id)']);
			if($n<3)
			{
				$query_2 = "INSERT INTO tbl_hs_mucdo ( MaHocSinh,MaChuong,Mucdo,Trinhdo,ThoiGian) VALUES ('1','".$arrsave[$i]."','2',".$m_th.",NOW())"; 
				$results_2 = mysqli_query($dbc, $query_2); 
				kt_query($results_2, $query_2);

			}
			else
			{
				$query_3 = "SELECT * FROM tbl_hs_mucdo WHERE MaChuong = ".$arrsave[$i]." AND Mucdo = 2 ORDER BY ThoiGian ASC LIMIT 1";
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
			$query_3 = "SELECT COUNT(id) FROM tbl_hs_mucdo WHERE MaChuong = ".$arrsave[$i]." AND Mucdo = 3";
			$results_3 = mysqli_query($dbc,$query_3);
			kt_query($results_3,$query_3);
			$number_ch = mysqli_fetch_array($results_3,MYSQLI_ASSOC);
			$n = intval($number_ch['COUNT(id)']);
			if($n<3)
			{
				$query_2 = "INSERT INTO tbl_hs_mucdo ( MaHocSinh,MaChuong,Mucdo,Trinhdo,ThoiGian) VALUES ('1','".$arrsave[$i]."','3',".$m_vd.",NOW())"; 
				$results_2 = mysqli_query($dbc, $query_2); 
				kt_query($results_2, $query_2);

			}
			else
			{
				$query_3 = "SELECT * FROM tbl_hs_mucdo WHERE MaChuong = ".$arrsave[$i]." AND Mucdo = 3 ORDER BY ThoiGian ASC LIMIT 1";
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
			$query_3 = "SELECT COUNT(id) FROM tbl_hs_mucdo WHERE MaChuong = ".$arrsave[$i]." AND Mucdo = 4";
			$results_3 = mysqli_query($dbc,$query_3);
			kt_query($results_3,$query_3);
			$number_ch = mysqli_fetch_array($results_3,MYSQLI_ASSOC);
			$n = intval($number_ch['COUNT(id)']);
			if($n<3)
			{
				$query_2 = "INSERT INTO tbl_hs_mucdo ( MaHocSinh,MaChuong,Mucdo,Trinhdo,ThoiGian) VALUES ('1','".$arrsave[$i]."','4',".$m_vdc.",NOW())"; 
				$results_2 = mysqli_query($dbc, $query_2); 
				kt_query($results_2, $query_2);

			}
			else
			{
				$query_3 = "SELECT * FROM tbl_hs_mucdo WHERE MaChuong = ".$arrsave[$i]." AND Mucdo = 4 ORDER BY ThoiGian ASC LIMIT 1";
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
