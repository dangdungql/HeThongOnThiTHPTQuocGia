<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script type="text/javascript" src="assets/tinymce/tinymce/tinymce.min.js"></script>
--><!-- <script type="text/javascript" src="assets/tinymce/tiny.js"></script>
-->  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="site/css/style-admin.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<div class ="main-container" style="display: flex;">
	<?php include("navBar.php"); ?>
	<div class ="wrapper">
		<?php include("headerAdmin.php"); ?>

		<div class="baihoc-header container-baihoc" id="addQuiz">
			<div class="row">
				<?php

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    	$cauhoi = $_POST['cauhoi'];
                        if(isset($_POST['1']))
                        {
                        	echo $cauhoi;
                        }
                        else if(isset($_POST['2']))
                        {
                            header('Location:addquiz.php');
                        }
                    }
                                        ?>
				<form name="frmbaiviet" method="POST" enctype="multipart/form-data">
				<div class="col-12 choise-quiz-textArea">
					<textarea id = "myTextarea" name="cauhoi"></textarea>
				</div>
				
				<br/>
				
				<div class="col-12 choise-quiz">
					<div class="grid-col">
						<div class="">
							<input type="radio" name="rdo" id="opt1" />
							<span class="checkmark3"></span>
							<input name="dapan1"></input>
						</div>
						<div class="">
							<input type="radio" name="rdo" id="opt2" />
							<span class="checkmark3"></span>
							<input name="dapan2"></input>
						</div>
						<div class="">
							<input type="radio" name="rdo" id="opt3" />
							<span class="checkmark3"></span>
							<input name="dapan3"></input>
						</div>
						<div class="">
							<input type="radio" name="rdo" id="opt4" />
							<span class="checkmark3"></span>
							<input name="dapan4"></input>
						</div>
					</div>
				</div>

				<div class="pad-30">
 						<input type="submit" class="btn-style-general" name="2" value="Câu tiếp theo"/>
 						<input type="submit" name="1" class="btn-style-general" value="Hoàn tất">
					<!-- <button class="contact100-form-btn btn-style-general">
					<span>
						Câu tiếp theo
						<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
					</span>
				</button>
				<a style="button" href="baihoc.php" class="contact100-form-btn btn-style-remove">
					<span>
						Hoàn tất
						<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
					</span>
				</a> -->
				</div>
				
				</form>
			</div>


<!-- 				<div data-validate = "Message is required" class="pad-30">
					<select>
						<option value="volvo">Nhận biết</option>
						<option value="saab">Thông hiểu</option>
						<option value="opel">Vận dụng</option>
						<option value="audi">Vận dụng cao</option>
					</select>
				</div>
 -->				


		</div>
	</div>
</div>
<?php include("test.php"); ?>