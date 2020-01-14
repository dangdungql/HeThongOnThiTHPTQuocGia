<?php
include('inc/myconnect.php');
include('inc/function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>My Admin - is a responsive admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
$query_3 = "SELECT * FROM tbl_mophong";
$results_3 = mysqli_query($dbc, $query_3);
kt_query($results_3, $query_3);
?>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
        <div class="navbar-header"><a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)"
                                      data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <div class="top-left-part"><a class="logo" href="dashboard.php"><i class="glyphicon glyphicon-fire"></i>&nbsp;<span
                        class="hidden-xs">My Admin</span></a></div>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs hidden-lg waves-effect waves-light"><i
                            class="ti-arrow-circle-left ti-menu"></i></a></li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li>
                    <form role="search" class="app-search hidden-xs">
                        <input type="text" placeholder="Tìm kiếm..." class="form-control">
                        <a href=""><i class="ti-search"></i></a>
                    </form>
                </li>
                <li>
                    <a class="profile-pic" href="#"> <img src="images/users/hritik.jpg" alt="user-img" width="36"
                                                          class="img-circle"><b class="hidden-xs">Admin</b> </a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <?php include ('Components/Menu.php')?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-12">
                    <h4 class="page-title">Basic Table</h4>
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Basic Table</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3>Quản lý Mô Phỏng Hiện Tượng</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên Mô Phỏng</th>
                                    <th>Link Mô Phỏng</th>
                                    <th>Link Hình Ảnh Mô Phỏng</th>
                                    <th>Mã Môn </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($answers = mysqli_fetch_array($results_3, MYSQLI_ASSOC)) {
                                    $row = $answers;
                                    echo '<tr id="gv'.$answers["id"].'" onclick="selectMoPhong('.$row["id"].')">'
                                        . '<td>' .
                                        $answers["id"] .
                                        '</td>'
                                        . '<td>' .
                                        $answers["TenMoPhong"] .
                                        '</td>'
                                        . '<td>' .
                                        $answers["link"] .
                                        '</td>'
                                        . '<td>' .
                                        $answers["link_img"] .
                                        '</td>'
                                        . '<td>' .
                                        $answers["MaMonHoc"] .
                                        '</td>'
                                        . '</tr>';
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <span onclick="addTeacher()"><a id="add_teacher" target="_blank" class="btn btn-info btn-rounded waves-effect waves-light">Thêm giáo viên</a></span>
                    <span><a href="http://wrappixel.com/templates/myadmin/" target="_blank" class="btn btn-info btn-rounded waves-effect waves-light btn-warning">Sửa thông tin</a></span>
                    <span><a href="http://wrappixel.com/templates/myadmin/" target="_blank" class="btn btn-info btn-rounded waves-effect waves-light btn-danger">Xoá hàng</a></span>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <?php include ('Components/MoPhongInput.php')?>
    </div>
    <!-- /#page-wrapper -->
    <footer class="footer text-center"> 2017 &copy; Trang quản trị hệ thống ôn thi đại học</footer>
</div>
<script>


    function addTeacher() {
        $(".input-wrapper").removeClass("d-none");
        $(".input-wrapper").addClass("m-0");
        $("#profile-header").addClass("d-none");

        // var objDiv = document.getElementById("page-wrapper");
        // objDiv.scrollTop = objDiv.scrollHeight;

    }
    
    function selectMoPhong() {
        
    }

    function themMoPhong() {
        let name = $("#name_input").val();
        let link = $("#user_name_input").val();
        let linkImg = $("#password").val();
        let idMonHoc = $("#phone_number").val();
        $.ajax({
            url: 'Database/Process.php',
            method: 'POST',
            data: {themMoPhong: 1, ten: name, link: link, link_img: linkImg, idMonHoc: 5},
            success: (res) => {
                console.log(res)
            }
        })
    }
</script>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
<!--Nice scroll JavaScript -->
<script src="js/jquery.nicescroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/myadmin.js"></script>
</body>

</html>
