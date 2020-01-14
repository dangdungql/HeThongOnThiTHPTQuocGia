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
$query_3 = "SELECT * FROM giao_vien";
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
    <?php include ('Components/Navigation.php')?>
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
                        <h3>Quản lý tài khoản giáo viên</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên Giáo Viên</th>
                                    <th>Tên Đăng Nhập</th>
                                    <th>Môn Học</th>
                                    <th>Địa Chỉ</th>
                                    <th>Số điện thoại</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($answers = mysqli_fetch_array($results_3, MYSQLI_ASSOC)) {
                                    $row = $answers;
                                    echo '<tr id="gv'.$answers["id"].'" onclick="selectTeacher('.$row["id"].')">'
                                        . '<td>' .
                                        $answers["id"] .
                                        '</td>'
                                        . '<td>' .
                                        $answers["name"] .
                                        '</td>'
                                        . '<td>' .
                                        $answers["user_name"] .
                                        '</td>'
                                        . '<td>' .
                                        $answers["subject_name"] .
                                        '</td>'
                                        . '<td>' .
                                        $answers["address"] .
                                        '</td>'
                                        . '<td>' .
                                        '0'.$answers["phone_number"] .
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
        <?php include ('Components/ProfileContain.php')?>
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
    function insertTeacher() {
        let name = $("#name_input").val();
        let userName = $("#user_name_input").val();
        let pass = $("#password").val();
        let phone = $("#phone_number").val();
        $.ajax({
            url: 'Database/Process.php',
            method: 'POST',
            data: {addTeacher: 1, name: name, user_name: userName, pass: pass, phone: phone, address: '', subject: ''},
            success: (res) => {
                console.log(res)
            }
        })
    }
    function selectTeacher(a, b) {
        console.log(a, b)
        $(`#gv${a}`).addClass("d-none");
        $.ajax({
            url: 'Database/Process.php',
            method: 'POST',
            data: {getListTeacher: 1, id: a},
            success: (res) => {
                const data = JSON.parse(res);
                console.log(data)
                if(data && Array.isArray(data.message) && data.message.length >0) {
                    const info = data.message[0];
                    document.getElementById("name_input").value = info.name;
                }
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
