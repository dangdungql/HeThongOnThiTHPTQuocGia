<?php
include_once 'inc/function.php';
include_once 'inc/myconnect.php';

include './Facebook/autoload.php';
include('./fbconfig.php');
$helper = $fb->getRedirectLoginHelper();
if (isset($_GET['state'])) {
    $helper->getPersistentDataHandler()->set('state', $_GET['state']);
}
try {
    $accessToken = $helper->getAccessToken();
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

if (!isset($accessToken)) {
    if ($helper->getError()) {
        header('HTTP/1.0 401 Unauthorized');
        echo "Error: " . $helper->getError() . "\n";
        echo "Error Code: " . $helper->getErrorCode() . "\n";
        echo "Error Reason: " . $helper->getErrorReason() . "\n";
        echo "Error Description: " . $helper->getErrorDescription() . "\n";
    } else {
        header('HTTP/1.0 400 Bad Request');
        echo 'Bad request';
    }
    exit;
}

//Lấy thông tin của người dùng trên Facebook
try {
    // Returns a `Facebook\FacebookResponse` object
    $response = $fb->get('/me?fields=id,name,email', $accessToken->getValue());
} catch (Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

$fbUser = $response->getGraphUser();
if (!empty($fbUser)) {
    $query="SELECT COUNT(1) FROM tbluser WHERE taikhoan = '".$fbUser['email']."'";
        $results=mysqli_query($dbc,$query);
        kt_query($results,$query);
        $tk=mysqli_fetch_array($results,MYSQLI_ASSOC);
        $number=$tk['COUNT(1)'];
    if($number === '0')
        {
          $img = "http://graph.facebook.com/".$fbUser['id']."/picture?type=square";
            $query_2="INSERT tbluser(taikhoan,hoten,hinhanh,facebook) VALUES ('".$fbUser['email']."','".$fbUser['name']."','".$img."',1)";
                 $results_2=mysqli_query($dbc,$query_2);
                 kt_query($results_2,$query_2);
                 if(mysqli_affected_rows($dbc)==1)
                 {
                      //$_SESSION["email"] = $pay_load['email'];
                      $cookie_name = "email";
                      $cookie_value = $fbUser['email'];
                      setcookie($cookie_name, $cookie_value);
                        //$_SESSION['current_user'] = $user;
                        header('Location: ./index.php');
                      // //ob_start();
                      // setcookie($cookie_name, $cookie_value); // 86400 = 1 day
                      // //ob_end_flush();
                      // //echo $cookie_value;
                      // echo "<script>window.location = 'addListlesson.php?mh=2'</script>";
                  }
        }

    else
        {
            $cookie_name = "email";
            $cookie_value = $fbUser['email'];
            setcookie($cookie_name, $cookie_value);

            $query_3 = 'SELECT * FROM tbluser WHERE taikhoan = "'.$cookie_value.'"';
            $results_3=mysqli_query($dbc,$query_3);
            kt_query($results_3,$query_3);
            $tk=mysqli_fetch_array($results_3,MYSQLI_ASSOC);
            $gv=$tk['admin'];
            if($gv === '1')
            {
            	header('Location: ./baihoc_add.php');
              //echo "<script>window.location = 'baihoc_add.php'</script>";
            }
            else{
                        //$_SESSION['current_user'] = $user;
                        header('Location: ./index.php'); 
                    }
          // $cookie_name = "email";
          // $cookie_value = $pay_load['email'];
          // //ob_start();
          // setcookie($cookie_name, $cookie_value);
          // echo "<script>window.location = 'addListlesson.php?mh=2'</script>";
        }
}
