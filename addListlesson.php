<?php include("general.php"); ?>
<?php include("headerMore.php"); ?>
<?php
include_once('inc/myconnect.php');
include_once('inc/function.php');
$mhoc = $_GET['mh'];
$query_2 = "SELECT * FROM monhoc WHERE MaMonHoc=".$mhoc;
$results_2 = mysqli_query($dbc, $query_2);
kt_query($results_2, $query_2);
$mh = mysqli_fetch_array($results_2, MYSQLI_ASSOC);
$nhanbiet = "";
$thonghieu = "";
$vandung = "";
$vandungcao = "";
$allchuong = "";
$ctnhanbiet = "";
$ctthonghieu = "";
$ctvandung = "";
$ctvandungcao = "";
$allct = "";
?>

<?php
$t=0;
$arr1=array();
	$myarray = array( 
    array(0,2,2,2,1,2,1,2,0),
    array(0,1,1,2,1,1,2,2,2),
    array(1,1,1,0,1,1,1,1,1),
    array(0,2,1,3,0,1,1,0,0)
); 

$arr = array();
for ($i=0; $i < 4; $i++) { 
	$mucdo = $i+1;
	$kt=0;
	$query="SELECT * FROM tblchuong WHERE MaMonHoc=1";
	$results=mysqli_query($dbc,$query);
	kt_query($results,$query);
	while($c=mysqli_fetch_array($results,MYSQLI_ASSOC))
	{
		$k = $c['MaChuong'];
		$query_1 = "SELECT AVG(Trinhdo) FROM tbl_hs_mucdo WHERE MaHocSinh = 1 AND MaChuong = ".$k." AND Mucdo =".$mucdo;
		$results_1 = mysqli_query($dbc, $query_1);
	    kt_query($results_1, $query_1);
	    $Td = mysqli_fetch_array($results_1, MYSQLI_ASSOC);
	    $Trinhdo = $Td['AVG(Trinhdo)'];
	    if(is_null($Trinhdo))
	    	$arr[$i][$kt] = 0;
	    else
	    {
	    	$arr[$i][$kt] = floatval($Trinhdo);
	    }
	    $kt++;
	}
}
for ($i=0; $i < 4; $i++) {
	for ($j=0; $j < count($arr[0]); $j++) { 
		//echo $arr[$i][$j]."-";
	}
	//echo "</br>";
}
$sodiem=0;
for($i=0;$i<4;$i++)
{
	for($j=0;$j<count($myarray[0]);$j++)
	{
		$number = round($arr[$i][$j]*$myarray[$i][$j]);
		$sodiem += $number; 
		//echo $number."-";
		if($t<5)
		{
			if($myarray[$i][$j]>$number)
			{
				$t+=$myarray[$i][$j]-$number;
				$k = $myarray[$i][$j]-$number;
				array_push($arr1,$i."-".$j."-".$k);
			}
		}
	}
	//echo "</br>";
}


?>

<style>
ul.dsbh {list-style-type: none;}
</style>
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style.css">
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style1.css">
<content>
	<div class="container pad-30 pad-60" id="add-lesson">
		<h2 class ="padl-10 title title-hoc-phi text-center" id="listPanel">Ôn thi THPT Quốc Gia môn <?php echo $mh['TenMonHoc']; ?></h2>
		<div class="line-main"></div>
		<div class="row intro-learn text-center nav nav-tabs" role="tablist">
			<div class="col-sm-4 tamgiac active" href="#vaohoc" role="tab" data-toggle="tab">
				<div class="row row-intro-learn">
					<div class="col-sm-12 vao-hoc">
						<h5 class="color-white">VÀO HỌC</h5>
						<p class="color-white" style="border-bottom: 1px solid #fff;">Xem bài giảng video</p>
						
						<img src="./site/img/icon-1.png">
					</div>
				</div>
			</div>
			<div class="col-sm-4 tamgiac" href="#luyentap" role="tab" data-toggle="tab">
				<div class="row row-intro-learn">
					<div class="col-sm-12 luyen-tap">
						<h5 class="color-white">LUYỆN TẬP</h5>
						<p class="color-white" style="border-bottom: 1px solid #fff;">Làm bài tập tổng hợp</p>
						<img src="./site/img/icon-2.png">
					</div>
				</div>
			</div>
			<div class="col-sm-4 tamgiac" href="#chienluochoctap" role="tab" data-toggle="tab">
				<div class="row row-intro-learn">
					<div class="col-sm-12 luyen-de">
						<h5 class="color-white">CHIẾN LƯỢC HỌC TẬP</h5>
						<p class="color-white" style="border-bottom: 1px solid #fff;">Tham khảo chiến lược học tập</p>
						<img src="./site/img/icon-3.png">
					</div>
				</div>
			</div>
		</div>
		<div class="tab-content row pad-30">
			<div class="tab-pane fade in active" role="tabpanel" id="vaohoc">
				<div class="col-sm-8">
				<div class="container add-lesson-border">
					<div class="row add-lesson-pad">
						<div class="col-sm-6 mr-b-10">
							<i class="fa fa-list-ul" aria-hidden="true"></i>
							<span style="font-size: 22px;">Danh sách bài giảng</span>
						</div>
						<div class="col-sm-6">
							<input id="search" onkeyup="filter()" type="text" class="text-search add-lesson-input" placeholder="Tên bài giảng">
							<!-- <i class="fa fa-search"></i> -->
						</div>
					</div>
					<div class="row choosen-courses">
							<table class="table">
									<tbody>
									  <tr>
										<td><p  class="markDescription">Lọc bài giảng</p><p><i>(Theo kết quả)</i></p></td>
										<td>
											<div class="form-check-inline">
												<label class="container-btn1 color-red">Vận dụng cao
												  <input type="checkbox" checked="checked" class="chb" onclick="func();">
												  <span class="checkmark1"></span>
												</label>
											</div>
											<!-- <p><i>0 bài</i></p> -->
										</td>
										<td>
											<div class="form-check-inline">
												<label class="container-btn1 mdl-radio__label">Vân dụng
												  <input type="checkbox" checked="checked" class="chb" onclick="func();">
												  <span class="checkmark1"></span>
												</label>
											</div>
											<!-- <p><i>0 bài</i></p> -->
										</td>
										<td>
											<div class="form-check-inline mdl-radio__label">
												<label class="container-btn1 mdl-radio__label">Thông hiểu
												  <input type="checkbox" checked="checked" class="chb" onclick="func();">
												  <span class="checkmark1"></span>
												</label>
											</div>
											<!-- <p><i>0 bài</i></p> -->
										</td>
										<td>
											<div class="form-check-inline mdl-radio__label">
												<label class="container-btn1">Nhận biết
												  <input type="checkbox" checked="checked" class="chb" onclick="func();">
												  <span class="checkmark1"></span>
												</label>
											</div>
											<!-- <p><i>0 bài</i></p> -->
										</td>
									  </tr>
									</tbody>
							</table>
					</div>
				</div><br><br>
				<div class="container add-lesson-border add-lesson-pad">
					<div class="row list-courses">
						<div class="container">
							<div class="row">
								<div class="container">
									<div id="accordion" class="accordion">
										<div class="card mb-0">
											<ul class="dsbh" id="Menu">
											<?php
												$img;
												switch ($mhoc) {
												    case 1:
												        $img = "nuclear-energy.png";
												        break;
												    case 2:
												        $img = "calculator.png";
												        break;
												    case 4:
												        $img = "h1.png";
												        break;
												    default:
												        $img = "molecule.png";
												}
												$query_1 = "SELECT * FROM tblchuong WHERE MaMonHoc=".$mhoc." ORDER BY MaChuong ASC";
							                    $results_1 = mysqli_query($dbc, $query_1);
							                    kt_query($results_1, $query_1);
							                    $ch = mysqli_fetch_array($results_1, MYSQLI_ASSOC);
							                    $chap1 = $ch['MaChuong'];
							                    $query_2 = "SELECT * FROM tblchuong WHERE MaMonHoc=".$mhoc;
							                    $results_2 = mysqli_query($dbc, $query_2);
							                    kt_query($results_2, $query_2);
							                    while ($mh = mysqli_fetch_array($results_2, MYSQLI_ASSOC)) {
							                    	$c = $mh['MaChuong'];
							                    	$chap = intval($c)-intval($chap1)+1;
							                    	
							                    	$note = $mh['note'];

							                    	$allchuong = $allchuong.$c."-";
							                    	$arr_chuong = (explode(",",$note));
							                    	if(count($arr_chuong) < 4)
							                    	{
							                    		$note = '0,0,0,0';
							                    		$arr_chuong = (explode(",",$note));
							                    	}
							                    	if($arr_chuong[0] !== '0')
							                    		$nhanbiet = $nhanbiet.$c."-";
							                    	if($arr_chuong[1] !== '0')
							                    		$thonghieu = $thonghieu.$c."-";
							                    	if($arr_chuong[2] !== '0')
							                    		$vandung = $vandung.$c."-";
							                    	if($arr_chuong[3] !== '0')
							                    		$vandungcao = $vandungcao.$c."-";

							                    	// if(strpos($note, '1') === false)
							                    	// 	$nhanbiet = $nhanbiet.$c."-";
							                    	// if(strpos($note, '2') === false)
							                    	// 	$thonghieu = $thonghieu.$c."-";
							                    	// if(strpos($note, '3') === false)
							                    	// 	$vandung = $vandung.$c."-";
							                    	// if(strpos($note, '4') === false)
							                    	// 	$vandungcao = $vandungcao.$c."-";
							                        ?>
							                <div id="dokho<?php echo $c; ?>">
											<div class="card-header toggle<?php echo $chap; ?> js-card-header">
												<img class ="img-fluid1 mrgr-10" src="./site/img/<?php echo $img;?>">
												<a class="card-title text-upper-case color-organe">
													<?php echo $mh['TenChuong']; ?>
												</a>
												<div id="collapse<?php echo $chap; ?>" class="card-body js-card-body"  style="display: none;">
													<?php //for ($i=1; $i < 5; $i++) 
												$query_5 = "SELECT * FROM chitietcongthuc WHERE MaChuong=".$c;
							                    $results_5 = mysqli_query($dbc, $query_5);
							                    kt_query($results_5, $query_5);
							                    while ($ctbh = mysqli_fetch_array($results_5, MYSQLI_ASSOC)) {

							                    	$notect = $ctbh['note'];
							                    	$arr_ct = (explode(",",$notect));
							                    	if(count($arr_ct) < 4)
							                    	{
							                    		$notect = '0,0,0,0';
							                    		$arr_ct = (explode(",",$notect));
							                    	}
							                    	$allct = $allct.$ctbh['MaChiTiet']."-"; 
							                    	if($arr_ct[0] !== '0')
							                    		$ctnhanbiet = $ctnhanbiet.$ctbh['MaChiTiet']."-";
							                    	if($arr_ct[1] !== '0')
							                    		$ctthonghieu = $ctthonghieu.$ctbh['MaChiTiet']."-";
							                    	if($arr_ct[2] !== '0')
							                    		$ctvandung = $ctvandung.$ctbh['MaChiTiet']."-";
							                    	if($arr_ct[3] !== '0')
							                    		$ctvandungcao = $ctvandungcao.$ctbh['MaChiTiet']."-";

							                    	// if(strpos($notect, '1') !== false)
							                    	// 	$ctnhanbiet = $ctnhanbiet.$ctbh['MaChiTiet']."-";
							                    	// if(strpos($notect, '2') !== false)
							                    	// 	$ctthonghieu = $ctthonghieu.$ctbh['MaChiTiet']."-";
							                    	// if(strpos($notect, '3') !== false)
							                    	// 	$ctvandung = $ctvandung.$ctbh['MaChiTiet']."-";
							                    	// if(strpos($notect, '4') !== false)
							                    	// 	$ctvandungcao = $ctvandungcao.$ctbh['MaChiTiet']."-";

							                    	$query_4 = "SELECT * FROM hs_baihoc WHERE MaHocSinh=2 AND baihoc =".$ctbh['MaChiTiet'];
								                    $results_4 = mysqli_query($dbc, $query_4);
								                    kt_query($results_4, $query_4);
							                    	$bh_hs = mysqli_fetch_array($results_4, MYSQLI_ASSOC);
							                    	$bh_dsdh = $bh_hs['baihoc'];
											 ?>
													<div  id="ct<?php echo $ctbh['MaChiTiet']; ?>"><li><a href="lesson1.php?ctct=<?php echo $ctbh['MaChiTiet']; ?>"><div class="row detail-lesson">
														<div class="col-9"><img src="./site/img/img-10.png" style="width: 30px;margin-right: 10px;margin-bottom: 10px;"><?php echo $ctbh['TenCongThuc']; ?></div>
														<?php 
														//$arr_ct[4] !== '0';
														$mucdo_cauhoi = '-1';
														//$mucdo_ch = 4;
														for($i=0;$i<count($arr1);$i++){
															$ma_chuong_recommend = explode("-",$arr1[$i]);
															$ma_chuong = intval($ma_chuong_recommend[1])+1;
															$machuong = $ma_chuong.'';
															if($machuong === $c)
															{
																//$mucdo_ch = intval($ma_chuong_recommend[0])+1;
																//$mucdo_cauhoi = $mucdo_ch.'';
																$mucdo_ch = intval($ma_chuong_recommend[0]);
															}
														}
														//$bh=$i; $bht = (string)$bh;
														if(isset($mucdo_ch) and $arr_ct[$mucdo_ch] !== '0')
														{
															?>
															<div class="col-3"><span class="status-card-lesson status-learned">Ưu tiên</span></div>
														<?php
														}
														//else if(strpos($bh_dsdh,$ctbh['MaChiTiet']) === false){
														else if($bh_dsdh !== $ctbh['MaChiTiet']){ ?>
															<div class="col-3"><span class="status-card-lesson status-not-yet">Chưa học</span></div>
														<?php } ?>
													</div></a></li></div>
													<?php } ?>
												</div>
												<?php 
												$query_3 = "SELECT MucDo FROM tbl_hs_baithi WHERE MaChuong =".$mh['MaChuong'];
						                    	$results_3 = mysqli_query($dbc, $query_3);
							                    kt_query($results_3, $query_3);
							                    $mucdo = mysqli_fetch_array($results_3, MYSQLI_ASSOC);
							                    $m_d = $mucdo['MucDo']; ?>
												<div class= "row" style ="display: flex; justify-content: center;">
													<a class="btn-background-green btn-border btn-style-general" href="quiz.php"><img class="mrgr-10-w" src="./site/img/h10.png">
														<?php 
															if(!isset($m_d)) 
																echo 'Đánh Giá Chuyên Đề '.$chap;
															else 
															{
																echo 'Mức độ hiện tại : '.$m_d;
															} 

														?></a>
												</div>
											</div>
											
									<br>
									<hr>

											
									</div>
									<?php } ?>
										</ul>
								</div>							
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
				<div class="col-sm-4 add-lesson-border add-lesson-pad d-none d-sm-block">
				<div class="block-buy">
						<div class="header">
							<i class="fa fa-cubes" aria-hidden="true"></i>
							<span style="font-size: 20px">Khóa Ôn thi THPT Quốc Gia</span>
						</div>
						<div class="teacher-info">
							
							<p><span class="teacherName"></span></p>
							
								
							
							
						</div>
						<div class="teacher-img">
						
							<!-- <img src="./site/img/thay-phi.png"> -->
						</div>
					</div>
				</div>
			</div>
			
	  		<div class="tab-pane fade" role="tabpanel" id="luyentap">
	  			<div class="container">
	  				<div class="row header-chienluoc">
	  				<?php
					    $query_1 = "SELECT * FROM dethi";
					    $results_1 = mysqli_query($dbc, $query_1);
					    kt_query($results_1, $query_1);
					    while ($dethi = mysqli_fetch_array($results_1, MYSQLI_ASSOC)) {
						?>
					    <div class="row style-vatly">
					        <!-- <i class="fa fa-hand-o-right" aria-hidden="true"></i> -->
					        <a href="infodethi.php?md=<?php echo $dethi['Made']; ?>" class="click-vatly" value="" name="select-img"><?php echo $dethi['TenDeThi'] ?></a>
					        </br>
					    </div>
						<?php } ?>
					</div>
				</div>
	  		</div>

  			<div class="tab-pane fade" role="tabpanel" id="chienluochoctap">
				  <div class="container">
						<div class="row header-chienluoc">
						<i class="fa fa-sign-in" aria-hidden="true"></i> Chiến lược học tập
						</div>
						<div class="row">
							<div class="col-1"></div>
							<div class="col-6 chienluoc-box">
								<p class="cap-current-text"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Năng lực hiện tại: <span class="cap-current-num"><?php echo $sodiem*0.25; ?></span></p>
								<a class="btn-style-general btn-do-exam" href="infodethi.php?md=3"><i class="fa fa-pencil" aria-hidden="true"></i> Làm Bài Test</a>
<!-- 								<form class="row" style="align-items: center; margin-top:10px;">
									<span class="desire-score col-6"><i class="fa fa-magic" aria-hidden="true"></i> Điểm Số Mong Muốn: </span>
									<input class="col-2 desire-score-input" type="number" name="fname" value="9">
								</form> -->
								<ul class="chienluoc-parent"><i class="fa fa-university" aria-hidden="true"></i>Chiến lược học tập
									<?php for($i=0;$i<count($arr1);$i++){
										//$k=$i+1;
										$ma_chuong_recommend = explode("-",$arr1[$i]);
										$k = intval($ma_chuong_recommend[1])+1;
										$query_2 = "SELECT * FROM tblchuong WHERE MaChuong=".$k;
										$results_2 = mysqli_query($dbc, $query_2);
										kt_query($results_2, $query_2);
										$chuong = mysqli_fetch_array($results_2, MYSQLI_ASSOC);
										$k = intval($ma_chuong_recommend[0])+1;
										switch ($k) {
											case 1:
												$mucdo = 'nhận biết';
												break;
											case 2:
												$mucdo = 'thông hiểu';
												break;
											case 3:
												$mucdo = 'vận dụng';
												break;
											default:
												$mucdo = 'vận dụng cao';
												break;
										}

									?>
									<li class="chienluoc-children chienluoc-first-child"><?php echo $chuong['TenChuong']." mức ".$mucdo; ?></li>
									<!-- <li class="chienluoc-children chienluoc-first-child">Ôn Tập phần thông hiểu của chương 3</li>
									<li class="chienluoc-children">Luyện Thêm Đề</li> -->
								<?php } ?>
								</ul>
							</div>
							<div class="col-5">
								<div class="row">
									<div class="col-6">
										<img class="img-chienluochoctap" alt="Thách đấu bạn bè cùng chơi" src="./site/img/img2.png">
									</div>
									<div class="col-6">
										<img class="img-chienluochoctap" alt="Tham gia các sự kiện hấp dẫn" src="./site/img/img3.png">
									</div>
									<div class="col-6">
										<img class="img-chienluochoctap" alt="Tranh tài trên bảng xếp hạng" src="./site/img/img4.png">
									</div>
									<div class="col-6">
										<img class="img-chienluochoctap" alt="Luyện đề trắc nghiệm chọn lọc" src="./site/img/img1.png">
									</div>
								</div>
							</div> 
						</div>
				  </div>
			</div>
  		</div>
	</div>
</content>

<script type="text/javascript">
	$(document).ready(function(){

		$('.js-card-header').click(function(){
	  	// var findCard = $('.js-card-header');
	  	// var _this = $(this);
	  	var findCard = $(this);
	  	if(findCard.find('.js-card-body').hasClass('open')){
	  		$(findCard.find('.js-card-body')).slideUp(400, function(){
				$(findCard.find('.js-card-body')).removeClass('open');
	  		});
	  		
	  	}
	  	else{
	  		findCard.find('.js-card-body').slideDown(400, function(){
	  			findCard.find('.js-card-body').addClass('open');
	  	});
	  	}

			
	  });

		  // $(".toggle1").click(function(){
		  //   $("#collapse1").toggle("slow");
		  // });
  		//   $(".toggle2").click(function(){
		  //   $("#collapse2").toggle("slow");
		  // });
  		//   $(".toggle3").click(function(){
		  //   $("#collapse3").toggle("slow");
		  // });
		  // $(".toggle4").click(function(){
		  //   $("#collapse4").toggle("slow");
		  // });
  		//   $(".toggle5").click(function(){
		  //   $("#collapse5").toggle("slow");
		  // });
  		//   $(".toggle6").click(function(){
		  //   $("#collapse6").toggle("slow");
		  // });
		  // $(".toggle7").click(function(){
		  //   $("#collapse7").toggle("slow");
		  // });
  		//   $(".toggle8").click(function(){
		  //   $("#collapse8").toggle("slow");
		  // });
  		//   $(".toggle9").click(function(){
		  //   $("#collapse9").toggle("slow");
		  // });
	});
</script>        <script>
    		var nhanbiet = "<?php echo $nhanbiet; ?>";
    		var nb = nhanbiet.split('-');
    		var arrnb=[];
    		for(var i=0;i<nb.length-1;i++)
    		{
    			var k=parseInt(nb[i]);
    			arrnb.push(k);
    		}

    		var thonghieu = "<?php echo $thonghieu; ?>";
    		var th = thonghieu.split('-');
    		var arrth=[];
    		for(var i=0;i<th.length-1;i++)
    		{
    			var k=parseInt(th[i]);
    			arrth.push(k);
    		}
    		var vandung = "<?php echo $vandung; ?>";
    		var vd = vandung.split('-');
    		var arrvd=[];
    		for(var i=0;i<vd.length-1;i++)
    		{
    			var k=parseInt(vd[i]);
    			arrvd.push(k);
    		}
    		var vandungcao = "<?php echo $vandungcao; ?>";
    		var vdc = vandungcao.split('-');
    		var arrvdc=[];
    		for(var i=0;i<vdc.length-1;i++)
    		{
    			var k=parseInt(vdc[i]);
    			arrvdc.push(k);
    		}
    		// console.log(arrvdc);
    		var allchuong = "<?php echo $allchuong; ?>";
    		var ac = allchuong.split('-');
    		var arrac=[];
    		for(var i=0;i<ac.length-1;i++)
    		{
    			var k=parseInt(ac[i]);
    			arrac.push(k);
    		}


    		var ctnhanbiet = "<?php echo $ctnhanbiet; ?>";
    		var ctnb = ctnhanbiet.split('-');
    		var arrctnb=[];
    		for(var i=0;i<ctnb.length-1;i++)
    		{
    			var k=parseInt(ctnb[i]);
    			arrctnb.push(k);
    		}

    		var ctthonghieu = "<?php echo $ctthonghieu; ?>";
    		var ctth = ctthonghieu.split('-');
    		var arrctth=[];
    		for(var i=0;i<ctth.length-1;i++)
    		{
    			var k=parseInt(ctth[i]);
    			arrctth.push(k);
    		}
    		var ctvandung = "<?php echo $ctvandung; ?>";
    		var ctvd = ctvandung.split('-');
    		var arrctvd=[];
    		for(var i=0;i<ctvd.length-1;i++)
    		{
    			var k=parseInt(ctvd[i]);
    			arrctvd.push(k);
    		}
    		console.log(arrctvd);
    		var ctvandungcao = "<?php echo $ctvandungcao; ?>";
    		var ctvdc = ctvandungcao.split('-');
    		var arrctvdc=[];
    		for(var i=0;i<ctvdc.length-1;i++)
    		{
    			var k=parseInt(ctvdc[i]);
    			arrctvdc.push(k);
    		}
    		// console.log(arrvdc);
    		var allct = "<?php echo $allct; ?>";
    		var act = allct.split('-');
    		var arract=[];

    		for(var i=0;i<act.length-1;i++)
    		{
    			var k=parseInt(act[i]);
    			arract.push(k);
    		}


             function func()
             {
                var chb = document.getElementsByClassName('chb');
                for(var i=0; i<arrac.length;i++)
			        {
        	        	var x = document.getElementById("dokho"+arrac[i]);
			            x.style.display = "none";
					}
                for(var i=0; i<arract.length;i++)
			        {
        	        	var x = document.getElementById("ct"+arract[i]);
			            x.style.display = "none";
					}
                if(chb[0].checked)
                {

					for(var i=0; i<arrctvdc.length;i++)
			        {
        	        	var x = document.getElementById("ct"+arrctvdc[i]);
			            x.style.display = "block";
					}


                    for(var i=0; i<arrvdc.length;i++)
			        {
        	        	var x = document.getElementById("dokho"+arrvdc[i]);
			            x.style.display = "block";
					}

                }
     //             if(!chb[0].checked)
     //             {
     //                 for(var i=0; i<arrvdc.length;i++)
			  //       {
     //    	        	var x = document.getElementById("dokho"+arrvdc[i]);
			  //           x.style.display = "block";
					// }
     //             }
                if(chb[1].checked)
                {
					for(var i=0; i<arrctvd.length;i++)
			        {
        	        	var x = document.getElementById("ct"+arrctvd[i]);
			            x.style.display = "block";
					}

                    for(var i=0; i<arrvd.length;i++)
			        {
        	        	var x = document.getElementById("dokho"+arrvd[i]);
			            x.style.display = "block";
					}
                }
     //            if(!chb[1].checked)
     //            {
     //                for(var i=0; i<arrvd.length;i++)
			  //       {
     //    	        	var x = document.getElementById("dokho"+arrvd[i]);
			  //           x.style.display = "block";
					// }
     //            }
                if(chb[2].checked)
                {
                	for(var i=0; i<arrctth.length;i++)
			        {
        	        	var x = document.getElementById("ct"+arrctth[i]);
			            x.style.display = "block";
					}

                    for(var i=0; i<arrth.length;i++)
			        {
        	        	var x = document.getElementById("dokho"+arrth[i]);
			            x.style.display = "block";
					}
					
                }
     //            if(!chb[2].checked)
     //            {
     //                for(var i=0; i<arrth.length;i++)
			  //       {
     //    	        	var x = document.getElementById("dokho"+arrth[i]);
			  //           x.style.display = "block";
					// }
     //            }
                if(chb[3].checked)
                {

                	for(var i=0; i<arrctnb.length;i++)
			        {
        	        	var x = document.getElementById("ct"+arrctnb[i]);
			            x.style.display = "block";
					}
                    for(var i=0; i<arrnb.length;i++)
			        {
        	        	var x = document.getElementById("dokho"+arrnb[i]);
			            x.style.display = "block";
					}
					
                }
     //            if(!chb[3].checked)
     //            {
     //                for(var i=0; i<arrnb.length;i++)
			  //       {
     //    	        	var x = document.getElementById("dokho"+arrnb[i]);
			  //           x.style.display = "block";
					// }
     //            }
                 
                 // if(chb[1].checked)
                 // {
                 //     document.getElementById('pgh').style.fontSize = '30px';
                 // }
                 // if(!chb[1].checked)
                 // {
                 //     document.getElementById('pgh').style.fontSize = '1em';
                 // }
                 
                 // if(chb[2].checked)
                 // {
                 //     document.getElementById('pgh').style.fontWeight = 'bold';
                 // }
                 // if(!chb[2].checked)
                 // {
                 //     document.getElementById('pgh').style.fontWeight = 'normal';
                 // }
                 
             }
    

       	function filter(){
    		
			var filterValue, input, ul,li,a,i;
			input = document.getElementById("search");
			filterValue = input.value.toUpperCase();
			ul = document.getElementById("Menu");
			li = ul.getElementsByTagName("li");
			    
			    for (i = 0 ; i < li.length ; i++){
			        a = li[i].getElementsByTagName("a")[0];
			        if(a.innerHTML.toUpperCase().indexOf(filterValue) > -1){
			            li[i].style.display = "";
			            
			        }else{
			            li[i].style.display = "none";
			        }
			    }
			    //$('.js-card-header').find('.js-card-body').addClass('open');


					    $("#collapse1").show("");
					    $("#collapse2").show("");
					    $("#collapse3").show("");
					    $("#collapse4").show("");
					   	$("#collapse5").show("");
					    $("#collapse6").show("");
					    $("#collapse7").show("");
					    $("#collapse8").show("");



			}
			
        </script>
<?php include("footer.php"); ?></body>