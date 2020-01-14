<?php
include_once('inc/myconnect.php');
include_once('inc/function.php');
$md=$_GET['md'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Làm bài</title>
	<meta charset="utf-8">
	<meta name="description" content="html">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keyword" content="html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- important : the de responsive tren nhieu thiet bi -->
  <link href="./site/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
<!--   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'> -->
 <!--  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet"> -->
  <!-- Bootstrap Core CSS -->
  <link href="./site/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./site/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="./site/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
	<script src="./site/slick/slick.js" type="text/javascript" charset="utf-8"></script>

	<script src="./site/vendor/jquery/jquery.min.js"></script>
  	<script src="./site/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 	<!-- Plugin JavaScript -->
  	<script src="./site/vendor/jquery-easing/jquery.easing.min.js"></script>


  <!-- animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  	<!-- Custom scripts for this template -->
 	<script src="./site/js/stylish-portfolio.js"></script>
 	<link rel="stylesheet" type="text/css" href="./site/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="site/css/style-animation.css">
	<link href="./site/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  	<link href="./site/css/stylish-portfolio.min.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="site/css/style.css">
  	<link rel="stylesheet" type="text/css" href="site/css/style-mobile.css"> <!-- luôn để cuối cùng-->
</head>
<?php 
	$query_1 = "SELECT * FROM dethi WHERE Made=".$md;
    $results_1 = mysqli_query($dbc, $query_1);
    kt_query($results_1, $query_1);
    $da = mysqli_fetch_array($results_1, MYSQLI_ASSOC);
    $dapan = $da['dapan'];
    $arrdapan = explode(",",$dapan);
    $sl_cauhoi = count($arrdapan);
    if($sl_cauhoi > 30)
    	$sl_cot = 15;
    else if ($sl_cauhoi > 20)
    	$sl_cot = 10;
    $sl_cot3 = $sl_cauhoi - $sl_cot*2;
    

?> 
<div id="napcode"></div>
<body>
<!-- code add Exam -->
<content>
	<div class="container-fluid" id="tryExam">
		<div class="row">
			<div class="col-12">
				<div class="page-container">
			        <div class="panel-container">

			            <div class="panel-left dethi">
			            	<div class="col-12 text-center no-pad-l-r">
			            		<h4 class="phan-de-thi"><?php echo $da['TenDeThi']; ?></h4>
			            	</div>
			            	<div class="col-12 no-pad-l-r height-pdf">
			            		<!-- <object data="<?php echo $da['link']; ?>" width="100%" height="100%" frameborder="1" scrolling="no" marginheight="0" marginwidth="0"> </object> -->
			            		<embed src="<?php echo $da['link']; ?>" type="application/pdf" width="100%" height="100%" />
			            	</div>

			            </div>
<!-- 
			            <div class="splitter">
			            </div> -->

			            <div class="panel-right ratio">
			            	<div class="col-12 text-center">
			            		<h4 class="exam-title">Kiểm Tra</h4>
			            		<p class="exam-name">Vật Lý</p>
			            	</div>

			                <div class="col-12">
			                	<h5>Phần trả lời</h5>
			                </div>
			                <div class="col-12 answer-ratio">
			                	<div id="answer1">
			                	<form action="/action_page.php" style="width: 100%; display: flex;">
									<table class="col-4" style="width:100%">
										  <tr class="text-center">
											    <th>Câu</th>
											    <th>A</th> 
											    <th>B</th>
											    <th>C</th>
											    <th>D</th>									    
										  </tr>
										<?php for($i=1;$i<=$sl_cot;$i++){ ?>
										  <tr>
									    		<td class="tb-title"><?php echo $i; ?></td>
											    <td>
											    	<label class="try-container">
												    	<input type="radio" name="cau<?php echo $i; ?>" value="1">
											    		<span class="try-checkmark"></span>
											    	</label>
											    </td>
											    <td>
											    	<label class="try-container">
												    	<input type="radio" name="cau<?php echo $i; ?>" value="2">
											    		<span class="try-checkmark"></span>
											    	</label>
											    </td>
											    <td>
											    	<label class="try-container">
												    	<input type="radio" name="cau<?php echo $i; ?>" value="3">
											    		<span class="try-checkmark"></span>
											    	</label>
											    </td>										    						<td>
											    	<label class="try-container">
												    	<input type="radio" name="cau<?php echo $i; ?>" value="4">
											    		<span class="try-checkmark"></span>
											    	</label>
											    </td>								
										  <tr>
									
								<?php } ?>
								</table>
									<table class="col-4" style="width:100%">
										  <tr class="text-center">
											    <th>Câu</th>
											    <th>A</th> 
											    <th>B</th>
											    <th>C</th>
											    <th>D</th>									    
										  </tr>
										  <?php for($i=1;$i<=$sl_cot;$i++){ $j = $i+$sl_cot; ?>
										  <tr>
									    		<td class="tb-title"><?php echo $j; ?></td>
											    <td>
											    	<label class="try-container">
												    	<input type="radio" name="cau<?php echo $j; ?>" value="1">
											    		<span class="try-checkmark"></span>
											    	</label>
											    </td>
											    <td>
											    	<label class="try-container">
												    	<input type="radio" name="cau<?php echo $j; ?>" value="2">
											    		<span class="try-checkmark"></span>
											    	</label>
											    </td>
											    <td>
											    	<label class="try-container">
												    	<input type="radio" name="cau<?php echo $j; ?>" value="3">
											    		<span class="try-checkmark"></span>
											    	</label>
											    </td>										    						<td>
											    	<label class="try-container">
												    	<input type="radio" name="cau<?php echo $j; ?>" value="4">
											    		<span class="try-checkmark"></span>
											    	</label>
											    </td>								
										  <tr>
										<?php } ?>
									</table>

									<table class="col-4" style="width:100%">
										  <tr class="text-center">
											    <th>Câu</th>
											    <th>A</th> 
											    <th>B</th>
											    <th>C</th>
											    <th>D</th>									    
										  </tr>
										  <?php for($i=1;$i<=$sl_cot3;$i++){ $j = $i+$sl_cot*2; ?>
										  <tr>
									    		<td class="tb-title"><?php echo $j; ?></td>
											    <td>
											    	<label class="try-container">
												    	<input type="radio" name="cau<?php echo $j; ?>" value="1">
											    		<span class="try-checkmark"></span>
											    	</label>
											    </td>
											    <td>
											    	<label class="try-container">
												    	<input type="radio" name="cau<?php echo $j; ?>" value="2">
											    		<span class="try-checkmark"></span>
											    	</label>
											    </td>
											    <td>
											    	<label class="try-container">
												    	<input type="radio" name="cau<?php echo $j; ?>" value="3">
											    		<span class="try-checkmark"></span>
											    	</label>
											    </td>										    						<td>
											    	<label class="try-container">
												    	<input type="radio" name="cau<?php echo $j; ?>" value="4">
											    		<span class="try-checkmark"></span>
											    	</label>
											    </td>								
										  <tr>

										<?php } ?>
									</table>  
									
								</form>
			                </div>
			                <div class="col-12 text-center">
			                	<br>
			                	<div><div id="thoigian"><p><i class="fa fa-clock-o fa-small" aria-hidden="true"></i> Thời Gian Còn Lại : 16:40</p></div></div>
			                	
			                	<div id="btn_napbai"><a href="#" class="btn-napbai btn-style-general"  id="napbai" onclick="displayRadioValue()">Nạp Bài</a></div>
			                </div>
			                <br>
			            </div>
			        </div> 
			    </div>
			</div>
		</div>
	</div>
</content>
<!-- <script src="https://rawgit.com/RickStrahl/jquery-resizable/master/src/jquery-resizable.js"></script>
<script type="text/javascript">
	 $(".panel-left").resizable({
   			handleSelector: ".splitter",
		   	resizeHeight: false
	 });

</script> -->

</body>
</html>

<script type="text/javascript">
	var made = "<?php echo $md; ?>";
	var soluongcauhoi = "<?php echo $sl_cauhoi; ?>";
	var sl_c_hoi = parseInt(soluongcauhoi);
	var soluongcot = "<?php echo $sl_cot; ?>";
	var sl_c = parseInt(soluongcot);
	var timeless;
	var timeex;
	var startTime;
	var timelb='';
	// timelb = Date.now();
	// 		timelb = new Date(timelb);
	// 		timelb = timelb.getFullYear()+'/'+(timelb.getMonth()+1)+'/'+timelb.getDate()+' '+timelb.getHours() +':'+timelb.getMinutes() + ':'+timelb.getSeconds();
	function displayRadioValue() { 
            //document.getElementById("answer").value  = ""; 
            var ele = document.getElementsByTagName('input'); 
            var kq="";
            for(var i = 0; i < ele.length; i++) { 
                var k = i/4+1;
                k = parseInt(k);
                if(ele[i].type="radio") { 
                  
                    if(ele[i].checked){
                        var kqt = k + ":" + ele[i].value + ",";
                        kq+=kqt;
                    }
                } 
            } 
            var a = "<?php echo $dapan; ?>";
            var da = a.split(","); 
            var kqct = kq.split(",");
            var arrda = new Array();
            var arrvalue = new Array();
        	for(var i=0; i < da.length; i++) { 
				arrda[i] = da[i];
				arrvalue[i] = "-1";
			}
            for(var i=0; i < kqct.length -1; i++ )
            {
            	var ctda = kqct[i].split(":");
            	arrvalue[ctda[0]-1] = ctda[1];
            }
            var diem = 0;
            var dapandung = '';
            for(var i=0; i < arrvalue.length; i++)
            {
            	if(arrvalue[i] === arrda[i]){
            		var num_question = i+1;
            		dapandung += num_question+ ',';
            		arrvalue[i] = '0';
            		diem = diem + 1;
            	}
            }
            var sodiem = parseFloat(diem*10)/parseFloat(arrvalue.length)
            var diemso = '<form action="/action_page.php" style="width: 100%; display: flex;">'
            + '<table class="col-4" style="width:100%">' +
            '<tr class="text-center">' +
            '<th>Câu</th><th>A</th> <th>B</th><th>C</th><th>D</th></tr><tr>';
            
            for(var i=0; i < sl_c; i++) { 
				diemso += '<td class="tb-title">';
				diemso += i+1;
                diemso += '</td>'+
                '<td><label class="try-container"><input ';
                if(da[i] === '1' && arrvalue[i] === '0') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark">';
                else if(da[i] === '1' && arrvalue[i] !== '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-correct">';
                if (arrvalue[i] === '1') diemso +='checked type="radio" readonly="readonly"><span class="try-checkmark-error">';
                if(da[i] === '1' && arrvalue[i] === '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-unselect">';
                diemso += '</span></label></td>'+
	            '<td><label class="try-container"><input ';

                if(da[i] === '2' && arrvalue[i] === '0') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark">';
                else if(da[i] === '2' && arrvalue[i] !== '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-correct">';
                if (arrvalue[i] === '2') diemso +='checked type="radio" readonly="readonly"><span class="try-checkmark-error">';
                if(da[i] === '2' && arrvalue[i] === '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-unselect">';
                diemso += '</span></label></td>'+
	            '<td><label class="try-container"><input ';

                if(da[i] === '3' && arrvalue[i] === '0') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark">';
                else if(da[i] === '3' && arrvalue[i] !== '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-correct">';
                if (arrvalue[i] === '3') diemso +='checked type="radio" readonly="readonly"><span class="try-checkmark-error">';
                if(da[i] === '3' && arrvalue[i] === '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-unselect">';
                diemso += '</span></label></td>'+
	            '<td><label class="try-container"><input ';
	            
                if(da[i] === '4' && arrvalue[i] === '0') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark">';
                else if(da[i] === '4' && arrvalue[i] !== '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-correct">';
                if (arrvalue[i] === '4') diemso +='checked type="radio" readonly="readonly"><span class="try-checkmark-error">';
                if(da[i] === '4' && arrvalue[i] === '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-unselect">';
                diemso += '</span></label></td>'+
	            '<tr>';
			}
			diemso += '</table><table class="col-4" style="width:100%">' +
            '<tr class="text-center">' +
			'<th>Câu</th><th>A</th> <th>B</th><th>C</th><th>D</th></tr><tr>';
			for(var i=sl_c; i < sl_c*2; i++) { 
				diemso += '<td class="tb-title">';
				diemso += i+1;
                diemso += '</td>'+
                '<td><label class="try-container"><input ';
                if(da[i] === '1' && arrvalue[i] === '0') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark">';
                else if(da[i] === '1' && arrvalue[i] !== '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-correct">';
                if (arrvalue[i] === '1') diemso +='checked type="radio" readonly="readonly"><span class="try-checkmark-error">';
                if(da[i] === '1' && arrvalue[i] === '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-unselect">';
                diemso += '</span></label></td>'+
	            '<td><label class="try-container"><input ';

                if(da[i] === '2' && arrvalue[i] === '0') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark">';
                else if(da[i] === '2' && arrvalue[i] !== '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-correct">';
                if (arrvalue[i] === '2') diemso +='checked type="radio" readonly="readonly"><span class="try-checkmark-error">';
                if(da[i] === '2' && arrvalue[i] === '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-unselect">';
                diemso += '</span></label></td>'+
	            '<td><label class="try-container"><input ';

                if(da[i] === '3' && arrvalue[i] === '0') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark">';
                else if(da[i] === '3' && arrvalue[i] !== '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-correct">';
                if (arrvalue[i] === '3') diemso +='checked type="radio" readonly="readonly"><span class="try-checkmark-error">';
                if(da[i] === '3' && arrvalue[i] === '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-unselect">';
                diemso += '</span></label></td>'+
	            '<td><label class="try-container"><input ';
	            
                if(da[i] === '4' && arrvalue[i] === '0') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark">';
                else if(da[i] === '4' && arrvalue[i] !== '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-correct">';
                if (arrvalue[i] === '4') diemso +='checked type="radio" readonly="readonly"><span class="try-checkmark-error">';
                if(da[i] === '4' && arrvalue[i] === '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-unselect">';
                diemso += '</span></label></td>'+
	            '<tr>';
			}
			diemso += '</table><table class="col-4" style="width:100%">' +
            '<tr class="text-center">' +
			'<th>Câu</th><th>A</th> <th>B</th><th>C</th><th>D</th></tr><tr>';
			for(var i=sl_c*2; i < sl_c_hoi; i++) { 
				diemso += '<td class="tb-title">';
				diemso += i+1;
                diemso += '</td>'+
                '<td><label class="try-container"><input ';
                if(da[i] === '1' && arrvalue[i] === '0') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark">';
                else if(da[i] === '1' && arrvalue[i] !== '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-correct">';
                if (arrvalue[i] === '1') diemso +='checked type="radio" readonly="readonly"><span class="try-checkmark-error">';
                if(da[i] === '1' && arrvalue[i] === '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-unselect">';
                diemso += '</span></label></td>'+
	            '<td><label class="try-container"><input ';

                if(da[i] === '2' && arrvalue[i] === '0') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark">';
                else if(da[i] === '2' && arrvalue[i] !== '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-correct">';
                if (arrvalue[i] === '2') diemso +='checked type="radio" readonly="readonly"><span class="try-checkmark-error">';
                if(da[i] === '2' && arrvalue[i] === '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-unselect">';
                diemso += '</span></label></td>'+
	            '<td><label class="try-container"><input ';

                if(da[i] === '3' && arrvalue[i] === '0') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark">';
                else if(da[i] === '3' && arrvalue[i] !== '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-correct">';
                if (arrvalue[i] === '3') diemso +='checked type="radio" readonly="readonly"><span class="try-checkmark-error">';
                if(da[i] === '3' && arrvalue[i] === '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-unselect">';
                diemso += '</span></label></td>'+
	            '<td><label class="try-container"><input ';
	            
                if(da[i] === '4' && arrvalue[i] === '0') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark">';
                else if(da[i] === '4' && arrvalue[i] !== '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-correct">';
                if (arrvalue[i] === '4') diemso +='checked type="radio" readonly="readonly"><span class="try-checkmark-error">';
                if(da[i] === '4' && arrvalue[i] === '-1') diemso += 'checked type="radio" readonly="readonly"><span class="try-checkmark-unselect">';
                diemso += '</span></label></td>'+
	            '<tr>';
			}
            diemso +='<tr></table></form>';
            document.cookie = "timeless=0";
            timeless=0;
            console.log(timelb);
            $.ajax({
                        url: "insert_hs_baithi.php",
                        data: {
                            number : sodiem,
                            time_startlb : timelb,
                            da_test : kq,
                            made : made,
                            dapandung : dapandung
                         //number : $('#ds').val()
                    },
                        type: 'post',
                        success: function (response)
                        {
                            $('#napcode').html(response);
                        }
                    });
            //timeex = 
            document.cookie = "_time"+made+"=";
            document.getElementById("answer1").innerHTML = diemso;
            document.getElementById("thoigian").innerHTML = "<p>Điểm đạt được : "+sodiem+"</p>";
            document.getElementById("btn_napbai").innerHTML = '<a href="index.php" class="btn-napbai" id="napbai">Quay Về Trang Chủ</a><a href="luyende.php" class="btn-napbai" id="napbai">Quay Về Luyện Đề</a>';
        } 
	
		var currentTime = Math.floor(new Date().getTime()/1000,3);
		
		var time_="";
	var onTime = setInterval(function(){

		if(timeless == 0)
		{
			//document.cookie = "_time=";
			return;
		}
		if(!document.cookie)
		{
			startTime = Math.floor(new Date().getTime()/1000,3);
			var t = startTime;
			String(t);
			timelb = Date.now();
			timelb = new Date(timelb);
			timelb = timelb.getFullYear()+'/'+(timelb.getMonth()+1)+'/'+timelb.getDate()+' '+timelb.getHours() +':'+timelb.getMinutes() + ':'+timelb.getSeconds();
					}
		else{
			var ti_me = decodeURIComponent(document.cookie);
			//document.write(ti_me);
			var t=ti_me.split(';');
			for(var i=0;i<t.length;i++)
			{
				var checktime = t[i].includes("_time"+made);
				if(checktime === true)
				{
					time_ = t[i].replace("_time"+made+"=", "");
					String(time_);
					break;
				}
			}
			

			//if(time_ == ""||time_ == " NaN" || time_ == "NaN" || time_ == " NaN "|| time_ ==" ")
			if(isNaN(time_)|| time_ ==" "||time_ == "")
			{
				startTime = Math.floor(new Date().getTime()/1000,3);
				timelb = Date.now();
				timelb = new Date(timelb);
				timelb = timelb.getFullYear()+'/'+(timelb.getMonth()+1)+'/'+timelb.getDate()+' '+timelb.getHours() +':'+timelb.getMinutes() + ':'+timelb.getSeconds();
			}
			else {
				startTime = parseInt(time_);
			}
		}

		//console.log("startTime: ", ti_me);
		//if(time_ == ""||time_ == " NaN" || time_ == "NaN" || time_ == " NaN "|| time_ ==" ")
		if(isNaN(time_)|| time_ ==" "||time_ == "")
		{
			var endTime = startTime + 30 * 60; //Tính giờ 5 phút = 5 * 60 giây
		}

		else
		{
			var endTime = startTime;
		}


		currentTime = Math.floor(new Date().getTime()/1000,3);
		timeless=endTime-currentTime;
		var min=parseInt(timeless/60);
		var second=parseInt((timeless%60)/1);
		document.getElementById("thoigian").innerHTML = min+" : "+second;
		//console.log("currentTime: ", currentTime);
	//console.log("endTime: ", endTime);
	//console.log("timeless: ", timeless);
		if(currentTime == endTime){
			document.cookie = "_time"+made+"=";
			clearInterval(onTime);
			let btnnext =document.getElementById('napbai');
				setTimeout(function(){ btnnext.click(); }, 200);
		}
		var a = endTime;
	String(a);
	var c = currentTime;
	var s = endTime;
	var test = parseInt(c)-parseInt(s);
	if(test>0)
	{
		document.cookie = "_time"+made+"=";
	}
	else
	{		
		document.cookie = "_time"+made+"="+a;
	}
	},1000);
	


</script>
