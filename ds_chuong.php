<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script type="text/javascript" src="assets/tinymce/tinymce/tinymce.min.js"></script>
--><!-- <script type="text/javascript" src="assets/tinymce/tiny.js"></script>
-->  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="site/css/style-admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<div class ="main-container" style="display: flex;">
<?php //include("general.php"); ?>
<?php //include("headerMore.php"); 
include_once('inc/myconnect.php');
include_once('inc/function.php');
include("navBar.php");
 ?>
<div class ="wrapper">
    <?php include("headerAdmin.php"); ?>
<div class="container">
    <div class="row">
        <div class="show-gird col-12 col-sm-12">
            
                <h3 class="blue-text">Ma trận môn vật lý</h3>
        
                <table class="table table-striped tm-full-width-large-table">
                    <thead>
                        <tr>
                            <th>Tên Chương</th>
                            <th style="text-align: center;">Nhận biết</th>
                            <th style="text-align: center;">Thông hiểu</th>
                            <th style="text-align: center;">Vận dụng</th>
                            <th style="text-align: center;">Vận dụng cao</th>
                            <!-- <th>Thay đổi</th> -->

                        </tr>
                    </thead>
                    <tbody>

                       <?php
                        $query_2 = "SELECT * FROM tblchuong WHERE MaMonHoc=1";
                        $results_2 = mysqli_query($dbc, $query_2);
                        kt_query($results_2, $query_2);
                        while ($ch = mysqli_fetch_array($results_2, MYSQLI_ASSOC)) {
                        $note = $ch['note'];
                        if($note !== '')
                        {
                            $arr_chuong = (explode(",",$note));    
                        }
                        else{
                            $arr_chuong = array(0,0,0,0);
                        }
                        
                        ?>
                        <tr>
                            <td><?php echo $ch['TenChuong']; ?></td>
                            <td style="text-align: center;"><?php echo $arr_chuong[0] ?></td>
                            <td style="text-align: center;"><?php echo $arr_chuong[1] ?></td>
                            <td style="text-align: center;"><?php echo $arr_chuong[2] ?></td>
                            <td style="text-align: center;"><?php echo $arr_chuong[3] ?></td>
                            <td style="text-align: center;"><a href="update_chuong.php?ch=<?php echo $ch['MaChuong']; ?>">Thay đổi</a></td>
                            <td style="text-align: center;"><a style="color: red" href="">Xóa</a></td>

                        </tr>
                    <?php } ?>
                    </tbody>        
                </table>
            
        </div> <!-- tm-section -->        
    </div>
</div>
</div>
</div>
