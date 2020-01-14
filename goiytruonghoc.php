<?php

require_once ("vendor/autoload.php");

use Phpml\Classification\KNearestNeighbors;


include_once 'inc/myconnect.php';
include_once 'inc/function.php';

$data = isset($_POST['number']) ? $_POST['number'] : "aaa";
//print_r($data);
//echo "aaaaaaaaaaaaaaaaaaaa";
//if($data === "aaa")
    
$val = explode("&ds",$data);
$a = $val[0];
 //echo "-----".$a."--------";

$arr_link = explode('&',$a);
// $st = "";
// $dc = "";
// $th = "";
$arrst = array();
$arrdc = array();
$arrqt = array();
for($i=0;$i<count($arr_link);$i++)
{
    if(strpos($arr_link[$i], "sothich") !== false)
    {
        $t = ltrim($arr_link[$i], 'sothich=');
        $st = intval($t);
        array_push($arrst,$st);

        //$st .=$t;

        //$st .="-";
    }
    else if(strpos($arr_link[$i], "diachi") !== false)
    {
        $t = ltrim($arr_link[$i], 'diachi=');
        $dc = intval($t);
        if($dc === 1)
            array_push($arrdc,'210.03123,1058.20189');
        else if($dc === 2)
            array_push($arrdc,'160.5445,1080.71728');
        else if($dc === 3)
            array_push($arrdc,'108.23084,1066.2967');

    }
    else if(strpos($arr_link[$i], "quatrinh") !== false)
    {
        $t = ltrim($arr_link[$i], 'quatrinh=');
        $qt = intval($t);
        if($qt === 1)
            array_push($arrqt,1);
        else if($qt === 2)
            array_push($arrqt,4);
    }
}
//print_r($arrst);
// print_r($arrst);
// echo "---------------";
// print_r($arrdc);

$samples = [];
$labels = [];
$row = 0;

$sepalLength = 0;
$sepalWidth = 1;
$petalLength = 2;
$petalWidth = 3;
$label = 5;

$diem = 0;
$nganh = 1;
$diachi_x = 3;
$diachi_y = 4;
$khoa =5;
$quytrinh = 7;


if (($handle = fopen("ds_daihoc.csv", "r")) !== false) {
    // if(count($arrst) === 1)
    // {
    //     while (($data = fgetcsv($handle, 1000, ",")) !== false) {
    //         $num = count($data);
    //         //echo "-*-".$data[$nganh]."-".$arrst[0];
    //         $nganhhoc = intval($data[$nganh]);
    //         $s_thich = intval($arrst[0]);
    //         if ($nganhhoc === $s_thich) {
    //             $sample = [$data[$diem], $data[$diachi_x], $data[$diachi_y],$data[$nganh],$data[$quytrinh]];
                
    //             array_push($samples, $sample);
    //             array_push($labels, $data[$khoa]);

    //             $row++;
    //         }
    //     }
    //     fclose($handle);
    // }
    // else
    // {
    //     while (($data = fgetcsv($handle, 1000, ",")) !== false) {
    //         $num = count($data);
            
    //         if (array_key_exists($data[$nganh], $arrst)) {
    // 	        $sample = [$data[$diem], $data[$diachi_x], $data[$diachi_y],$data[$nganh],$data[$quytrinh]];
    	        
    // 	        array_push($samples, $sample);
    // 	        array_push($labels, $data[$khoa]);

    //             //$row++;
    // 	    }
    //     }
    //     fclose($handle);
    // }
        while (($data = fgetcsv($handle, 1000, ",")) !== false) {
            $num = count($data);
            
            if (in_array($data[$nganh], $arrst)) {
             $sample = [$data[$diem], $data[$diachi_x], $data[$diachi_y],$data[$nganh],$data[$quytrinh]];
                
             array_push($samples, $sample);
             array_push($labels, $data[$khoa]);

                //$row++;
         }
        }
        fclose($handle);

}
//echo $row;
$a = $arrst;
$b = $arrdc;
$c = $arrqt;
$arr = [];
$arr1=$samples;
$arr2=$labels;
$arr1t = [];
$arr2t = [];
//print_r($labels);
$numberselect = count($a)*count($b);
for($qt = 0 ; $qt < count($c) ; $qt++)
{
    for($l = 0 ; $l < count($a) ; $l++)
    {
        for($j=0;$j<count($b);$j++)
        {
            if($numberselect < 2)
                $i=4;
            else if($numberselect < 3)
                $i=3;
            else if($numberselect < 4)
                $i=3;
            else
                $i=2;
            // if(count($a) < 2)
            //     $i=4;
            // else if(count($a) < 3)
            //     $i=3;
            // else if(count($a) < 4)
            //     $i=3;
            // else
            //     $i=2;

            for($i;$i>0;$i--)
            {

                $arr1t = [];
                $arr2t = [];
                $classifier = new KNearestNeighbors($k = 1);
                $classifier->train($arr1, $arr2);
                $arr_toado = explode(",",$b[$j]);
                $arr_x = floatval($arr_toado[0]);
                $arr_y = floatval($arr_toado[1]);
                $prediction = $classifier->predict([25, $arr_x, $arr_y,$a[$l],$c[$qt]]);
                //$numerical=0;
                //print_r($arr2);
                $numerical = array_search($prediction,$arr2);
                //echo $numerical."------------------------";
                $t1=$arr1[$numerical][1];
                $t2=$a[$l];
                //if((in_array(intval($t1), $a))&&(!in_array(intval($prediction), $arr)))
                if(!in_array(intval($prediction), $arr))
                {
                    array_push($arr,$prediction);
                }   
                for ($t=0; $t < count($arr2); $t++) { 
                    if($t !== $numerical)
                    {
                        array_push($arr1t,$arr1[$t]);
                        array_push($arr2t,$arr2[$t]);
                    }
                }
                unset($arr1);
                unset($arr2);

                $arr1 = $arr1t;
                $arr2 = $arr2t; 
                            
            }
        }

    }
}

// for($i=0;$i<count($arr);$i++)
// {
//     echo $arr[$i]."</br>";
// }

?>
<h3 class="blue-text">Danh sách trường tham khảo</h3>
<table class="table table-striped tm-full-width-large-table">
                    <thead>
                        <tr>
                            <th>Tên Trường</th>
                            <th>Khoa</th>
                            <th>Địa chỉ</th>
                            <!-- <th>Tổ hợp môn</th> -->
                            <th>Điểm Chuẩn</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for($i=0;$i<count($arr);$i++)
                        {
                            $query_1 = "SELECT * FROM tbl_khoa WHERE id=".$arr[$i];
                            $results_1 = mysqli_query($dbc, $query_1);
                            kt_query($results_1, $query_1);
                            $ch = mysqli_fetch_array($results_1, MYSQLI_ASSOC);

                            $query_2 = "SELECT * FROM tbl_daihoc WHERE id=".$ch['id_daihoc'];
                            $results_2 = mysqli_query($dbc, $query_2);
                            kt_query($results_2, $query_2);
                            $dh = mysqli_fetch_array($results_2, MYSQLI_ASSOC);
                        ?>
                        <tr>
                            <td><?php echo $dh['TenTruong']; ?></td>
                            <td><?php echo $ch['TenKhoa']; ?></td>
                            <td><?php echo $dh['DiaDiem']; ?></td>
                            <!-- <td>A00</td> -->
                            <td><?php echo $ch['DiemChuan']; ?></td>
                        </tr>
                    <?php } ?>
<!--                         <tr>
                            <td>Đại học bách khoa tp HCM</td>
                            <td>Công nghệ thông tin</td>
                            <td>TP Hồ Chí Minh</td>
                            <td>A00, A01</td>
                            <td>25.3</td>
                        </tr>
                        <tr>
                            <td>Đại Học Khoa Học Tự Nhiên</td>
                            <td>Khoa học máy tính</td>
                            <td>TP Hồ Chí Minh</td>
                            <td>A00, A01</td>
                            <td>24.6</td>
                        </tr>
                        <tr>
                            <td>Đại Học Khoa Học Tự Nhiên</td>
                            <td>Toán học</td>
                            <td>TP Hồ Chí Minh</td>
                            <td>A00, A01</td>
                            <td>16.1</td>
                        </tr>
                        <tr>
                            <td>TRƯỜNG ĐẠI HỌC SƯ PHẠM</td>
                            <td>Sư phạm Tin học</td>
                            <td>Đà Nẵng</td>
                            <td>A00, A01</td>
                            <td>19,40</td>
                        </tr>
 -->
                    </tbody>        
                </table>