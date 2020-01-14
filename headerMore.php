

<!-- feature general -->
<!-- modal Login, Sign in -->
<?php include("modalLogin.php"); ?>
<!-- end feature general -->

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <?php if( isset($_COOKIE["email"]) ){
        if($_COOKIE["email"] !== '' ){
        $email = $_COOKIE["email"];
        $query="SELECT * FROM tbluser WHERE taikhoan = '".$email."'";
        $results=mysqli_query($dbc,$query);
        kt_query($results,$query);
        $tk=mysqli_fetch_array($results,MYSQLI_ASSOC);
        $name=$tk['hoten'];
        $img = $tk['hinhanh'];
        $admin = $tk['admin'];
 ?>
      <div class="sidebar-brand">
        <img src="<?php echo $img; ?>">
        <a class="" href="#page-top"><?php echo $name; ?></a>
      </div>
    <?php }} ?>
    <ul class="sidebar-nav">

      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger1" href="index.php"><i class="fa fa-files-o" aria-hidden="true"></i> Giới thiệu</a>
      </li>
      <li class="sidebar-nav-item dropdown-child">
        <a class="js-scroll-trigger1" id="lop11-Dropdown"><i class="fa fa-linode" aria-hidden="true"></i> Tổng ôn <i class="fa fa-caret-down" aria-hidden="true"></i></a>
        <div class="menu-child">
          <a class="menu-item" href="addListlesson.php?mh=2"><i class="fa fa-codepen" aria-hidden="true"></i> Toán Học</a>
          <a class="menu-item" href="addListlesson.php?mh=1"><i class="fa fa-plug" aria-hidden="true"></i> Vật Lý</a>
          <a class="menu-item" href="addListlesson.php?mh=4"><i class="fa fa-flask" aria-hidden="true"></i> Hóa Học</a>
          <a class="menu-item" href="addListlesson.php?mh=7"><i class="fa fa-flask" aria-hidden="true"></i> Sinh Học</a>
          <a class="menu-item" href="vanhoc.php"><i class="fa fa-pencil" aria-hidden="true"></i> Văn Học</a>
          <a class="menu-item" href="dialy.php"><i class="fa fa-pie-chart" aria-hidden="true"></i> Địa Lý</a>
          <a class="menu-item" href="tree.php"><i class="fa fa-assistive-listening-systems" aria-hidden="true"></i> Tiếng Anh</a>
          <a class="menu-item" href="lichsu.php"><i class="fa fa-history" aria-hidden="true"></i> Lịch Sử</a>
        </div>
      </li> 

      <li class="sidebar-nav-item dropdown-child">
        <a class="js-scroll-trigger1"> <i class="fa fa-cogs" aria-hidden="true"></i>Luyện đề <i class="fa fa-caret-down" aria-hidden="true"></i></a>
        <div class="menu-child">
          <a class="menu-item" href="luyende.php"><i class="fa fa-codepen" aria-hidden="true"></i> Toán Học</a>
          <a class="menu-item" href="luyende.php"><i class="fa fa-plug" aria-hidden="true"></i> Vật Lý</a>
          <a class="menu-item" href="luyende.php"><i class="fa fa-flask" aria-hidden="true"></i> Hóa Học</a>
          <a class="menu-item" href="lichsuthithu.php"><i class="fa fa-bars" aria-hidden="true"></i> Lịch sử thi thử</a>
        </div>
      </li>
      <li class="sidebar-nav-item dropdown-child">
        <!-- <a class="js-scroll-trigger1" href="#page-top">Tổng ôn</a> -->
        <a class="js-scroll-trigger1" id="lop10-Dropdown"><i class="fa fa-linode" aria-hidden="true"></i> Mô Phỏng <i class="fa fa-caret-down" aria-hidden="true"></i></a>
          <div class="menu-child">
          <a class="menu-item" href="mophong.php?mp=2"><i class="fa fa-codepen" aria-hidden="true"></i> Toán Học</a>
          <a class="menu-item" href="mophong.php?mp=1"><i class="fa fa-plug" aria-hidden="true"></i> Vật Lý</a>
          <a class="menu-item" href="mophong.php?mp=4"><i class="fa fa-flask" aria-hidden="true"></i> Hóa Học</a>
          <a class="menu-item" href="mophong.php?mp=7"><i class="fa fa-pencil" aria-hidden="true"></i> Sinh Học</a>
          </div> 
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger1" href="VirtualRoom.php"><i class="fa-address-card" aria-hidden="true"></i>  Phòng học ảo</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger1" href="ds.php"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Định Hướng</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger1" href="ds_dudoan.php"><i class="fa fa-line-chart" aria-hidden="true"></i>  Dự đoán điểm chuẩn</a>
      </li>
      <?php if($admin === '1' || $admin === '2'){ ?>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger1" href="baihoc_add.php"><i class="fa fa-pencil" aria-hidden="true"></i>  Giao diện giáo viên</a>
      </li>
      <?php } if( isset($_COOKIE["email"]) ){
      if($_COOKIE["email"] !== '' ){ ?>
      <li class="last-li-menu">
        <button class="btn-logout" onclick="Logout()"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng Xuất</button>
      </li>
      <?php }} ?>
    </ul>
  </nav>

  <!-- Header -->
  <header class="masthead-more d-flex">
  		<div class="header-get-started" <?php if( isset($_COOKIE["email"]) and $_COOKIE["email"] !== '' ){ ?> style="display: none;" <?php } ?>>
				<a class="btn-xl js-scroll-trigger btn-get-started-thua btn-background-blue-gradian-thua btn-style-general" data-toggle="modal" data-target="#dangnhap">Đăng Nhập</a>
		  </div>                    
    <div class="container text-center my-auto">
      <span><i class="fa fa-empire" aria-hidden="true"></i></span>
      <span class="mb-1">Ôn Thi THPT Quốc Gia<span>
    </div>
    <div class="overlay"></div>
  </header>



  <script src="./site/vendor/jquery/jquery.min.js"></script>
  <script src="./site/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="./site/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="./site/js/stylish-portfolio.js"></script>
  <script src="./site/js/script.js"></script>
      <script type="text/javascript">
  
  function Logout() { 
      document.cookie = "email=;";
      window.location = 'index.php';
        } 
</script>