
<?php
ob_start(); 
include("general.php");
include("headerMore.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400"> 
<?php
include_once ("vendor/autoload.php");

use Phpml\Classification\KNearestNeighbors;
//index.php
include_once('inc/myconnect.php');
include_once('inc/function.php');
$query_1 = "SELECT * FROM sothich ORDER BY id ASC";
$results_1=mysqli_query($dbc,$query_1);
kt_query($results_1,$query_1);

$query_2 = "SELECT * FROM diachi ORDER BY id ASC";
$results_2=mysqli_query($dbc,$query_2);
kt_query($results_2,$query_2);

$query_3 = "SELECT * FROM tohopmon ORDER BY id ASC";
$results_3=mysqli_query($dbc,$query_3);
kt_query($results_3,$query_3);

$query_4 = "SELECT * FROM hs_luachon WHERE MAHS = 1";
$results_4=mysqli_query($dbc,$query_4);
kt_query($results_4,$query_4);
$luachon = mysqli_fetch_array($results_4,MYSQLI_ASSOC);
$gsothich = $luachon['MA_SoThich'];
$gdiachi = $luachon['MA_DiaChi'];
$gtohop = $luachon['Ma_Khoi'];
?>


<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
<div class="container ds">
    <h2 align="center" class ="pad-30">ĐỊNH HƯỚNG BẢN THÂN</h2>
    <div style="width: 100%; margin:0 auto">
        <script>
            var form_data="";
            $(document).ready(function(){
                var form_data = "";
                $('#sothich').multiselect({
                    nonSelectedText:'Sở thích',
                    enableFiltering: true,
                    enableCaseInsensitiveFiltering: true,
                    buttonWidth:'500px',
                    includeSelectAllOption: true,
                });

                $('#diachi').multiselect({
                    nonSelectedText: 'Địa điểm',
                    enableFiltering: true,
                    enableCaseInsensitiveFiltering: true,
                    buttonWidth:'500px',
                    includeSelectAllOption: true,
                });

                $('#quatrinh').multiselect({
                    nonSelectedText: 'Quy trình đào tạo ',
                    enableFiltering: true,
                    enableCaseInsensitiveFiltering: true,
                    buttonWidth:'500px',
                    includeSelectAllOption: true,

                    });

                //$('#framework_form').on('submit', function(event){
                $("#framework_form").click(function () {
                    //event.preventDefault();
                    form_data = $(this).serialize();
                    //form_data = "bbbbbbbbbbb";
                    //alert(form_data);
                    document.getElementById("ds").value=form_data;                   
                });
                $("#submitButton").click(function () {
                    //$("#framework_form").click(function () {
                    //var form_data = $(this).serialize();
                    //document.getElementById("ds").value=form_data;
                    var form_data1=form_data;
                    $.ajax({
                        url: "goiytruonghoc.php",
                        data: {
                            number : form_data
                         //number : $('#ds').val()
                    },
                        type: 'post',
                        success: function (response)
                        {
                            $('#dsdh').html(response);
                        }
                    });
                });

                // remove class btn

            });

        </script>
                <?php 

            // if($_SERVER['REQUEST_METHOD']=='POST')
            // {
            //     $a=$_POST['ds'];
            //     //sssssecho $a;
            //     $a = rtrim($a, '&ds='); 
            //     $arr_link = explode('&',$a);
            //     $st = "";
            //     $dc = "";
            //     $th = "";
            //     for($i=0;$i<count($arr_link);$i++)
            //     {
            //         if(strpos($arr_link[$i], "sothich") !== false)
            //         {
            //             $t = ltrim($arr_link[$i], 'sothich=');
            //             $st .=$t;
            //             $st .="-";
            //         }
            //         else if(strpos($arr_link[$i], "diachi") !== false)
            //         {
            //             $t = ltrim($arr_link[$i], 'diachi=');
            //             $dc .=$t;
            //             $dc .="-";
            //         }
            //         else if(strpos($arr_link[$i], "quatrinh") !== false)
            //         {
            //             $t = ltrim($arr_link[$i], 'quatrinh=');
            //             $th .=$t;
            //             $th .="-";
            //         }
            //     }
            //     if(strlen($st) > 1)
            //         $st = rtrim($st, '-'); 
            //     if(strlen($dc) > 1)
            //         $dc = rtrim($dc, '-'); 
            //     if(strlen($th) > 1)
            //         $th = rtrim($th, '-'); 
            //     $query="UPDATE hs_luachon SET MA_SoThich = '{$st}', MA_DiaChi = '{$dc}', Ma_Khoi = '{$th}' WHERE MAHS=1";
            //     $results=mysqli_query($dbc,$query);
            //     kt_query($results,$query);
            //      echo "<meta http-equiv='refresh' content='0'>";

            //     // if(mysqli_affected_rows($dbc)==1)
            //     // {
            //     //     echo "<p style='color:green;'>Thay đổi mật khẩu thành công</p>";
            //     // }
            //     // else
            //     // {
            //     //     echo "<p style='required'>Thay đổi mật khẩu thành công</p>";
            //     // }                   


            // }
            ?>

        <form method="POST" id="framework_form" enctype="multipart/form-data">
            <div class="row btn-sothich">
                <label class ="col-3 style-title-ds" style="font-size:15px;">Sở Thích</label>

                <select class = "col-9" id="sothich" name="sothich" multiple >
<?php
                            $arr_st = array_map('intval', explode('-', $gsothich));
                            sort($arr_st);
                            $j=0;
                            //$i=1;
                            while($answers=mysqli_fetch_array($results_1,MYSQLI_ASSOC))
                            {  
                                if($arr_st[$j] === intval($answers["id"]))
                                {
                                    echo '<option selected value="'.$answers["id"].'">'.$answers["noidung"].'</option>';
                                    $j++;
                                }
                                else
                                {
                                    echo '<option value="'.$answers["id"].'">'.$answers["noidung"].'</option>';
                                }
                                //$i++;
                            }
                      ?>                </select>
            </div>
            <div class= "row btn-diadiem">
                <label class ="col-3 style-title-ds" style="font-size:15px;">Địa điểm</label> 
                <select class ="col-9" id="diachi" name="diachi" multiple class="mdb-select md-form">
                    <?php
                            $arr_dc = array_map('intval', explode('-', $gdiachi));
                            sort($arr_dc);
                            $j=0;
                            while($answers=mysqli_fetch_array($results_2,MYSQLI_ASSOC))
                            {
                                if($arr_dc[$j] === intval($answers["id"]))
                                {          
                                    echo '<option selected value="'.$answers["id"].'">'.$answers["noidung"].'</option>';
                                    $j++;
                                }
                                else
                                {
                                    echo '<option value="'.$answers["id"].'">'.$answers["noidung"].'</option>';
                                }
                            }
                        ?>
                </select>  
            </div>
            <div class ="row btn-tohop">     
                    <label class ="col-3 style-title-ds" style="font-size:15px;">Quy trình đào tạo</label>
                <select class ="col-9" id="quatrinh" name="quatrinh" multiple class="mdb-select md-form">
                    <?php
                                $arr_th = array_map('intval', explode('-', $gtohop));
                                sort($arr_th);
                                $j=0;
                                while($answers=mysqli_fetch_array($results_3,MYSQLI_ASSOC))
                                {
                                    if($arr_th[$j] === intval($answers["id"]))
                                    {          
                                        echo '<option selected value="'.$answers["id"].'">'.$answers["noidung"].'</option>';
                                        $j++;
                                    }
                                    else
                                    {
                                        echo '<option value="'.$answers["id"].'">'.$answers["noidung"].'</option>';
                                    }
                                }
                                ?>
                </select>
            </div>
            <div class= "row">
                <div class="form-group" align="right">
                    <input type="hidden" type="" id="ds" name="ds" value="">
                    <input id="submitButton" class="btn btn-background-blue-bold" name="submit" value="Chọn"/> <!--type="submit"--> 
                </div>
            </div>
        </form>
    </div>
</div>
<div class="container">
    <div id="dsdh" class="row">
        <div class="show-gird col-12 col-sm-12" >
            
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

                    <?php

                    $arr_st = array_map('intval', explode('-', $gsothich));
                    $arr_dc = array_map('intval', explode('-', $gdiachi));
                    $arr_qt = array_map('intval', explode('-', $gtohop));
                    $arrdc = array();
                    for($i=0;$i<count($arr_dc);$i++)
                    {
                        if($arr_dc[$i] === 1)
                            array_push($arrdc,'210.03123,1058.20189');
                        else if($arr_dc[$i] === 2)
                            array_push($arrdc,'160.5445,1080.71728');
                        else if($arr_dc[$i] === 3)
                            array_push($arrdc,'108.23084,1066.2967');
                    }
                    $samples = [];
                    $labels = [];
                    $row = 1;

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
                        while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                            $num = count($data);
                            
                            if (in_array($data[$nganh], $arr_st)) {
                             $sample = [$data[$diem], $data[$diachi_x], $data[$diachi_y],$data[$nganh],$data[$quytrinh]];
                                
                             array_push($samples, $sample);
                             array_push($labels, $data[$khoa]);

                                //$row++;
                            }
                        }
                        fclose($handle);
                    }
                    $a = $arr_st;
                    $b = $arr_dc;
                    $c = $arr_qt;
                    $arr = [];
                    $arr1=$samples;
                    $arr2=$labels;
                    $arr1t = [];
                    $arr2t = [];
                    $numberselect = count($a)*count($b);
                    for($qt = 0 ; $qt < count($c) ; $qt++)
                    {
                        for($l=0;$l<count($a);$l++)
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

                                for($i;$i>0;$i--)
                                {

                                    $arr1t = [];
                                    $arr2t = [];
                                    $classifier = new KNearestNeighbors($k = 1);
                                    $classifier->train($arr1, $arr2);
                                    $arr_toado = explode(",",$arrdc[$j]);
                                    $arr_x = floatval($arr_toado[0]);
                                    $arr_y = floatval($arr_toado[1]);
                                    $prediction = $classifier->predict([25, $arr_x, $arr_y,$a[$l],$c[$qt]]);
                                    $numerical = array_search($prediction,$arr2);
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
                    //echo "---------------";
                    //print_r($arr);
                    ?>
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
                            <!-- <td>A00, A01</td> -->
                            <td><?php echo $ch['DiemChuan']; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody> 
                         
                </table>            
        </div>
    </div>
</div>

<script type="text/javascript">
    // $('.btn-background-blue-bold').click(function(){
    //     $('.show-gird').show();
    // })

    // $("#submitButton").click(function () {
    //     // tinyMCE.triggerSave();
    //     //    $("#comment-message").css('display', 'none');
    //     // var str = $("#frm-comment").serialize();

    //     $.ajax({
    //         url: "comment-add.php",
    //         data: form_data,
    //         type: 'post',
    //         success: function (response)
    //         {
    //             $('#dsdh').html(response);
    //         }
    //     });
    // });
    
    // $(document).ready(function () {
    //        listComment();
    // });

    // function listComment() {
    //     $.post("comment-list.php",
    //             function (data) {
    //                 //console.log(data);
    //                    var data = JSON.parse(data);
                    
    //                 var comments = "";
    //                 var replies = "";
    //                 var item = "";
    //                 var parent = -1;
    //                 var results = new Array();

    //                 var list = $("<ul class='outer-comment'>");
    //                 var item = $("<p>").html(comments);

    //                 for (var i = 0; (i < data.length); i++)
    //                 {
    //                     var commentId = data[i]['id'];

    //                     //console.log(commentID);
    //                     parent = data[i]['parent_id'];

    //                     if (parent == "0")
    //                     {
    //                         comments = "<div class='comment-read'><div class='row'>"+
    //                         "<div class='col-2-edit'><img class='avatar-comment' src='"+data[i]['hinhanh']+"'></div>"+
    //                         "<div class='col-10-edit' style = 'align-self: center;'>"+
    //                         "<p class='user-name'> "+data[i]['name']+" : " + data[i]['comment'] + "</p>"+
    //                         "<a href='#' class='js-lesson-reply-input' onClick='postReply(" + commentId + ")'>Trả lời</a>"+
    //                         "<a href='#' class='js-lesson-reply-input' onClick='Deletecmt(" + commentId + ")'> Xóa</a><span class='date-time'>" + data[i]['date'] + "</span><br><br>"+



    //                         "</div></div></div>";

    //                         var item = $("<p>").html(comments);
    //                         list.append(item);
    //                         var reply_list = $('<ul>');
    //                         item.append(reply_list);
    //                         listReplies(commentId, data, reply_list);
    //                     }
    //                 }
    //                 $("#output").html(list);
    //             });
    // }
</script>
<?php ob_end_flush();
?>