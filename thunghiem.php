<?php
include_once('inc/myconnect.php');
include_once('inc/function.php');
$made=2;
	$da = "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,";
	$ar_dung = explode(",",$da);
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
			echo "chuong ".$arrsave[$i]." Nhan biet ".$m_nb." tong so cau ".$n_nb."</br>";	
		}
		if($n_thonghieu !== 0)
		{
			$m_th = round($n_th/$n_thonghieu,2);
			echo "chuong ".$arrsave[$i]." Thong Hieu ".$m_th." tong so cau ".$n_th."</br>";	
		}
		if($n_vandung !== 0)
		{
			$m_vd = round($n_vd/$n_vandung,2);
			echo "chuong ".$arrsave[$i]." Van dung ".$m_vd." tong so cau ".$n_vd."</br>";	
		}
		if($n_vandungcao !== 0)
		{
			$m_vdc = round($n_vdc/$n_vandungcao,2);
			echo "chuong ".$arrsave[$i]." Van dung cao ".$m_vdc." tong so cau ".$n_vdc."</br>";	
		}
	}
?>
