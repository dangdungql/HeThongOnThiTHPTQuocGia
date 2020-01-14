<?php include("general.php"); ?>
<?php include("headerMore.php");
include_once('inc/myconnect.php');
include_once('inc/function.php');
$dethi=$_GET['md']; ?>
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style.css">
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style1.css">
<content>

    <?php
    	if( isset($_COOKIE["email"]) ){
        if($_COOKIE["email"] !== '' ){
        $email = $_COOKIE["email"];
        $query="SELECT * FROM tbluser WHERE taikhoan = '".$email."'";
        $results=mysqli_query($dbc,$query);
        kt_query($results,$query);
        $tk=mysqli_fetch_array($results,MYSQLI_ASSOC);
        $name=$tk['hoten'];
        $img = $tk['hinhanh'];
        $admin = $tk['admin'];
    }}
 ?>

	<div class="container pad-30 pad-60" id="add-lesson-ver2">
		<div class="row">
			<div class="col-12 content-baitap">
				<div class="row">
					<div class="col-3 img-baitap-title">
					<img class="" src="./site/img/bg-callout.jpg">
					</div>
					<div class="col-9 text-baitap-name">
						<?php
						    $query_1 = "SELECT * FROM dethi WHERE Made=".$dethi;
						    $results_1 = mysqli_query($dbc, $query_1);
						    kt_query($results_1, $query_1);
						    $infodethi = mysqli_fetch_array($results_1, MYSQLI_ASSOC);

						    $dapan = $infodethi['dapan'];
						    $arr = explode(",",$dapan);
							$t=count($arr);


						    $query_2 = "SELECT COUNT(id), AVG(diem) FROM hs_baithi WHERE diem > 5 and id_baithi=".$dethi;
						    $results_2 = mysqli_query($dbc, $query_2);
						    kt_query($results_2, $query_2);
						    $hs_baithi = mysqli_fetch_array($results_2, MYSQLI_ASSOC);

						?>
						<p class="baitap-title"><?php echo $infodethi['TenDeThi']; ?></p>
						<p class="baitap-num"><span><?php echo $t; ?> </span>câu hỏi</p>
						<p class="baitap-info">
							<?php $diemtb = floatval($hs_baithi['AVG(diem)']);
							$diem_tb = round($diemtb,2);
							?>
							<span class="phathanh"><i class="fa fa-hourglass-start" aria-hidden="true"></i> Điểm trung bình :<span class="val-phathanh"><?php echo $diem_tb; ?></span></span>
							<span>-</span>
							<!-- <span class="luotxem"><i class="fa fa-eye" aria-hidden="true"></i> Lượt xem:<span class="val-luotxem">1200</span></span> -->
							<?php //$diemtb = floatval($hs_baithi['COUNT(id)']);
							//$diem_tb = round($diemtb,2);
							 //$diem_tb = $diemtb-2;
							?>
							<span class="luotlam"><i class="fa fa-pencil" aria-hidden="true"></i> Lượt làm bài:<span class="val-luotlam"><?php echo $hs_baithi['COUNT(id)']; ?></span></span>
						</p>
						<div class="btn-baitap-name">
							<a href="addExam.php?md=<?php echo $dethi; ?>" class="btn-start-baitap"><i class="fa fa-play" aria-hidden="true"></i>Bắt đầu làm bài</a>
							<?php if($admin === '1' || $admin === '2'){ ?>
							<a href="ds_lambai.php?md=<?php echo $dethi; ?>" class="btn-save-baitap"><i class="fa fa-tasks" aria-hidden="true"></i>Danh sach lam bai</a>
						<?php } ?>
						</div>
					</div>
					<div class="col-12 text-baitap-intro">
						<p class="al-intro-general">Giới Thiệu Chung</p>
						<p class="al-intro-text">Nội dung bài tập bao gồm các bài tập đã được chọn lọc từ thầy giáo Hồ Ngọc Châu.</p>
					</div>
				</div>
				<div class="row history-baitap" style="display: none;">
					<div class="container padd-no">
						<br>
						<!-- Nav tabs -->
						<ul class="nav nav-tabs">
							<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#alrank">Bảng Xếp Hạng</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#alHistory">Lịch Sử Bài Làm</a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div id="alrank" class="container tab-pane active"><br>
								<h3>Bảng Xếp Hạng</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div id="alHistory" class="container tab-pane fade"><br>
									<h3>Lịch Sử Làm Bài</h3>
									<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="al-line"></div>
				<div class="row relate-homework">
<!--  					<div class="col-12">
						<p class="row al-relate-homework-title"><i class="fa fa-star-half-o" aria-hidden="true"></i>Bài Tập Có Liên Quan</p>
						<?php 
							for ($i=0; $i<10; $i++) {
						?>
								<div class="row row-al-relate-homework">
									<div class="col-3 al-relate-img">
										<img class="" src="./site/img/bg-callout.jpg">
									</div>
									<div class="col-9 al-relate-content">
										<p class="baitap-title">Bài Tập Amin-Amino Axit- Peptit-Protein</p>
										<p class="baitap-num">Môn <span>Hóa Học</span> <span>30</span> câu hoi - trình độ <span>cơ bản</span></p>
										<p class="baitap-gioithieu">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
										<p class="baitap-info">
											<span class="phathanh"><i class="fa fa-hourglass-start" aria-hidden="true"></i> Phát hành :<span class="val-phathanh">31/10/2019</span></span>
											<span>-</span>
											<span class="luotxem"><i class="fa fa-eye" aria-hidden="true"></i> Lượt xem:<span class="val-luotxem">1200</span></span>
											<span class="luotlam"><i class="fa fa-pencil" aria-hidden="true"></i> Lượt làm bài:<span class="val-luotlam">600</span></span>
										</p>
									</div>
								</div>
							
						<?php
								}
						?>
					</div> -->
 				</div>
			</div>
		</div>
	</div>							
</content>

<?php include("footer.php"); ?></body>