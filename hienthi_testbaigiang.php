<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="site/css/style-admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<div class ="main-container" style="display: flex;">

<?php
include_once 'inc/myconnect.php';
include_once 'inc/function.php';
include("navBar.php");
?>

<div class ="wrapper">
    <?php include("headerAdmin.php"); ?>
<div class="container">
    <div class="row">
        <div id="table" class="show-gird col-12 col-sm-12">
<?php
$output = "";
$output .= "<br/><label class='text-success'>Câu hỏi được nhập</label><br /><table class='table table-bordered'>";
$output .= '<td width="50%">'.'Câu hỏi'.'</td>';
$output .= '<td width="10%">'.'A'.'</td>';
$output .= '<td width="10%">'.'B'.'</td>';
$output .= '<td width="10%">'.'C'.'</td>';
$output .= '<td width="10%">'.'D'.'</td>';
$output .= '<td width="8%">'.''.'</td>';
$output .= '</tr>';

$query_2 = "SELECT * FROM questions WHERE MaCongThuc=1";
$results_2 = mysqli_query($dbc, $query_2);
kt_query($results_2, $query_2);
while ($ch = mysqli_fetch_array($results_2, MYSQLI_ASSOC)) {
	$output .= '<td>'.$ch['name_question'].'</td>';
	$query_1 = "SELECT * FROM answers WHERE questions_id=".$ch['id'];
	$results_1 = mysqli_query($dbc, $query_1);
	kt_query($results_1, $query_1);
	//$i=1;
	//$dapan = intval($ch['answer']);
	while ($da = mysqli_fetch_array($results_1, MYSQLI_ASSOC)) {
		if('1' === $da['cheking'])
		    $output .= '<td style="color: green; font-weight: bold; ">'.$da['name_answer'].'</td>';
		else
			$output .= '<td style="color: red; font-weight: bold; ">'.$da['name_answer'].'</td>';

		// $i++;
	}
    $output .= '<td>'.'<a>Chỉnh sửa</a>'.'</td>';
    $output .= '</tr>';

}
$output .= '</table>';
echo $output;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['1']))
    {

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
                $output .= '<td>'.''.'</td>';

                $output .= '</tr>';
                $querydelete = "DELETE FROM questions WHERE MaCongThuc=1;";
                        $resultdelete=mysqli_query($dbc,$querydelete);
                        kt_query($resultdelete,$querydelete);
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

                        

                        $query = "INSERT questions(name_question , MaCongThuc) VALUES ('".$cot1."',1)";
                        $result_s=mysqli_query($dbc,$query);
                        kt_query($result_s,$query);
                        if(mysqli_affected_rows($dbc)==1)
		        		{
	                        $query="SELECT * FROM questions ORDER BY id DESC LIMIT 1";
				            $results=mysqli_query($dbc,$query);
				            kt_query($results,$query);
				            $cauhoi=mysqli_fetch_array($results,MYSQLI_ASSOC);
				            $idch=$cauhoi['id'];
				        }
				        if($cot6 === '1')
				        {
		                    $query_1 = "INSERT answers(questions_id, name_answer, cheking) VALUES (".$idch.",'".$cot2."',1)";
		                    $result_1 = mysqli_query($dbc,$query_1);
		                    kt_query($result_1,$query_1);
	                    }
	                    else
	                    {
	                    	$query_1 = "INSERT answers(questions_id, name_answer, cheking) VALUES (".$idch.",'".$cot2."',0)";
		                    $result_1 = mysqli_query($dbc,$query_1);
		                    kt_query($result_1,$query_1);
	                    }
	                    if($cot6 === '2')
				        {
		                    $query_2 = "INSERT answers(questions_id, name_answer, cheking) VALUES (".$idch.",'".$cot3."',1)";
		                    $result_2 = mysqli_query($dbc,$query_2);
		                    kt_query($result_2,$query_2);
		                }
		                else
	                    {
	                    	$query_2 = "INSERT answers(questions_id, name_answer, cheking) VALUES (".$idch.",'".$cot3."',0)";
		                    $result_2 = mysqli_query($dbc,$query_2);
		                    kt_query($result_2,$query_2);
	                    }
	                    if($cot6 === '3')
				        {
		                    $query_3 = "INSERT answers(questions_id, name_answer, cheking) VALUES (".$idch.",'".$cot4."',1)";
		                    $result_3 = mysqli_query($dbc,$query_3);
		                    kt_query($result_3,$query_3);
		                }
		                else
	                    {
	                    	$query_3 = "INSERT answers(questions_id, name_answer, cheking) VALUES (".$idch.",'".$cot4."',0)";
		                    $result_3 = mysqli_query($dbc,$query_3);
		                    kt_query($result_3,$query_3);
	                    }
	                    if($cot6 === '4')
				        {
		                    $query_4 = "INSERT answers(questions_id, name_answer, cheking) VALUES (".$idch.",'".$cot5."',1)";
		                    $result_4 = mysqli_query($dbc,$query_4);
		                    kt_query($result_4,$query_4);
		                }
		                else
	                    {
	                    	$query_4 = "INSERT answers(questions_id, name_answer, cheking) VALUES (".$idch.",'".$cot5."',0)";
		                    $result_4 = mysqli_query($dbc,$query_4);
		                    kt_query($result_4,$query_4);
	                    }
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
                echo "<meta http-equiv='refresh' content='0'>";
                //echo $output;
            }
            else
            {
                $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
            }

    }
    else if(isset($_POST['2']))
    {
        header('Location:addquiz.php');
    }
}

?>
<form class="contact100-form validate-form" name="frmbaiviet" method="POST" enctype="multipart/form-data">
<div class="baihoc-flex">
    <span class="label-input100"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Chọn File đáp án :</span>
    <input type="file" name="excel1" id="file" onchange="myFunction()"/>
    <div id='path-group-excel'></div>
    <div id='link-file'></div>
    
</div>
<div style="float:right;">
<input type="submit" class="btn-style-general" name="2" value="Canel"/>
<input type="submit" name="1" class="btn-style-general" value="Cập nhật"> 
</div>
</form>
</div>       

    </div>
</div>
</div>
</div>
<div>
</div>
