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
            
                <h3 class="blue-text">Danh sách bài giảng</h3>
        
                <table class="table table-striped tm-full-width-large-table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th style="text-align: left;">Tên Chương</th>
                            <th style="text-align: left;">Tên bài giảng</th>
                        </tr>
                    </thead>
                    <tbody>

                       <?php
                       $i=1;
                        $query_2 = "SELECT * FROM tblchuong WHERE MaMonHoc=1";
                        $results_2 = mysqli_query($dbc, $query_2);
                        kt_query($results_2, $query_2);
                        while ($ch = mysqli_fetch_array($results_2, MYSQLI_ASSOC)) {
                            $query_3 = "SELECT * FROM chitietcongthuc WHERE MaChuong=".$ch['MaChuong'];
                            $results_3 = mysqli_query($dbc, $query_3);
                            kt_query($results_3, $query_3);
                            while ($ct = mysqli_fetch_array($results_3, MYSQLI_ASSOC)) {
                            
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td style="text-align: left;"><?php echo $ch['TenChuong']; ?></td>
                                <td style="text-align: left;"><?php echo $ct['TenCongThuc']; ?></td>
                                <td style="text-align: center;"><a href="<?php echo "update_baigiang.php?mabaigiang=".$ct['MaChiTiet']; ?>">Thay đổi</a></td>
                                <td style="text-align: center;"><a style="color: red" onClick="Deletecmt(<?php echo $ct['MaChiTiet']; ?>)">Xóa</a></td>

                            </tr>
                    <?php
                    $i++;
                    }
                        
                } ?>
                    </tbody>        
                </table>
            
        </div> <!-- tm-section -->        
    </div>
</div>
</div>
</div>
<script>
    function Deletecmt(commentId) {
        //srt=$('').val(commentId);
        console.log(commentId);
        if(confirm("Bạn có chắc chắn muốn xóa không?"))  
        {
            $.ajax({
                url: "delete_baigiang.php",
                data: 'baigiangdelete='+commentId,
                type: 'post',
                success: function (response)
                {
                    if (response)
                    {
                        location.reload();

                        //$("#comment-message").css('display', 'inline-block');
                        //listComment();
                    } else
                    {
                        alert("Failed to add comments !");
                        return false;
                    }
                }
            });
        }
        else
        {
            return false;
        }
    }
</script>