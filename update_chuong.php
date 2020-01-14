<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script type="text/javascript" src="assets/tinymce/tinymce/tinymce.min.js"></script>
--><!-- <script type="text/javascript" src="assets/tinymce/tiny.js"></script>
-->  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="site/css/style-admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<div class ="main-container" style="display: flex;">
    <?php include("navBar.php"); ?>
    <div class ="wrapper">
    <?php include("headerAdmin.php"); ?>

<?php //include("general.php"); ?>
<?php //include("headerMore.php"); 
include_once('inc/myconnect.php');
include_once('inc/function.php');
$ch = $_GET['ch'];

$query_2 = "SELECT * FROM tblchuong WHERE MaChuong=".$ch;
$results_2 = mysqli_query($dbc, $query_2);
kt_query($results_2, $query_2);

$ch = mysqli_fetch_array($results_2, MYSQLI_ASSOC);
$note = $ch['note'];
if($note !== '')
{
    $arr_chuong = (explode(",",$note));    
}
else{
    $arr_chuong = array(0,0,0,0);
}
?>
<div class="container-add-baihoc container-baihoc">
            <div class="pad-30 no-pad-30">
                            <h3 class="blue-text">Ma trận môn vật lý</h3>
                    <thead>
                        <tr>
                            <label class="container-btn1 mdl-radio__label">Tên Chương</label>
                            <input type="" name="" value="<?php echo $ch['TenChuong']; ?>">

                        </tr>
                    </thead>
                    <br/>
                    <div class="row choosen-courses">
                            <table class="table">
            <tr>
                <!-- <td><p  class="markDescription">Lọc bài giảng</p></td> -->
                <td>
                    <div class="form-check-inline">
                        <label class="container-btn1 mdl-radio__label">Vận dụng cao
                          <input type="" checked="checked" name='vdcao' value="<?php echo $arr_chuong[3]; ?>" >
                          <span class="checkmark1"></span>
                        </label>
                    </div>
                    <!-- <p><i>0 bài</i></p> -->
                </td>
                <td>
                    <div class="form-check-inline">
                        <label class="container-btn1 mdl-radio__label">Vân dụng
                          <input type="" checked="checked" name='vandung' value="<?php echo $arr_chuong[2]; ?>" >
                          <span class="checkmark1"></span>
                        </label>
                    </div>
                    <!-- <p><i>0 bài</i></p> -->
                </td>
                <td>
                    <div class="form-check-inline mdl-radio__label">
                        <label class="container-btn1 color-red">Thông hiểu
                          <input type="" checked="checked" name='thonghieu' value="<?php echo $arr_chuong[1]; ?>" >
                          <span class="checkmark1"></span>
                        </label>
                    </div>
                    <!-- <p><i>0 bài</i></p> -->
                </td>
                <td>
                    <div class="form-check-inline mdl-radio__label">
                        <label class="container-btn1">Nhận biết
                          <input type="" checked="checked" name='nhanbiet' value="<?php echo $arr_chuong[0]; ?>" >
                          <span class="checkmark1"></span>
                        </label>
                    </div>
                    <!-- <p><i>0 bài</i></p> -->
                </td>
            </tr>
        </table>
                    <!-- <tbody>
                        <th>Nhận biết</th>
                        <input type="" name="" value="<?php echo $arr_chuong[0]; ?>" width="50">
                        <br/>
                        <th>Thống Hiểu</th>
                        <input type="" name="" value="<?php echo $arr_chuong[1]; ?> ">
                        <br/>
                        <th>Vận dụng</th>
                        <input type="" name="" value="<?php echo $arr_chuong[2]; ?>">
                        <br/>
                        <th>Vận dụng cao</th>
                        <input type="" name="" value="<?php echo $arr_chuong[3]; ?>">                        
                    </tbody> -->
                    <div><a class= "btn-comeback" href="lesson.php">Quay lại bài học</a></div>
                    <div class="pad-30"><input type="submit" name="submit" class="btn btn-primary btn-style-general" value="Cập nhật"></div>        
            </div>
        </div> <!-- tm-section -->        
    </div>
</div>
    </div>
</div>
