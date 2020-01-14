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
                            <th>id</th>
                            <th>Email</th>
                            <th>Họ và tên</th>
                        </tr>
                    </thead>
                    <tbody>

                       <?php
                        $query_2 = "SELECT * FROM tbluser";
                        $results_2 = mysqli_query($dbc, $query_2);
                        kt_query($results_2, $query_2);
                        while ($bt = mysqli_fetch_array($results_2, MYSQLI_ASSOC)) {
                        ?>
                        <tr>
                            <td><?php echo $bt['id']; ?></td>
                            <td><?php echo $bt['taikhoan']; ?></td>
                            <td><?php echo $bt['hoten']; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>        
                </table>
            
        </div> <!-- tm-section -->        
    </div>
</div>
