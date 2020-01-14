<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - Courses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="./site/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
<link href="./site/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="./site/vendor/jquery/jquery.min.js"></script>
<script src="./site/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<style>
	body {
		background-color: #FDF6E6;
	}
	.super_container {
		margin:30px auto;
	}
	.btn-question {
		background-color: #BC5642;
		border-radius: 6px;
		border: none;
		padding: 12px 24px;
		color: #FDF6E6;
		font-size: 16px;
		margin-bottom: 20px;
	}
	.btn-comeback {
		background-color: var(--color-border);
		border: 1px solid var(--color-border);
		border-radius: 4px;
		font-weight: 400;
		color: var(--color-title);
		padding: 6px 20px;
		font-size: 16px;
		line-height: 20px;
		display: inline-block;
		cursor: pointer;
		margin-top:30px;
	}
	.btn-comeback i {
		margin-right:5px;
	}
	.course_boxes img {
		width:100%;
	}
	.section-title-h {
		color: #BC5642;
		font-weight: 500;
		margin-bottom:50px;
		padding: 30px;
		border-radius: 10px;
		border: 1px solid #BC5642;
		box-shadow: 1px 1px 21px 0px #999;
	}
	.question-mini {
		margin-bottom:30px;
		padding: 30px;
		border-radius: 10px;
		border: 1px solid #BC5642;
		box-shadow: 1px 1px 21px 0px #999;
	}
	.col-question {
		padding: 0 50px;
	}
	.question-box {
		padding: 30px 0;
		border-radius: 10px;
		border: 1px solid #BC5642;
		box-shadow: 1px 1px 21px 0px #999;
	}
</style>
</head>
<body>
<?php 
include('inc/myconnect.php');
include('inc/function.php');
			$congthuc=$_GET['congthuc'];
			$id_questions=$_GET['cauhoi'];
			$answers_right=$_GET['dung'];
			$answers_wrong=$_GET['sai'];
			$answers_questions=1;
			$answers_choose=-1;
			$number=$answers_right+$answers_wrong+1;

?>
<div class="super_container">

	<div class="popular page_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					
				</div>
			</div>

			<div class="row course_boxes">
				<div class="col-5">		
					<div class="section_title text-center">
						<h3 class="section-title-h">KIỂM TRA KIẾN THỨC</h3>
					</div>
					<img src="./site/img/images/exam.png">
				</div>
				<div class="col-7 text-center col-question">
					<div class="main"> 
						<div class="form">
							<?php
								$kq_1="SELECT COUNT(id) FROM questions WHERE MaCongThuc=".$congthuc;
								$k_q_1=mysqli_query($dbc,$kq_1);
								$count_1=mysqli_fetch_assoc($k_q_1);
								if($count_1['COUNT(id)']=='0')
								{
									echo "<h1> Chưa có bài kiểm tra</h1>";

								}
								else
								{
								$kq="SELECT COUNT(id) FROM questions WHERE id>".$id_questions." AND MaCongThuc=".$congthuc." ORDER BY id ASC LIMIT 1";
								$k_q=mysqli_query($dbc,$kq);
								$count=mysqli_fetch_assoc($k_q);

								// echo "-------------";
								// echo $count['COUNT(id)'];
								// echo "-------------";
								if($count['COUNT(id)']=='0')
								{
									echo "<h1> Mức độ hiểu bài</h1>";
									$mucdohieubai = (float)$answers_right/((float)$answers_right+(float)$answers_wrong);
									
									if($mucdohieubai>=0.8)
										echo "<h2>Hiểu Bài</h2>";
									else if($mucdohieubai>=0.6)
										echo "<h2>Hiểu bài</h2>";
									else if($mucdohieubai>=0.4)
										echo "<h2>Chưa nắm vững</h2>";
									else 
										echo "<h2>Chưa hiểu bài</h2>";
									?>
									<a class= "btn-comeback" href="lesson1.php?ctct=1"><i class="fa fa-chevron-left" aria-hidden="true"></i>Quay lại bài học</a>
									<?php
								}
								else
								{
									$query="SELECT * FROM questions WHERE id >".$id_questions." AND MaCongThuc=".$congthuc." ORDER BY id ASC LIMIT 1";
									$results=mysqli_query($dbc,$query);
									kt_query($results,$query);
									while($question=mysqli_fetch_array($results,MYSQLI_ASSOC))
									{

										$query_2="SELECT * FROM chitietcongthuc WHERE MaChiTiet=".$congthuc;
										$results_2=mysqli_query($dbc,$query_2);
										kt_query($results_2,$query_2);
										$title=mysqli_fetch_assoc($results_2);

									?>
								<h4 class="question-mini text-left"><?php echo "Câu số ".$number." : ".$question['name_question'];?></h4>
								<div class="question-box">
									<?php
										$query_1="SELECT * FROM `answers` WHERE questions_id=".$question['id'];
										$results_1=mysqli_query($dbc,$query_1);
										kt_query($results_1,$query_1);
										$answers_questions=3;
										while($answers=mysqli_fetch_array($results_1,MYSQLI_ASSOC))
										{
											if($answers['cheking']==1)
												$answers_questions=$answers['id'];
											?>
									<button class="btn-question <?= $answers['id']; ?>" value="<?php echo $answers['id']; ?>"><?php echo $answers['name_answer']; ?></button>
									<br/>
									<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
									<script type="text/javascript">
									$(document).ready(function(){
										let btnConfirm =document.getElementById('xn');
				                		let btnnext =document.getElementById('ne_xt');
										$(".<?= $answers['id']; ?>").click(function(){
										        $answers_choose = <?= $answers['id']; ?>;
										        btnConfirm.click();
										        setTimeout(function(){
										         btnnext.click(); }, 600);
										        
										    });
									});
									</script>
									<?php
										}}?>
									<button type="" class="btn btn-check btn-block confirm" id="xn" style="display:none;">check</button>
									<button class="btn btn-next btn-block disabled next" id="ne_xt" style="display:none;" >Tiếp theo</button>
									
								</div>
								<div><a class= "btn-comeback" href="lesson1.php?ctct=1"><i class="fa fa-chevron-left" aria-hidden="true"></i>Quay lại bài học</a></div>
								<?php } }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div>

</body>
</html>
<?php //include("footer.php"); ?>
<script type="text/javascript">
	var d;
	var s;
	$(function(){
		$('.confirm').click(function(){
			var answers_questions = <?=$answers_questions?>;

			if($answers_choose == answers_questions)
			{
				var right_answers = <?=$answers_right?>;
				var dung = parseInt(right_answers)+1;

				var sai = <?=$answers_wrong?>;
				$('.'+$answers_choose).css({"background":"green"});

			}
			else
			{
				var wrong_answers = <?=$answers_wrong?>;
				var sai = parseInt(wrong_answers)+1;
				
				var dung = <?=$answers_right?>;
				$('.'+$answers_choose).css({"background":"red"});
				$('.'+<?=$answers_questions?>).css({"background":"green"});

			}
			d = dung;
			s = sai;

		});

		// xu ly load next question
		$('.next').click(function(){
			<?php $cauhoi=intval($id_questions)+1;
			$ch=(string)$cauhoi;
			$ct=$_GET['congthuc'];
			$query="SELECT * FROM questions WHERE id >".$id_questions." AND MaCongThuc=".$congthuc." ORDER BY id ASC LIMIT 1";
				$results=mysqli_query($dbc,$query);
				kt_query($results,$query);
				$question=mysqli_fetch_array($results,MYSQLI_ASSOC)
			?>

			window.location.href = "miniquiz.php?congthuc=<?php echo $congthuc; ?>&cauhoi=<?php echo $question['id'];; ?>&dung="+d+"&sai="+s;
		});
	});
</script>
