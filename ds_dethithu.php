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
//$dethi=$_GET['md'];
?>
<div class ="wrapper">
    <?php include("headerAdmin.php"); ?>
<div class="container">
    <div class="row">
        <div class="show-gird col-12 col-sm-12">
            
                <h3 class="blue-text">Danh sách đề thi thử</h3>
        
                <table class="table table-striped tm-full-width-large-table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th style="text-align: left;">Tên đề thi thử</th>
                            <th style="text-align: left;">Danh sách</th>
                            <!-- <th style="text-align: left;">Tên bài giảng</th> -->
                        </tr>
                    </thead>
                    <tbody>

                       <?php
                       $i=1;
                        $query_2 = "SELECT * FROM dethi WHERE MaMonHoc=1";
                        $results_2 = mysqli_query($dbc, $query_2);
                        kt_query($results_2, $query_2);
                        while ($ch = mysqli_fetch_array($results_2, MYSQLI_ASSOC)) {
                            
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td style="text-align: left;"><?php echo $ch['TenDeThi']; ?></td>
                                <td style="text-align: left;"><a href="<?php echo "ds_lambai.php?md=".$ch['Made']; ?>">Danh sách học sinh thi</a></td>
                                <td style="text-align: center;"><a href="<?php echo "update_dethi.php?madethi=".$ch['Made']; ?>">Thay đổi</a></td>
                                <td style="text-align: center;"><a style="color: red" href="">Xóa</a></td>

                            </tr>
                    <?php
                    $i++; }
                         ?>
                    </tbody>        
                </table>
            
        </div> <!-- tm-section -->        
    </div>
</div>
</div>
</div>