
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="site/css/style-admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="//unpkg.com/canvas-datagrid/dist/canvas-datagrid.js"></script>
    <div class ="main-container" style="display: flex;">
        <?php include("navBar.php"); ?>   
        <div class ="wrapper">
            <?php include("headerAdmin.php"); ?>
            <div class="container-baihoc" id="baiHoc">
                <div class="wrap-contact100 fade-in">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $namedethi = $_POST['tendethi'];
                        //$machuong = $_COOKIE['MaChuong'];
                        $output = '';
                        $a = array();
                        $link_file = 0;
                        $name_file = "";
                        $linkfile = $_POST['linkfile'];

                        while (isset($_POST['name'.$link_file])) {
                            $name_file = $name_file.$_POST['name'.$link_file];
                            $name_file = $name_file.",";
                            $link_file = $link_file+1;
                        }
                        $name_file = rtrim($name_file, ','); 
                        //echo $namedethi;
                        //echo $name_file;
                        //echo $linkfile;

                        // if(isset($_POST['1']))
                        // {
                            $connect = mysqli_connect("localhost", "root", "", "webhoctap");

                                $extension_1 = explode(".", $_FILES["excel"]["name"]);
                                $extension = end($extension_1);
                                $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
                                if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
                                {

                                    $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
                                    //echo $file;
                                    include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
                                    $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

                                    $output .= "<label class='text-success'>Câu hỏi được nhập</label><br /><table class='table table-bordered'>";
                                    $output .= '<td>'.'Đáp an'.'</td>';
                                    $output .= '<td>'.'Chương'.'</td>';
                                    $output .= '<td>'.'Mức độ'.'</td>';

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
                                            
                                            $output .= '</tr>';
                                        }
                                    } 
                                    $output .= '</table>';

                                }
                                else
                                {
                                    $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
                                }
                                //echo $output;

                        // }
                        // else if(isset($_POST['2']))
                        // {
                        //     header('Location:addquiz.php');
                        // }
                    }

                    ?>
                    <form class="contact100-form validate-form" name="frmbaiviet" method="POST" enctype="multipart/form-data">

                        <div class="baihoc-content">
                            <div class="baihoc-header-title"><span class="contact100-form-title"><i class="fa fa-upload" aria-hidden="true"></i>Đăng đề thi</span></div>



                            <div class="pad-30">

                                <span class="label-input100"><i class="fa fa-pencil" aria-hidden="true"></i>Tên đề thi</span>
                                <input class="input100" type="text" name="tendethi"  placeholder="Nhập tên đề thi...">
                                <br/>
                                <br/>
                                <div id='path-group'></div>
                                <!-- <input type="hidden" id="path"> -->
                                <input  type="hidden" id="path" name = "linkfile">
                                <a href="#" id="select-img" title="Chon hinh anh" class="btn-style-general"><i class="fa fa-folder-open-o" aria-hidden="true"></i>Chon file</a>
                                <a href="#" id="remove-img" title="Xoa hinh anh" class="btn-style-remove"><i class="fa fa-trash-o" aria-hidden="true"></i>Xoa file</a>
                                <br/>
                                <div class="baihoc-flex">
                                    <span class="label-input100"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Chọn File đáp án:</span>
                                    <input type="file" name="excel" id="file" onchange="myFunction()"/>
                                    <!-- <input type="file" name="excel" id="mySelect"/> -->
                                    <div id='path-group-excel'></div>
                                    <div id='link-file'></div>
                                </div>
                                <input type="submit" name="submit" class="btn-style-general" value="Thêm mới"> 
                            </div>
                
                        </div>
                    </form>
<!--                     <a href="baihoc_add.php">
                        <button class="contact100-form-btn btn-style-general"><i class="fa fa-plus" aria-hidden="true"></i>Tạo bài giảng cho chương khác </button>
                    </a>
 -->                </div>
            </div>
        </div>
    </div>



</body>
</html>

<script>
    
$('a#select-img').click(function(event) {
    event.preventDefault();
    $('#modal-media-imge').modal('show');       
    $('#modal-media-imge').on('hide.bs.modal', function(e) {
        var imgurlsString = $('input#path').val();
        //console.log(imgurlsString);
        if(imgurlsString.includes('","'))
        {
            var imgurlsArray = JSON.parse(imgurlsString);
            console.log(imgurlsArray);
            var divPathGroup = $('#path-group');

            var ip = '<p class="baihoc-small-title">Tiêu đề</p> <input name="{name}" class="form-control dangbaihoc-input" value="" />';
            var inputTemplate = '<input class="form-control" value="{inputVal}" readonly="readonly"/>';
            var buttonTemplate = '<input type="button" class="button-click" value="Xem" id="{index}" /><br/><br/>';
            divPathGroup.empty();            
            var arr={};
            var file=0;
            imgurlsArray.forEach(function(imgurl,index) {
                var newHTML = inputTemplate.replace('{inputVal}', imgurl) + buttonTemplate.replace('{index}', index)
                divPathGroup.append(newHTML);
                arr[index]=imgurl;
                file = file+1;
            });
            divPathGroup.find('.button-click').click(function(event){
                var div_preview = $('#pre_view');
                div_preview.empty();
                var ID = $(event.currentTarget).attr('id');
                filedoc = arr[ID].includes(".doc");
                filedocx = arr[ID].includes(".docx");
                filepdf = arr[ID].includes(".pdf");
                var link_img=arr[ID].toLowerCase();
                filepng = link_img.includes(".png");
                filejpg = link_img.includes(".jpg");
                filegif = link_img.includes(".gif");
                if(filedoc==true||filedocx==true||filepdf==true)
                {
                    var res = arr[ID].indexOf("/dethi");
                    var linkfile = arr[ID].substr(res);
                    var link =  "https://onluyendaihoc.com"+linkfile;
                    var src = "https://docs.google.com/viewer?url=" + link + "&embedded=true";
                    div_preview.append('<iframe style="width: 100%; height: 500px;" src="' + src + '"></iframe>');
                    $('#view-imge').modal('show');
                }
                else if(filepng==true||filejpg==true||filegif==true)
                {
                    var res = arr[ID].indexOf("/dethi");
                    var linkfile = arr[ID].substr(res);
                    var link =  linkfile;
                    div_preview.append('<image src=".' + link + '" style="height: 100%;">');
                    $('#view-imge').modal('show');
                }
                else
                {
                    var res = arr[ID].indexOf("/dethi");
                    var linkfile = arr[ID].substr(res);
                    var link = ".." + linkfile;
                    div_preview.append('<iframe style="width: 100%; height: 500px;" src=".' + linkfile + '"></iframe>');
                    $('#view-imge').modal('show');
                }
            });
        }
        else
        {
            var ip = '<p class="baihoc-small-title">Tiêu đề</p> <input name="name0" class="form-control dangbaihoc-input" value="" />';
            var divPathGroup = $('#path-group');
            var inputTemplate = '<input class="form-control dangbaihoc-input" value="{inputVal}" readonly="readonly"/>';
            var buttonTemplate = '<input type="button" class="button-click btn-style-remove dangbaihoc-input" value="Xem"/>';
            divPathGroup.empty();
            divPathGroup.append((inputTemplate.replace('{inputVal}', imgurlsString))+ buttonTemplate)
            
            divPathGroup.find('.button-click').click(function(event){
                var link_file = imgurlsString;
                
                var div_preview = $('#pre_view');
                div_preview.empty();
                filedoc = link_file.includes(".doc");
                filedocx = link_file.includes(".docx");
                filepdf = link_file.includes(".pdf");
                var link_img=link_file.toLowerCase();
                filepng = link_file.includes(".png");
                filejpg = link_file.includes(".jpg");
                filegif = link_file.includes(".gif");
                if(filedoc==true||filedocx==true||filepdf==true)
                {
                    var res = link_file.indexOf("/dethi");
                    var linkfile = link_file.substr(res);
                    var link =  "https://onluyendaihoc.com"+linkfile;
                    var src = "https://docs.google.com/viewer?url=" + link + "&embedded=true";
                    div_preview.append('<iframe style="width: 100%; height: 500px;" src="' + src + '"></iframe>');
                    $('#view-imge').modal('show');
                }
                else if(filepng==true||filejpg==true||filegif==true)
                {
                    var res = link_file.indexOf("/dethi");
                    var linkfile = link_file.substr(res);
                    var link =  linkfile;
                    div_preview.append('<image src=".' + link + '" style="height: 100%;">');
                    $('#view-imge').modal('show');
                }
                else
                {
                    var res = link_file.indexOf("/dethi");
                    var linkfile = link_file.substr(res);
                    var link =  linkfile;
                    div_preview.append('<iframe style="width: 100%; height: 500px;" src=".' + link + '"></iframe>');
                    $('#view-imge').modal('show');
                }
            });
        }
    });
});
$('a#remove-img').click(function(event){
    event.preventDefault();
    $('input#path').val('');
    var divPathGroup = $('#path-group');
    var inputTemplate = '<input class="form-control" value="{inputVal}" readonly="readonly"/>';
    divPathGroup.empty();
});

// $('input#excel').click(function(event){
//  //event.preventDefault();
//  //$('#modal-media-imge').modal('show');
//  document.getElementById("demo").innerHTML = "Hello World";
// });


function myFunction() {
    var divPathGroup = $('#path-group-excel');
    var buttonTemplate = '<input type="button" class="button-click" value="Xem"/>';
    divPathGroup.empty();
    divPathGroup.append(buttonTemplate)

    divPathGroup.find('.button-click').click(function(event){
        $('#view-imge1').modal('show');
    });
}

// $('#mySelect').change( function(event) {
//  console.log(this.files[0].mozFullPath);
//  var tmppath = $(this).val();
//  var divPathGroup = $('#link-file');
//  var buttonTemplate = '<input type="button" class="button-click" value="Xem trước"/>';
//  divPathGroup.empty();
//     divPathGroup.append(buttonTemplate)
    
//     divPathGroup.find('.button-click').click(function(event){
//      var div_preview = $('#pre_view');
//      div_preview.empty();
//         div_preview.append('<iframe style="width: 100%; height: 500px;" src="readexcel.php?link='+tmppath+'"></iframe>');
//         $('#view-imge').modal('show');
//     });
// });

</script>

<div class="modal fade" id="modal-media-imge">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Thu Vien</h4>
                <div class="modal-body">
                    <iframe id="iView" src="tinymce/dialog_dethi.php?field_id=path" style="border: none;width: 100%; height: 500px;"></iframe>

                </div>
                <div class="model-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button id="select_m" type="button" class="btn btn-default" style="float: right;">Chọn</button>
                </div>
            </div>
        </div>
        <script>
            $(function(){
                let select_m = $('#select_m');
                select_m.on('click', function() {
                    let btnIframe = $('#select_multi', $('#iView').contents());
                    btnIframe.click();
                })
            });
        </script>
        
    </div>
    
</div>
<div class="modal fade" id="view-imge1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <div class="modal-body">
                <div style='height: 500px;' id="grid"></div>
            </div>
            </div>
        </div>
    </div>
    
</div>
<div class="modal fade" id="view-imge">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <div class="modal-body">
                <div style='height: 500px; width: 100%; display:flex; justify-content: center;   align-items:center;' id='pre_view'></div>
            </div>
            </div>
        </div>
    </div>
    
</div>
<script src="//unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
        <script src="assets/js/dropsheet.js"></script>
        <script src="assets/js/main.js"></script>

        <script src="assets/vendor/spin.js"></script>