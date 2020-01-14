<title>Contact V6</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script type="text/javascript" src="assets/tinymce/tinymce/tinymce.min.js"></script>
--><!-- <script type="text/javascript" src="assets/tinymce/tiny.js"></script>
-->  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="site/css/style-admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div class ="main-container" style="display: flex;">
  	<?php include("navBar.php"); ?>
	<div class ="wrapper">
	<?php include("headerAdmin.php"); ?>
	<?php
		setcookie('MaChuong', '0');
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$title=$_POST['title'];
			//setcookie('MaChuong', $title);
			
			//$monhoc=$_GET['monhoc'];
		    //$idnguoidang=$_SESSION['uid'];
		    // if(!empty($_POST['mucdo'])) {    
		    //     foreach($_POST['mucdo'] as $value){
		    //         echo "value : ".$value.'<br/>';
		    //     }
		    // }
		    $chuong = $_POST['title'];
		    echo $chuong;
		    $nhanbiet = $_POST['nhanbiet'];
		    $thonghieu = $_POST['thonghieu'];
		    $vandung = $_POST['vandung'];
		    $vdcao = $_POST['vdcao'];
		    $mucdo = $nhanbiet.",".$thonghieu.",".$vandung.",".$vdcao;
		    echo $mucdo;

		    $output = '';
            $connect = mysqli_connect("localhost", "root", "", "webhoctap");
        

            $extension_1 = explode(".", $_FILES["excel1"]["name"]);
            $extension = end($extension_1);
            $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
            if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
            {

                $file = $_FILES["excel1"]["tmp_name"]; // getting temporary source of excel file
                //echo $file;
                include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
                $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

                $output .= "<label class='text-success'>Câu hỏi được nhập</label><br /><table class='table table-bordered'>";
                $output .= '<td>'.'cau hoi'.'</td>';
                $output .= '<td>'.'cau a'.'</td>';
                $output .= '<td>'.'cau b'.'</td>';
                $output .= '<td>'.'cau c'.'</td>';
                $output .= '<td>'.'cau d'.'</td>';
                $output .= '<td>'.'dap an'.'</td>';

                $output .= '</tr>';

                foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
                {
                    $highestRow = $worksheet->getHighestRow();
                    $i = 0;
                    for($row=1; $row<=6; $row++)
                    {
                        $i++;
                        $output .= "<tr>";
                        $cot1 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                        $cot2 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                        $cot3 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                        $cot4 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                        $cot5 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
                        $cot6 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());

                        //echo $cot1;

                        // $query = "INSERT questionstn(number , NoiDung, answer) VALUES (".$i.",'".$cot1."',".$cot6.")";
                        // $result_s=mysqli_query($dbc,$query);
                        // kt_query($result_s,$query);


                        //mysqli_query($connect, $query);

                        // $query_1 = "INSERT answerstn(questions_id, NoiDung, Made) VALUES (".$i.",'".$cot2."',5)";
                        // $result_1 = mysqli_query($dbc,$query_1);
                        // kt_query($result_1,$query_1);
                        // $query_2 = "INSERT answerstn(questions_id, NoiDung, Made) VALUES (".$i.",'".$cot3."',5)";
                        // $result_2 = mysqli_query($dbc,$query_2);
                        // kt_query($result_2,$query_2);
                        // $query_3 = "INSERT answerstn(questions_id, NoiDung, Made) VALUES (".$i.",'".$cot4."',5)";
                        // $result_3 = mysqli_query($dbc,$query_3);
                        // kt_query($result_3,$query_3);
                        // $query_4 = "INSERT answerstn(questions_id, NoiDung, Made) VALUES (".$i.",'".$cot5."',5)";
                        // $result_4 = mysqli_query($dbc,$query_4);
                        // kt_query($result_4,$query_4);
                            
                        $output .= '<td>'.$cot1.'</td>';
                        $output .= '<td>'.$cot2.'</td>';
                        $output .= '<td>'.$cot3.'</td>';
                        $output .= '<td>'.$cot4.'</td>';
                        $output .= '<td>'.$cot5.'</td>';
                        $output .= '<td>'.$cot6.'</td>';
                        
                        $output .= '</tr>';
                    }
                } 
                $output .= '</table>';
                echo $output;
            }
            else
            {
                $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
            }


		    if(empty($errors))
		    {
		        // //inser vao trong db
		        // $query_2="INSERT tblchuong(TenChuong,MaMonHoc) VALUES ('{$title}',1)";
		        // $results_2=mysqli_query($dbc,$query_2);
		        // kt_query($results_2,$query_2);
		        // if(mysqli_affected_rows($dbc)==1)
		        // {
		        //     $query="SELECT * FROM tblchuong ORDER BY MaChuong DESC LIMIT 1";
		        //     $results=mysqli_query($dbc,$query);
		        //     kt_query($results,$query);
		        //     $chuong=mysqli_fetch_array($results,MYSQLI_ASSOC);
		        //     $machuong=$chuong['MaChuong'];
		        //     //echo $machuong;
		        //     header('Location:add_baihoc.php?chuong='.$machuong);
		        // }

		    }
		    else
		    {
		        $message="<p class='required'>Bạn hãy nhập đầy đủ thông tin</p>";
		    }



			//header('Location:baihoc.php');

		}
	?>
	<div class="container-add-baihoc container-baihoc">
		<form name="frmbaiviet" method="POST" enctype="multipart/form-data">
			<div class="baihoc-header-title"><h3><i class="fa fa-pencil" aria-hidden="true"></i>THÊM MỚI</h3></div>
			<div class="pad-30 no-pad-30"><a href="baihoc.php" class="btn-style-remove"><i class="fa fa-cog" aria-hidden="true"></i>Chương đã có sẵn</a></div>
			<div class="form-group pad-30 no-pad-30">
				<label>Tên chương</label>
				<input type="text" name="title" value="<?php if (isset($_POST['title'])) {echo $_POST['title'];}?>" class="form-control" placeholder="Tên Chương ">
				<?php
                    if (isset($errors) && in_array('title', $errors)) {
                        echo "<p class='required'>Bạn chưa nhập tiêu đề của chương</p>";
                    }
                    ?>
                    			<div class="baihoc-flex">
    <span class="label-input100"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Chọn File kiem tra</span>
    <input type="file" name="excel1" id="file" onchange="myFunction()"/>
<!--     <div id='path-group-excel'></div>
    <div id='link-file'></div> -->
    
</div>

			</div>

			<div class="tab-content row pad-30">
			<!-- <div class="tab-pane fade in active" role="tabpanel" id="vaohoc"> -->
				<div class="col-sm-8">
				<div class="container add-lesson-border">
			<div class="row choosen-courses">
							<table class="table">
			<tr>
				<!-- <td><p  class="markDescription">Lọc bài giảng</p></td> -->
				<td>
					<div class="form-check-inline">
						<label class="container-btn1 mdl-radio__label">Vận dụng cao
						  <input type="" checked="checked" name='vdcao' value="0" >
						  <span class="checkmark1"></span>
						</label>
					</div>
					<!-- <p><i>0 bài</i></p> -->
				</td>
				<td>
					<div class="form-check-inline">
						<label class="container-btn1 mdl-radio__label">Vân dụng
						  <input type="" checked="checked" name='vandung' value="0" >
						  <span class="checkmark1"></span>
						</label>
					</div>
					<!-- <p><i>0 bài</i></p> -->
				</td>
				<td>
					<div class="form-check-inline mdl-radio__label">
						<label class="container-btn1 color-red">Thông hiểu
						  <input type="" checked="checked" name='thonghieu' value="0" >
						  <span class="checkmark1"></span>
						</label>
					</div>
					<!-- <p><i>0 bài</i></p> -->
				</td>
				<td>
					<div class="form-check-inline mdl-radio__label">
						<label class="container-btn1">Nhận biết
						  <input type="" checked="checked" name='nhanbiet' value="0" >
						  <span class="checkmark1"></span>
						</label>
					</div>
					<!-- <p><i>0 bài</i></p> -->
				</td>
			</tr>
		</table>
	</div>
</div>
</div>
</div>
<!-- </div> -->

			<div class="pad-30"><input type="submit" name="submit" class="btn btn-primary btn-style-general" value="Thêm mới"></div>
		</form>
	</div>
	</div>
</div>


</div>
