<?php
ob_start(); 

 include_once('inc/function.php'); ?>
    <?php include_once('inc/myconnect.php'); 
    include_once ("vendor/autoload.php");
  $g_client = new Google_Client();
  $g_client->setClientId("787272851719-phm1drt09sg3a4rv7vimg5k35deha06t.apps.googleusercontent.com");
  $g_client->setClientSecret("3RIk87LMjadazsFAUOWbokjz");
  $g_client->setRedirectUri("http://localhost/webhoctap/template/onthi/modalLogin.php");
  $g_client->addScope("email");
  $g_client->addScope("profile");
  //Step 2 : Create the url
  $auth_url = $g_client->createAuthUrl();
  ?>
<div class="container styleModal">    
    <!-- Modal đăng nhập -->
    <div class="modal fade" id="dangnhap" role="dialog">
      <div class="modal-dialog">        
          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class ="color-white">Đăng Nhập</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                  <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#signIn" role="tab">Đăng ký</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#logIn" role="tab">Đăng Nhập</a>
                      </li>
                  </ul><!-- Tab panes -->
                  <div class="tab-content">
                      <div class="tab-pane" id="signIn" role="tabpanel">
                          <div class="container"> 
                              <div class="row"> 
                                <div class="col-12 col-sm-12 col-md-12 well well-sm col-md-offset-4">              
                                    <form> 
                                          <div class="row"> 
                                                <div class="col-6 col-md-6"> 
                                                      <input class="form-control" name="firstname" placeholder="Họ" required="" autofocus="" type="text"> 
                                                </div> 
                                                <div class="col-6 col-md-6"> 
                                                      <input class="form-control" name="lastname" placeholder="Tên" required="" type="text"> 
                                                 </div> 
                                          </div> 
                                          <input class="form-control" name="youremail" placeholder="Email" type="email"> 
                                          <input class="form-control" name="password" placeholder="Mật khẩu" type="password"> 
                                          <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password">
                                           <label for=""> Ngày sinh</label> 
                                          <div class="row"> 
                                                <div class="col-4 col-md-4"> 
                                                      <select class="form-control">              
                                                              <option value="Day">Ngày</option>           
                                                      </select> 
                                                </div> 
                                                <div class="col-4 col-md-4"> 
                                                      <select class="form-control">              
                                                              <option value="Month">Tháng</option>            
                                                      </select> 
                                                </div> 
                                                <div class="col-4 col-md-4"> 
                                                      <select class="form-control">             
                                                             <option value="Year">Năm</option>           
                                                       </select> 
                                                </div> 
                                          </div> 
<!--                                           <label class="radio-inline">          
                                                <input name="sex" id="inlineCheckbox1" value="male" type="radio">Nam 
                                          </label> 
                                          <label class="radio-inline">          
                                                <input name="sex" id="inlineCheckbox2" value="female" type="radio">Nữ 
                                          </label>  -->
                                          <br> 
                                          <br> 
                                          <div class="row">
                                            <div class="col-4">
                                                <button class="btn-background-blue-gradian modal-btn-radius" type="submit"> Đăng ký</button> 
                                            </div>
                                            <div class="col-8 group-buttons">
                                                <div class="row">
                                                    <span class="social-media">
                                                        <span class="other-options"> &nbsp;hoặc đăng nhập với&nbsp;</span>
                                                        <span class="media-button">
                                                          <?php include './facebook_source.php'; ?>
                                                            <a href="<?= $loginUrl ?>" class="btn_fb_static trans" data-action="1" id="btnFBLogin">
                                                                <span class="media-icon facebook"><i class="fab fa-facebook-f"></i></span>
                                                            </a>
                                                            <?php
                                                            //echo "<a href='$auth_url'>Login Through Google </a>";
                                                            //echo '<a href="$auth_url">a</a>';
                                                            
                                                            echo "<a href='$auth_url' class='btn_gplus_static trans' data-action='1' id='btnGPLogin'><span class='media-icon google'><i class='fab fa-google'></i></span></a>";
                                                            ?>
                                                            <!-- <a class="btn_gplus_static trans" data-action="1" id="btnGPLogin">
                                                                <span class="media-icon google"><i class="fab fa-google"></i></span>
                                                            </a> -->
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                          </div>

                                    </form> 
                                </div> 
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane active" id="logIn" role="tabpanel">
                        <div class="container">
                            <?php 

      $code = isset($_GET['code']) ? $_GET['code'] : NULL;
if(isset($code)) {
    try {
        $token = $g_client->fetchAccessTokenWithAuthCode($code);
        $g_client->setAccessToken($token);
    }catch (Exception $e){
        echo $e->getMessage();
    }
    try {
        $pay_load = $g_client->verifyIdToken();
    }catch (Exception $e) {
        echo $e->getMessage();
    }
} else{
    $pay_load = null;
}
if(isset($pay_load)){
    $query="SELECT COUNT(1) FROM tbluser WHERE taikhoan = '".$pay_load['email']."'";
        $results=mysqli_query($dbc,$query);
        kt_query($results,$query);
        $tk=mysqli_fetch_array($results,MYSQLI_ASSOC);
        $number=$tk['COUNT(1)'];
        if($number !== '1')
        {
            $query_2="INSERT tbluser(taikhoan,hoten,hinhanh) VALUES ('{$pay_load['email']}','{$pay_load['name']}','{$pay_load['picture']}')";
                 $results_2=mysqli_query($dbc,$query_2);
                 kt_query($results_2,$query_2);
                 if(mysqli_affected_rows($dbc)==1)
                 {
                      $cookie_name = "email";
                      $cookie_value = $pay_load['email'];
                      setcookie($cookie_name, $cookie_value); // 86400 = 1 day
                      echo "<script>window.location = 'index.php'</script>";
                  }
        }
        else
        {
          $cookie_name = "email";
          $cookie_value = $pay_load['email'];
          //ob_start();
          setcookie($cookie_name, $cookie_value);
          $query_2 = 'SELECT * FROM tbluser WHERE taikhoan = "'.$cookie_value.'"';
          $results_2=mysqli_query($dbc,$query_2);
          kt_query($results_2,$query_2);
          $tk=mysqli_fetch_array($results_2,MYSQLI_ASSOC);
          $gv=$tk['admin'];
          if($gv === '1')
          {
            echo "<script>window.location = 'baihoc_add.php'</script>";
          }
          echo "<script>window.location = 'index.php'</script>";
        }


}

      if($_SERVER['REQUEST_METHOD']=='POST')
      {
    //       $errors=array();
    //       if (empty($_POST['email'])) {
    //           $errors[] = 'email';
    //       } else {
    //           $email=$_POST['email'];
    //       }
    //       if (empty($_POST['pswd'])) {
    //           $errors[] = 'pswd';
    //       } else {
    //           $name=$_POST['pswd'];
    //       }
        
    //       if(empty($errors))
    //       {
    //         $query="SELECT COUNT(1) FROM tbluser WHERE taikhoan = '".$email."'";

    //         $results=mysqli_query($dbc,$query);
    //         kt_query($results,$query);
    //         $tk=mysqli_fetch_array($results,MYSQLI_ASSOC);
    //         $number=$tk['COUNT(1)'];
    //         if($number === '0')
    //         {
    //             $query_2="INSERT tbluser(taikhoan,hoten) VALUES ('{$email}','{$name}')";
    //                  $results_2=mysqli_query($dbc,$query_2);
    //                  kt_query($results_2,$query_2);
    //                  if(mysqli_affected_rows($dbc)==1)
    //                  {
    //                       //$_SESSION["email"] = $pay_load['email'];
    //                       $cookie_name = "email";
    //                       $cookie_value = $email;
    //                       //ob_start();
    //                       setcookie($cookie_name, $cookie_value); // 86400 = 1 day
    //                       //ob_end_flush();
    //                       //echo $cookie_value;
    //                       echo "<meta http-equiv='refresh' content='0'>";
    //                       //echo "<script>window.location = 'luyende.php'</script>";
    //                   }
    //         }
    //         else
    //         {
    //           $cookie_name = "email";
    //           $cookie_value = $email;
    //           //ob_start();
    //           setcookie($cookie_name, $cookie_value);
    //           //

    //           $query_2 = 'SELECT * FROM tbluser WHERE taikhoan = "'.$email.'"';
    //           $results_2=mysqli_query($dbc,$query_2);
    //           kt_query($results_2,$query_2);
              
    //           $t_k=mysqli_fetch_array($results_2,MYSQLI_ASSOC);
    //           $gv=$t_k['admin'];
    //           if($gv === '1')
    //           {
    //             //header('Location:baihoc_add.php');
    //             echo "<script>window.location = 'baihoc_add.php'</script>";
    //             //echo "<script>console.log('admin');</script>";
    //           }
    //           echo "<meta http-equiv='refresh' content='0'>";
    //           //echo "<script>window.location = 'luyende.php'</script>";
    //         }
    //         }
    // else
    // {
    //     $message="<p class='required'>Bạn hãy nhập đầy đủ thông tin</p>";
    // }
      }
    ?>   
                          <form method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email">
                              </div>
                              <div class="form-group">
                                  <label for="pwd">Password:</label>
                                  <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="pswd">
                              </div>
                              <div class="form-group form-check">
                                  <label class="form-check-label">
                                      <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                  </label>
                              </div>
                              <div class="row">
                                <div class="col-4">
                                    <button type="" class="btn-background-blue-gradian modal-btn-radius">Đăng Nhập</button>
                                </div>
                                <div class="col-8 group-buttons">
                                    <div class="row">
                                        <span class="social-media">
                                            <span class="other-options"> &nbsp;hoặc đăng nhập với&nbsp;</span>
                                            <span class="media-button">
                                                <a  href="<?= $loginUrl ?>" class="btn_fb_static trans" data-action="1" id="btnFBLogin">
                                                    <span class="media-icon facebook"><i class="fab fa-facebook-f"></i></span>
                                                </a>
                                                <?php
                                                            //echo "<a href='$auth_url'>Login Through Google </a>";
                                                            //echo '<a href="$auth_url">a</a>';
                                                            
                                                            echo "<a href='$auth_url' class='btn_gplus_static trans' data-action='1' id='btnGPLogin'><span class='media-icon google'><i class='fab fa-google'></i></span></a>";
                                                            ?>
                                                <!-- <a class="btn_gplus_static trans" data-action="1" id="btnGPLogin">
                                                    <span class="media-icon google"><i class="fab fa-google"></i></span>
                                                </a> -->
                                            </span>
                                        </span>
                                    </div>
                                </div>
                              </div>

                          </form>
                        </div>
                      </div>
                  </div>
              </div>
<!--               <div class="modal-footer">
                  <button type="button" class="btn btn-background-blue-gradian modal-btn-radius" data-dismiss="modal">Close</button>
              </div> -->
          </div>        
      </div>
    </div>    
</div>

<?php ob_end_flush();
?>