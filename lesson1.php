<?php include("general.php"); ?>
<?php include("headerMore.php"); ?>
<?php
include_once 'inc/myconnect.php';
include_once 'inc/function.php';
$ctct = $_GET['ctct'];
?>
<script src="jquery-3.2.1.min.js"></script>
<?php
if( isset($_COOKIE["email"]) ){
    if($_COOKIE["email"] !== '' ){
    	$email = $_COOKIE["email"];
    	$query="SELECT * FROM tbluser WHERE taikhoan = '".$email."'";
        $results=mysqli_query($dbc,$query);
        kt_query($results,$query);
        $tk=mysqli_fetch_array($results,MYSQLI_ASSOC);
        //$name = $tk['hoten'];
        $id_u = $tk['id'];
    }}

$query1 = "SELECT COUNT(1) FROM hs_baihoc WHERE baihoc = ".$ctct." AND MaHocSinh=".$id_u;
$results1 = mysqli_query($dbc,$query1);
kt_query($results1,$query1);
$tk=mysqli_fetch_array($results1,MYSQLI_ASSOC);
$number=$tk['COUNT(1)'];
if($number === '0')
    {
        $query_2="INSERT hs_baihoc(MaHocSinh,baihoc) VALUES ('".$id_u."',".$ctct.")";
        $results_2=mysqli_query($dbc,$query_2);
        kt_query($results_2,$query_2);
    }

		                $query = "SELECT * FROM chitietcongthuc WHERE MaChiTiet=".$ctct;
		                $results = mysqli_query($dbc, $query);
		                kt_query($results, $query);
		                $ct = mysqli_fetch_array($results, MYSQLI_ASSOC);
		                $link = $ct["linkvideo"];
		                $link = ltrim($link, '["');
		                $link = rtrim($link, '"]'); 
		                $arr_link=explode('","',$link);
		                // for($i=0; $i< 3;$i++)
		                // {
		                // 	echo $arr_link[$i];
		                // 	echo "-";
		                // }
		                $name = $ct["NoiDung"];
		                $arr_name = explode(',',$name);
		                $prelink = $arr_link[0];
		                $a = strpos($prelink,"uploads");
		                $prelink = substr($prelink,$a);
		                //echo $prelink;

	                ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="html">
	<meta name="keyword" content="html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- important : the de responsive tren nhieu thiet bi -->
	<link rel="stylesheet" type="text/css" href="site\font-awesome\css\font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"> <!-- duong dan den bootstrap onl-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- 	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./site/js/script.js"></script>

	<link rel="stylesheet" type="text/css" href="site/css/style.css"> <!-- luôn để cuối cùng-->
	<link rel="stylesheet" type="text/css" href="site/css/style-mobile.css">
</head>

<body>
<!-- code lesson -->
<content>
	<div class="container pad-60" id="addLesson">
		<div class="row">
			
			<div class="col-12" style="margin-bottom: 30px;">
				<a href="addListlesson.php?mh=1"><i style="font-size: 40px;transform: rotate(180deg);margin-left: -7px;" class="fa fa-sign-out" aria-hidden="true"></i></a>
				<span class="text-title"><?php echo $ct["TenCongThuc"]; ?><!-- Tổ hợp và xác suất --></span>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-8">
				<div class="video-panel">
					<div style="width: 100%; margin: 0px auto; height: 100%;" id="video-player-panel">

						<!-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Trmxp1DhjcI" frameborder="0" gesture="media" allowfullscreen=""></iframe> -->
						<?php 
						if (strpos($prelink, 'mp4') !== false) { 
							?>
    						<video width="100%" controls><source src="<?php echo $prelink; ?>" type="video/mp4"></video>
						<?php
						}
						else{
						?>
						<embed src="<?php echo $prelink; ?>" type="application/pdf" width="100%" height="100%" />
					<?php } ?>
					</div>
					<i id="view-video"></i>
				</div>
			</div>
			<div class="col-12 col-sm-4 border-col">
				<?php
                for($i=0;$i<count($arr_link);$i++) {
                    ?>

                    <!-- <a href="lesson_details.php?ct=<?php echo $ct['MaChiTiet']; ?>">
                        <div class="d-flex flex-row"
                             style="justify-content: space-between;">
                            <p href=""><?php echo $ct['TenCongThuc']; ?></p>

                        </div>
                    </a> -->
    				<!-- <a href="#" class="v_list clean icon-play_new" id="<?php echo $arr_link[$i]; ?>" data-title="<?php echo $arr_link[$i]; ?>"><i class="fa fa-play-circle"></i><?php echo $arr_name[$i]; ?></a><br> -->
    				<a href="#" class="v_list clean icon-play_new" id="<?php echo $arr_link[$i]; ?>" data-title="<?php echo $arr_link[$i]; ?>"><img src="./site/img/img7.png"><?php echo $arr_name[$i]; ?></a><br>

                <?php } ?>

			</div>
		</div>

		<script type="text/javascript">
		$('a').click(function(event) {
			var a = event.target.id;
			var res = a.indexOf("uploads");
			a = a.substr(res);
			console.log(a);

			var div_preview='';
		    div_preview = $('#video-player-panel');
		    filemp4 = a.includes(".mp4");
		    filepdf = a.includes(".pdf");
		    if(filemp4==true)
		    	div_preview.empty().append('<video width="100%" controls><source src="'+a+'" type="video/mp4"></video>');
			else if (filepdf==true)
				div_preview.empty().append('<embed src="'+a+'" type="application/pdf" width="100%" height="100%" />');
		});
		</script>


		<div class="row pad-60">
			<div class="col-12 col-sm-8 do-homework">
				<div class="row">
					<img src="./site/img/img11.png">
					<span class="text-title">Vào làm bài tập</span>
				</div>
				<br>
				<p class="thang-cham-diem"> Kết quả Giỏi, Thường, hay Yếu phụ thuộc vào mức độ hoàn thành bài tập. </p>
				<br>
				<div align="center">
					<!-- <div class="row"> -->
						<div class="col-12 col-sm-4 lesson-mobile-bottom" >
							<div class="cirle cirle-kha"><span></span></div>
							<!-- <button onclick="window.location.href = 'miniquiz.php?congthuc=1&cauhoi=0&dung=0&sai=0';" class="btn-background-green btn-lesson">Câu hỏi cơ bản</button> -->
							<a class="btn-background-green btn-border btn-style-general" href="miniquiz.php?congthuc=1&cauhoi=0&dung=0&sai=0" style="width: 100%;">Câu hỏi cơ bản</a>
						</div>
					<!-- </div> -->
				</div>
			</div>
			<div class="col-12 col-sm-4 img-general d-none d-sm-block">
				<div class="img-general-baigiang">
					<img src="./site/img/tl.png">
					<span class="lesson-title-right">Tài liệu bài giảng</h5>
				</div>

				<p class="lesson-img">
<!-- 					<a href="#"><i class="fa fa-folder"></i>HH010101 KN este lipit</a><br>
					<a href="#"><i class="fa fa-folder"></i>HH010101 KN este lipit</a><br>
 -->				</p>
				<br><br>
				<div class="img-general-baigiang">
					<img src="./site/img/tl.png">
					<span class="lesson-title-right">Cộng đồng</h5>
				</div>

				<p class="lesson-img">
<!-- 					<a href="#"><i class="fa fa-folder"></i>HH010101 KN este lipit</a><br>
					<a href="#"><i class="fa fa-folder"></i>HH010101 KN este lipit</a><br>
 -->				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-8 border-comment">
				<?php if( isset($_COOKIE["email"]) ){
      			if($_COOKIE["email"] !== '' ){ 
      				$email = $_COOKIE["email"];
			        $query="SELECT * FROM tbluser WHERE taikhoan = '".$email."'";
			        $results=mysqli_query($dbc,$query);
			        kt_query($results,$query);
			        $tk=mysqli_fetch_array($results,MYSQLI_ASSOC);
			        $name=$tk['hoten'];
			        $img = $tk['hinhanh'];
      				?>
				<div class="comment-user">
					<img src="./site/img/IconComment.png">
					<span class="comment-title">Bình luận <!-- ( <span class="number-comment">9</span>) --></span>
					<div class="row pad-30">
						<div class="col-2-edit">
							<img src="<?php echo $img; ?>">
						</div>
						<div class="col-10-edit form-group">
							<form id="frm-comment">
								<!-- <textarea class="comment" id="mycoment"></textarea> -->
					            <div hidden class="input-row">
									<input hidden name="comment_id" id="commentId"
			                    	placeholder="Name" /> <input class="input-field"
			                    	type="text" name="name" id="name" placeholder="Name" />
				                </div>
				                <div class="input-row">
				                	<textarea class="input-field" type="text" name="comment"
		                    		id="comment" placeholder="Add a Comment">  </textarea>
		                    	</div>
								<p>&nbsp;</p>
								<div align="right">
									<input type="button" class="btn-submit" id="submitButton"
		                    		value="Đăng" /><div id="comment-message"></div>
		                    	</div>
		                    </form>
						</div>
					</div>
				</div>
				<?php }} ?>
				<div class="comment-read">
						<div class="row">
							<div class="clearfix"></div>
							<div id="output"></div>
							<div class="comment_listing"></div>
						</div>
					</div>
			<!-- xem binh luan-->
<!-- 				<div class="comment-read"><div class="row">
					<div class="col-2-edit"><img class="avatar-comment" src="./site/img/img_avatar2.png"></div>
						<div class="col-10-edit" style = "align-self: center;">					
							<span class="user-name">Nguyen Long</span>
							<br>
							<a href="#" class="js-lesson-reply-input">Trả lời</a><span class="date-time">20:59-27/03/2019</span>
							<textarea class="form-control lesson-open-input" id="exampleFormControlTextarea1" rows="3" placeholder="Thêm Bình Luận" hidden></textarea>
						</div>
					</div>
				</div>
				<div class="comment-read">
						<div class="row">
							<div class="col-2-edit"><img class="avatar-comment" src="./site/img/img_avatar2.png"></div>
							<div class="col-10-edit" style = "align-self: center;">					
								<span class="user-name">Nguyen Long</span>
								<br>
								<a href="#" class="js-lesson-reply-input">Trả lời</a><span class="date-time">20:59-27/03/2019</span>
								<br>
								<div class="row reply-comment">
									<div class="col-2-edit"><img class="avatar-comment" src="./site/img/img_avatar2.png"></div>
									<div class="col-10-edit" style = "align-self: center;">					
										<span class="user-name">Nguyen Long</span>
										<br>
										<a href="#" class="js-lesson-reply-input">Trả lời</a><span class="date-time">20:59-27/03/2019</span>
									</div>
								</div>

							</div>
						</div>
				</div>
				<div class="comment-read">
					<div class="row">
						<div class="col-2-edit"><img class="avatar-comment" src="./site/img/img_avatar2.png"></div>
						<div class="col-9-edit" style = "align-self: center;">					
							<span class="user-name">Nguyen Long</span><br>
							<a href="#" class="js-lesson-reply-input">Trả lời</a><span class="date-time">20:59-27/03/2019</span>
						</div>
					</div>
				</div> -->
			</div>
			<div class="col-4"></div>

		</div>

	</div>
</content>

</body>
</html>
<?php include("test.php"); ?>
<script>
    function postReply(commentId) {
        $('#commentId').val(commentId);
         tinymce.execCommand('mceFocus',false,'comment');
    }
    function Deletecmt(commentId) {
        //srt=$('').val(commentId);
        console.log(commentId);
        $.ajax({
            url: "deletecmt.php",
            data: 'cmtdelete='+commentId,
            type: 'post',
            success: function (response)
            {
                if (response)
                {
                	$("#comment-message").css('display', 'inline-block');
             	   	listComment();
                } else
                {
                    alert("Failed to add comments !");
                    return false;
                }
            }
        });
    }
    $("#submitButton").click(function () {
    	tinyMCE.triggerSave();
    	   $("#comment-message").css('display', 'none');
        var str = $("#frm-comment").serialize();
        $.ajax({
            url: "comment-add.php?ct=10",
            data: str,
            type: 'post',
            success: function (response)
            {
                var result = eval('(' + response + ')');
                if (response)
                {
                	$("#comment-message").css('display', 'inline-block');
                    $("#name").val("");
                    $("#comment").val("");
                    $("#commentId").val("");
             	   listComment();
                } else
                {
                    alert("Failed to add comments !");
                    return false;
                }
                tinyMCE.activeEditor.setContent('');
            }
        });
    });
    
    $(document).ready(function () {
    	   listComment();
    });
    var ct=10;
    function listComment() {
        $.post("comment-list.php?ct="+10,
                function (data) {
                	
                       var data = JSON.parse(data);
                    console.log(data);
                    var comments = "";
                    var replies = "";
                    var item = "";
                    var parent = -1;
                    var results = new Array();

                    var list = $("<ul class='outer-comment'>");
                    var item = $("<p>").html(comments);

                    for (var i = 0; (i < data.length); i++)
                    {
                        var commentId = data[i]['id'];

                        //console.log(commentID);
                        parent = data[i]['parent_id'];

                        if (parent == "0")
                        {
                            comments = "<div class='comment-read'><div class='row'>"+
                            "<div class='col-2-edit'><img class='avatar-comment' src='"+data[i]['hinhanh']+"'></div>"+
                            "<div class='col-10-edit' style = 'align-self: center;'>"+
                            "<p class='user-name'> "+data[i]['name']+" : " + data[i]['comment'] + "</p>"+
                            "<a href='#' class='js-lesson-reply-input' onClick='postReply(" + commentId + ")'>Trả lời</a>"+
                            "<a href='#' class='js-lesson-reply-input' onClick='Deletecmt(" + commentId + ")'> Xóa</a><span class='date-time'>" + data[i]['date'] + "</span><br><br>"+



                            "</div></div></div>";

                            var item = $("<p>").html(comments);
                            list.append(item);
                            var reply_list = $('<ul>');
                            item.append(reply_list);
                            listReplies(commentId, data, reply_list);
                        }
                    }
                    $("#output").html(list);
                });
    }

    function listReplies(commentId, data, list) {
        for (var i = 0; (i < data.length); i++)
        {
            if (commentId == data[i].parent_id)
            {
                var comments = "<div class='row reply-comment'>"+
                "<div class='col-2-edit'><img class='avatar-comment' src='"+data[i]['hinhanh']+"'></div>"+
                "<div class='col-10-edit' style = 'align-self: center;'>"+
                "<span class='user-name'>"+data[i]['name']+ " : " + data[i]['comment'] + "</span>"+
                "<a href='#' class='js-lesson-reply-input' onClick='postReply(" + data[i]['id'] + ")'>Trả lời</a>"+
                "<a href='#' class='js-lesson-reply-input' onClick='Deletecmt(" + data[i]['id'] + ")'> Xóa</a><span class='date-time'>" + data[i]['date'] + "</span><br><br>"+
                "</div></div></div>";

                var item = $("<p>").html(comments);
                var reply_list = $('<ul>');
                list.append(item);
                item.append(reply_list);
                listReplies(data[i].id, data, reply_list);
            }
        }
    }
</script>