<link rel="stylesheet" type="text/css" href="site/css/styleSiteBar.css">  <!--style cho thanh menu -->
<div class="sidebar">
  <div class="sidebar-header">
    <div class="sidebar-header-logo">
      <a class="show-minimize-sidebar" href="#">
        <i class="fa fa-empire" aria-hidden="true"></i>
        <span>Ôn Thi THPT Quốc Gia</span>
      </a>
    </div>
    <div class="sidebar-navigation">
        <!-- <a class="sidebar-nav-item active" href="#">Giáo Viên</a> -->
        <!-- <a class="sidebar-nav-item" href="#">Admin</a> -->
    </div>
  </div>
      <a class="sidebar-item " href="./baihoc_add.php">
        <div class="appbar">
            <i class="fa fa-book" aria-hidden="true"></i>
            <span class="minimize-hide">Thêm Bài Học</span>
        </div>
      </a>
      <a class="sidebar-item " href="./dethi_add.php">
        <div class="appbar">
            <i class="fa fa-file-code-o" aria-hidden="true"></i>
            <span class="minimize-hide">Thêm Đề thi</span>
        </div>
      </a>
      <!-- <a class="sidebar-item " href="./addquiz.php">
        <div class="appbar">
        <i class="fa fa-stumbleupon" aria-hidden="true"></i>
            <span class="minimize-hide">Add Quiz</span>
        </div>
      </a> -->
      <a class="sidebar-item " href="ds_chuong.php">
      <div class="appbar">
      <i class="fa fa-bars" aria-hidden="true"></i> 
            <span class="minimize-hide">Ma trận đề thi</span>
        </div>
      </a>
      <a class="sidebar-item " href="ds_baihoc.php">
      <div class="appbar">
      <i class="fa fa-bars" aria-hidden="true"></i> 
            <span class="minimize-hide">Danh sách bài giảng</span>
        </div>
      </a>
      <a class="sidebar-item " href="ds_dethithu.php">
      <div class="appbar">
      <i class="fa fa-bars" aria-hidden="true"></i> 
            <span class="minimize-hide">Danh sách đề thi</span>
        </div>
      </a>
      <a class="sidebar-item " href="index.php">
      <div class="appbar">
      <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
            <span class="minimize-hide">Giao diện học sinh</span>
        </div>
      </a>
      <a class="sidebar-item " onclick="Logout()">
      <div class="appbar">
      <i class="fa fa-sign-out" aria-hidden="true"></i> 
            <span class="minimize-hide">Đăng Xuất</span>
        </div>
      </a>
      <!-- <a class="sidebar-item ">
      <div class="appbar">
      <span class="btn-logout" onclick="Logout()"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</span>
        </div>
      </a> -->
    </div>
    <script src="./site/js/script.js"></script>
        <script type="text/javascript">
  
  function Logout() { 
      document.cookie = "email=;";
      window.location = 'index.php';
        } 
</script>