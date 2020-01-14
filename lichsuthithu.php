<?php include("general.php"); ?>
<?php include("headerMore.php"); 
include_once('inc/myconnect.php');
include_once('inc/function.php');
//$dethi=$_GET['md'];
?>
<div class="container">
    <div class="row">
        <div class="show-gird col-12 col-sm-12">
            
                <h3 class="blue-text">Danh sách điểm thi</h3>
        
                <table class="table table-striped tm-full-width-large-table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên đề thi</th>
                            <th>Giờ Nạp bài</th>
                            <th>Điểm</th>
                        </tr>
                    </thead>
                    <tbody>

                       <?php
                        $query_2 = "SELECT DISTINCT u.hoten,dt.TenDeThi, hsbt.diem , hsbt.gionapbai FROM hs_baithi hsbt, tbluser u,dethi dt WHERE hsbt.id_user = u.taikhoan and hsbt.id_baithi=dt.Made";
                        $results_2 = mysqli_query($dbc, $query_2);
                        kt_query($results_2, $query_2);
                        $i=0;
                        while ($bt = mysqli_fetch_array($results_2, MYSQLI_ASSOC)) {
                        $i++;
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $bt['TenDeThi']; ?></td>
                            <td><?php echo $bt['gionapbai']; ?></td>
                            <td><?php echo $bt['diem']; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>        
                </table>
            
        </div> <!-- tm-section -->        
    </div>
</div>
