<?php include("general.php"); ?>
<?php include("headerMore.php"); 
include_once('inc/myconnect.php');
include_once('inc/function.php');
require_once ("vendor/autoload.php");

use Phpml\Regression\LeastSquares;
$samples = [[31.24, 6.57], [31.33, 7.65], [26.04, 6.72], [24.84, 5.63],[30.48, 6.34],[31.48, 4.98],[29.08, 5.03]];
?>
<div class="container">
    <div class="row">
        <div class="show-gird col-12 col-sm-12">
            <br/>
                <h3 class="blue-text">Danh sách điểm thi và dự đoán 2020</h3>
            <br/>
                <table class="table table-striped tm-full-width-large-table">
                    <thead>
                        <tr>
                            <th>Trường</th>
                            <th>Khoa</th>
                            <th>2013</th>
                            <th>2014</th>
                            <th>2015</th>
                            <th>2016</th>
                            <th>2017</th>
                            <th>2018</th>
                            <th>2019</th>
                            <th>2020</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                        if (($handle = fopen("diemchuan.csv", "r")) !== false) {
                            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                                $num = count($data);
                                $targets = [$data[1], $data[2], $data[3], $data[4],$data[5],$data[6],$data[7]];
                                $query_1 = "SELECT * FROM tbl_khoa WHERE id=".$data[0];
                                $results_1 = mysqli_query($dbc, $query_1);
                                kt_query($results_1, $query_1);
                                $ch = mysqli_fetch_array($results_1, MYSQLI_ASSOC);

                                $query_2 = "SELECT * FROM tbl_daihoc WHERE id=".$ch['id_daihoc'];
                                $results_2 = mysqli_query($dbc, $query_2);
                                kt_query($results_2, $query_2);
                                $dh = mysqli_fetch_array($results_2, MYSQLI_ASSOC);
                                
                                $regression = new LeastSquares();
                                $regression->train($samples, $targets);
                                $t=$regression->predict([28.16, 4.6]);
                                ?>
                                <tr>
                                    <td><?php echo $dh['TenTruong']; ?></td>
                                    <td><a href="bieudodiemchuan.php?khoa=<?php echo $data[0]; ?>"><?php echo $ch['TenKhoa']; ?></a></td>
                                    <td><?php echo (round($data[1],1)); ?></td>
                                    <td><?php echo (round($data[2],1)); ?></td>
                                    <td><?php echo $data[3]; ?></td>
                                    <td><?php echo $data[4]; ?></td>
                                    <td><?php echo $data[5]; ?></td>
                                    <td><?php echo $data[6]; ?></td>
                                    <td><?php echo $data[7]; ?></td>
                                    <td style="color: red"><?php echo (round($t,1)); ?></td>
                                </tr>
                                <?php
                                //echo $t."-";    
                            }
                            fclose($handle);
                        }
    
                    ?>





<!--                         <tr>
                            <td>Đại học công nghệ thông tin</td>
                            <td>Công nghệ phần mềm</td>
                            <td>20.75</td>
                            <td>21.38</td>
                            <td>24.25</td>
                            <td>24.00</td>
                            <td>27.00</td>
                            <td>23.20</td>
                            <td>25.30</td>
                            <td style="color: red">25.00</td>
                        </tr>
                        <tr>
                            <td>Đại học công nghệ thông tin</td>
                            <td>Mạng máy tính và truyền thông</td>
                            <td>20.75</td>
                            <td>21.38</td>
                            <td>24.25</td>
                            <td>24.00</td>
                            <td>27.00</td>
                            <td>23.20</td>
                            <td>25.30</td>
                            <td style="color: red">25.00</td>
                        </tr>
 -->
                    </tbody>        
                </table>
            
        </div> <!-- tm-section -->        
    </div>
</div>
