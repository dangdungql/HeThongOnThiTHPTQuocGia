
<?php

 include("header.php"); ?>
<title>Ôn Luyện Đại Học</title>

<link rel="stylesheet" type="text/css" href="site/css/templatemo-style.css">
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style1.css">

<section class="content-section" id="about">
	<div class="container text-center">
	  <div class="row">
	    <div class="col-lg-10 mx-auto">
	      <h2 class="title-pane color-title" data-aos="fade-down-right" data-aos-duration="500">Trải nghiệm hay, chạm tay điểm 10!</h2>
	      <div class="line-main"></div>	
	    </div>
	  </div>
	  <div class="row">
			<div class="container">
			<div class="row">
				<div class="col col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<p class="title-q" style="background-color: #ffc857;background-image: linear-gradient(316deg, #ffc857 0%, #3e2f5b 74%);">CHỌN LỚP</p>
						<div class="form-group selectPanel">
							<select class="form-control selectDown" id="select-class">
								<option value="12" selected="">Lớp 12</option>
								<option value="11">Lớp 11</option>
							<option value="10">Lớp 10</option>
							</select>
						</div>
					</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-4">
					<p class="title-q" style="background-color: #e6c79c; background-image: linear-gradient(315deg, #e6c79c 0%, #d6a3a3 74%);
">CHỌN MÔN</p>
					<div class="form-group selectPanel">
						<select class="form-control selectDown" id="select-subject">
						<option data-class12="on-thi-toan-hoc" data-class11="toan-hoc-lop-11" data-class10="toan-hoc-lop-10" selected="">Toán Học</option>
						<option data-class12="on-thi-vat-ly" data-class11="vat-ly-lop-11" data-class10="vat-ly-lop-10">Vật Lý</option>
						<option data-class12="on-thi-hoa-hoc" data-class11="hoa-hoc-lop-11" data-class10="hoa-hoc-lop-10">Hóa Học</option>
						<option data-class12="on-thi-sinh-hoc" data-class11="on-thi-sinh-hoc" data-class10="on-thi-sinh-hoc">Sinh Học</option>
							<option data-class12="on-thi-tieng-anh" data-class11="tieng-anh-lop-11" data-class10="tieng-anh-lop-10">Tiếng Anh</option>
							<option value="on-thi-toeic">Toeic</option>
						</select>
						</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-4">
					<p class="title-q" style="background-color: #eec0c6; background-image: linear-gradient(315deg, #eec0c6 0%, #7ee8fa 74%); cursor: pointer;" onclick="selectSubject()">VÀO HỌC</p>
				</div>	
				<!-- <div class="col-12 text-center mobile-hide">
					<img src="./site/img/banner-icon.png">
				</div> -->					
			</div>		
			</div>
	  </div>
	</div>
</section>	
  <!-- Services -->
<section class="content-section bg-primary-h text-white text-center" id="services">
	<div class="container">
	  <div class="content-section-heading">
	    <h2 class="title-panel title-panel-black text-center">Tại sao bạn nên chọn chúng tôi?</h2>
	    <div class="line-main"></div>
	  </div>
	  <div class="row">
	    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0 slogan-item " data-aos="fade-right" data-aos-duration="1000">
	      <span class="service-icon rounded-circle mx-auto mb-3">
	        <img class="gwt-Image" alt="Học qua video bài giảng" src="./site/img/icon_brain.png">
	      </span>
	      <h4>
	        <strong>Khoa học nhất</strong>
	      </h4>
	      <p class="text-faded mb-0 text-just">Hệ thống ứng dụng những thành tựu mới nhất của tâm lí học giáo dục và khoa học nghiên cứu về não bộ. Chương trình học được thiết kế để phù hợp nhất cho việc tự học, dành riêng cho từng đối tượng học sinh.</p>
	    </div>
	    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0" data-aos="fade-down" data-aos-duration="1000">
	      <span class="service-icon rounded-circle mx-auto mb-3">
	        <img class="gwt-Image" alt="Học qua video bài giảng" src="./site/img/icon_khoa-hoc-nhat.png">
	      </span>
	      <h4>
	        <strong>Hiện đại nhất</strong>
	      </h4>
	      <p class="text-faded mb-0 text-just">Học sinh được tự chọn chương trình học phù hợp với năng lực và dễ dàng điều chỉnh chương trình học theo điểm số kỳ vọng. Hệ thống lưu lại toàn bộ lịch sử học tập, tự động phát hiện nhanh các lỗ hổng kiến thức, và đề xuất giải pháp khắc phục cho hiệu quả ngay lập tức.</p>
	    </div>
	    <div class="col-lg-4 col-md-6 mb-5 mb-md-0" data-aos="fade-left" data-aos-duration="1000">
	      <span class="service-icon rounded-circle mx-auto mb-3" >
	        <img class="gwt-Image" alt="Học qua video bài giảng" src="./site/img/icon_tien-loi-nhat.png">
	      </span>
	      <h4>
	        <strong>Thuận tiện nhất</strong>
	      </h4>
	      <p class="text-faded mb-0 text-just">Hệ thống được vận hành trên cả web, wap và app . Ứng dụng chúng tôi trên di động giúp bạn có thể học mọi lúc, mọi nơi, ngay cả khi không có internet.</p>
	    </div>
	  </div>
	</div>
</section>

  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
	    <div class="container">
	      <div class="content-section-heading text-center">
	        <h2 class="title-panel title-panel-black text-center color-title pad-30">Cùng khám phá các khóa ôn thi <br>THPT Quốc Gia online nổi bật nhé…</h2>
	      </div>
	      <div class="row no-gutters">
	        <div class="col-lg-4" data-aos="flip-right" data-aos-duration="800">
	          <a class="portfolio-item" href="#">
	            <span class="caption">
	              <span class="caption-content">
	                <h2>Hóa Học</h2>
	                <p class="mb-0">9 Chuyên đề</p>
	              </span>
	            </span>
	            <img class="img-fluid-h" src="./site/img/portfolio-1.jpg" alt="">
	          </a>
	        </div>
	        <div class="col-lg-4" data-aos="flip-right" data-aos-duration="800">
	          <a class="portfolio-item" href="#">
	            <span class="caption">
	              <span class="caption-content">
	                <h2>Vật Lý</h2>
	                <p class="mb-0">9 Chuyên đề</p>
	              </span>
	            </span>
	            <img class="img-fluid-h" src="./site/img/portfolio-2.jpg" alt="">
	          </a>
	        </div>
	        <div class="col-lg-4" data-aos="flip-right" data-aos-duration="800">
	          <a class="portfolio-item" href="#">
	            <span class="caption">
	              <span class="caption-content">
	                <h2>Sinh Học</h2>
	                <p class="mb-0">9 Chuyên đề</p>
	              </span>
	            </span>
	            <img class="img-fluid-h" src="./site/img/portfolio-3.jpg" alt="">
	          </a>
	        </div>
	        <div class="col-lg-4" data-aos="flip-right" data-aos-duration="800">
	          <a class="portfolio-item" href="#">
	            <span class="caption">
	              <span class="caption-content">
	                <h2>Tiếng Anh</h2>
	                <p class="mb-0">9 Chuyên đề</p>
	              </span>
	            </span>
	            <img class="img-fluid-h" src="./site/img/portfolio-4.jpg" alt="">
	          </a>
	        </div>
	         <div class="col-lg-4" data-aos="flip-right" data-aos-duration="800">
	          <a class="portfolio-item" href="#">
	            <span class="caption">
	              <span class="caption-content">
	                <h2>Toán Học</h2>
	                <p class="mb-0">9 Chuyên đề</p>
	              </span>
	            </span>
	            <img class="img-fluid-h" src="./site/img/portfolio-4.jpg" alt="">
	          </a>
	        </div>
	         <div class="col-lg-4" data-aos="flip-right" data-aos-duration="800">
	          <a class="portfolio-item" href="#">
	            <span class="caption">
	              <span class="caption-content">
	                <h2>...</h2>
	                <p class="mb-0"></p>
	              </span>
	            </span>
	            <img class="img-fluid-h" src="./site/img/portfolio-4.jpg" alt="">
	          </a>
	        </div>
	      </div>
	    </div>
  </section>

    <!-- Services -->
<section class="content-section bg-primary-hh pad-30 text-white text-center border-bg" id="services" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
	<div class="container">
	  <div class="content-section-heading">
	    <h2 class="title-panel title-panel-black text-center">Và hiện giờ bạn có thể <br>thỏa thích tương tác với...</h2>
	    <div class="line-main"></div>
	  </div>
	  <div class="row">
				<div class="statictisItem">
					<div class="contentPanel" style="height: 100px; width: 100px; border-color: #4caf50;">
						<!-- <div class="wow circle"></div> -->
						<div class="wow circle animated" data-value="1" data-size="92" data-thickness="5" data-animation-start-value="0" data-fill="{
							&quot;color&quot;: &quot;rgba(76, 175, 80, .5)&quot;,
							&quot;color&quot;: &quot;#4caf50&quot;
							}" data-reverse="true" style="visibility: visible;"><canvas width="92" height="92"></canvas></div>
						<div class="progressValueHTML color-white">30,000+</div>
					</div>
					<div class="statictisTitleHTML color-white">30,000+ người dùng</div>
				</div>
				<div class="statictisItem">
					<div class="contentPanel" style="height: 100px; width: 100px; border-color: #efca1c;">
						<!-- <div class="circle"></div> -->
						<div class="wow circle animated" data-value="1" data-size="92" data-thickness="5" data-animation-start-value="0" data-fill="{
							&quot;color&quot;: &quot;rgba(239, 202, 28, .5)&quot;,
							&quot;color&quot;: &quot;#efca1c&quot;
							}" data-reverse="true" style="visibility: visible;"><canvas width="92" height="92"></canvas></div>
						<div class="progressValueHTML color-white">60.000+</div>
					</div>
					<div class="statictisTitleHTML color-white">60.000+ câu hỏi</div>
				</div>
				<div class="statictisItem">
					<div class="contentPanel" style="height: 100px; width: 100px; border-color: #e91e63;">
						<!-- <div class="circle"></div> -->
						<div class="wow circle animated" data-value="1" data-size="92" data-thickness="5" data-animation-start-value="0" data-fill="{
							&quot;color&quot;: &quot;rgba(233, 30, 99, .5)&quot;,
							&quot;color&quot;: &quot;#e91e63&quot;
							}" data-reverse="true" style="visibility: visible;"><canvas width="92" height="92"></canvas></div>
						<div class="progressValueHTML color-white">800+</div>
					</div>
					<div class="statictisTitleHTML color-white">800+ bài giảng thuộc 5 môn học với 46 chuyên đề</div>
				</div>
	  </div>
	</div>
</section>

<section class="content-section panelCategoryLize panelScroll content-item" id="services" data-aos="fade-up" >
			<div class="container">
				<h2 class="title-panel title-panel-black text-center color-title">Chương trình Ôn thi THPT Quốc gia của chúng tôi có gì?</h2>
				<div class="des-panel">Chỉ là cách học đơn giản và vui vẻ
					nhất mà bạn từng biết đến thôi mà. Cùng điểm qua có gì HOT nhé</div>
				<div class="line-main"></div>
				<div class="aboutFunctionsPanel row ">
					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 pad-30" style="visibility: visible;">
						<img class ="shake" alt="Luyện đề trắc nghiệm chọn lọc" src="./site/img/img1.png">
						<a href="/luyen-de-tat-ca-0/1">Luyện đề trắc nghiệm chọn lọc</a>
					</div>
					
					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 pad-30" style="visibility: visible;">
						<img alt="Thách đấu bạn bè cùng chơi" src="./site/img/img2.png">
						<div>Thách đấu bạn bè cùng chơi</div>
					</div>

					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 pad-30" style="visibility: visible;">
						<img alt="Tham gia các sự kiện hấp dẫn" src="./site/img/img3.png">
						<div>Tham gia các sự kiện hấp dẫn</div>
					</div>

					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 pad-30" style="visibility: visible;">
						<img alt="Tranh tài trên bảng xếp hạng" src="./site/img/img4.png">
						<div>Tranh tài trên bảng xếp hạng</div>
					</div>
					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 pad-30" style="visibility: visible;">
						<img alt="Sử dụng offline với ứng dụng di động" src="./site/img/img5.png">
						<a href="/tin-tuc/cai-dat-ung-dung-5345312751222784">Sử dụng offline với ứng dụng di động</a>
					</div>
					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 pad-30" style="visibility: visible;">
						<img alt="Được nhắc &amp; theo dõi tiến trình học của mình" src="./site/img/img6.png">
						<div>Được nhắc &amp; theo dõi tiến trình<br>
							học của mình</div>
					</div>
					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 pad-30" style="visibility: visible;">
						<img alt="Nhận giải đáp nhanh chóng" src="./site/img/img7.png">
						<div>Nhận giải đáp nhanh chóng</div>
					</div>
					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 pad-30" style="visibility: visible;">
						<img alt="Tải thêm nhiều tài liệu miễn phí" src="./site/img/img8.png">
						<div>Tải thêm nhiều tài liệu miễn phí</div>
					</div>
					<div class="aboutItem col-6 col-sm-6 col-md-4 col-lg-4 pad-30" style="visibility: visible;">
						<img alt="Học qua video bài giảng" src="./site/img/img9.png">
						<div>Học qua video bài giảng</div>
					</div>
				</div>

				<div class="htmlFunction">Và Trải nghiệm nhiều tính năng trò
					chơi thú vị khác...</div>
			</div>
</section>

  <!-- Scroll to Top Button-->
<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top" hidden>
	<i class="fa fa-angle-up"></i>
</a>
<?php include("footer.php"); ?>

<script type="text/javascript">
	var x = document.cookie; 
	console.log(x);
</script>