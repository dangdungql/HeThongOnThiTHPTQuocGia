<?php include("general.php"); ?>
<?php include("headerMore.php"); 
include_once('inc/myconnect.php');
include_once('inc/function.php');

?>
<div class="container">
    <div class="row">
        <div class="show-gird col-12 col-sm-12">
            
                <h3 class="blue-text">Danh sách điểm thi</h3>
        
                <table class="table table-striped tm-full-width-large-table">
                    <thead>
                        <tr>
                            <th>Họ và tên</th>
                            <th>Tên đề thi</th>
                            <th>Giờ Nạp bài</th>
                            <th>Điểm</th>
                        </tr>
                    </thead>
                    <tbody>

                       <?php
                        $query_2 = "SELECT * FROM hs_baithi";
                        $results_2 = mysqli_query($dbc, $query_2);
                        kt_query($results_2, $query_2);
                        while ($bt = mysqli_fetch_array($results_2, MYSQLI_ASSOC)) {
                        ?>
                        <tr>
                            <td><?php echo $bt['id_user']; ?></td>
                            <td><?php echo $bt['id_baithi']; ?></td>
                            <td><?php echo $bt['gionapbai']; ?></td>
                            <td><?php echo $bt['diem']; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>        
                </table>
            
        </div> <!-- tm-section -->        
    </div>
</div>
