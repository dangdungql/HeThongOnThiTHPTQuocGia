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
                            <th>Email</th>
                            <th>Họ và tên</th>
                        </tr>
                    </thead>
                    <tbody>

                       <?php
                        $query_2 = "DELETE FROM dethi where Made=1";
                        $results_2 = mysqli_query($dbc, $query_2);
                        kt_query($results_2, $query_2);
                        ?>
                    </tbody>        
                </table>
            
        </div> <!-- tm-section -->        
    </div>
</div>
