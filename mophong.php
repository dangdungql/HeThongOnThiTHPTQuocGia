<?php include("general.php"); ?>
<?php include("headerMore.php"); ?>
<?php
include_once('inc/myconnect.php');
include_once('inc/function.php');
$mp = $_GET['mp'];
$query_2 = "SELECT * FROM monhoc WHERE MaMonHoc=".$mp;
$results_2 = mysqli_query($dbc, $query_2);
kt_query($results_2, $query_2);
$mh = mysqli_fetch_array($results_2, MYSQLI_ASSOC);

?>
<title>Mô Phỏng hiện tượng</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style.css">
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style1.css"><style>
/*footer{
    position: absolute!important;
    bottom: 0px!important;
}*/
</style>
    <div class="container pad-30">
    <div class ="row">
        <div class="container templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class = "row">
                    <div class = "col-sm-8">
                    <div class="templatemo-slogan bounce delay-2s">
                        <span class="txt_darkgrey">Mô Phỏng </span><span class="txt_orange"><?php echo $mh['TenMonHoc']; ?></span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class= "container pad-30" id="vatly">
<a class="click-vatly" value="https://phet.colorado.edu/sims/html/under-pressure/latest/under-pressure_vi.html" name="select-img">Áp suất</a></br>

<a class="click-vatly" value="https://phet.colorado.edu/sims/html/balloons-and-static-electricity/latest/balloons-and-static-electricity_vi.html" name="select-img">Bong bóng và tĩnh điện</a></br>

<a class="click-vatly" value="https://phet.colorado.edu/sims/html/circuit-construction-kit-dc-virtual-lab/latest/circuit-construction-kit-dc-virtual-lab_vi.html" name="select-img">Bộ lắp ráp mạch điện: DC - Phòng thí nghiệm ảo</a></br>

<a class="click-vatly" value="https://phet.colorado.edu/sims/html/circuit-construction-kit-dc/latest/circuit-construction-kit-dc_vi.html" name="select-img">Bộ lắp ráp mạch điện: DC</a></br>

<a class="click-vatly" value="https://phet.colorado.edu/sims/html/energy-forms-and-changes/latest/energy-forms-and-changes_vi.html">Các dạng và sự chuyển hoá năng lượng</a></br>
</div> -->

    <div class="container-fluid">
        <div class = "row">
            <div class = "container">
                <div class="row pad-60">
                	<?php
                	$query_2 = "SELECT * FROM tbl_mophong WHERE MaMonHoc=".$mp;
					                    $results_2 = mysqli_query($dbc, $query_2);
					                    kt_query($results_2, $query_2);
					                    while ($mh = mysqli_fetch_array($results_2, MYSQLI_ASSOC)) { ?>
                    <div class="col-12 col-sm-3 dialy-item-border">
                        <a class="click-vatly" value="<?php echo $mh['link']; ?> " name="select-img">
                            <img src="<?php echo $mh['link_img']; ?> " class="img-fluid">
                        
                            <div class="tm-description-box">
                                <th class="tm-description-text">
                                </th>
                                <?php echo $mh['TenMoPhong']; ?>                                    
                            </div>
                        </a>    
                        
                    </div> 
                     <?php }?>
                             
<!--                     <div class="col-12 col-sm-3">

                            <a class="click-vatly" value="https://phet.colorado.edu/sims/html/balloons-and-static-electricity/latest/balloons-and-static-electricity_vi.html" name="select-img"><img src="https://phet.colorado.edu/sims/html/under-pressure/1.1.1/under-pressure-600.png" alt="Image" class="img-fluid">
                        
                            <div class="tm-description-box">
                                <th class="tm-description-text">
                                    
                                </th>
                                Bong bóng và tĩnh điện
                                    
                            </div>
                            </a>
                                                                        
                    </div>
                    <div class="col-12 col-sm-3">
                        <a class="click-vatly"  value="https://phet.colorado.edu/sims/html/circuit-construction-kit-dc-virtual-lab/latest/circuit-construction-kit-dc-virtual-lab_vi.html"  name="select-img">
                            <img src="./site/img/mophong/machdien.png" alt="Image" class="img-fluid">
                        
                            <div class="tm-description-box">
                                <th class="tm-description-text">
                                </th>
                                <a class="click-vatly" value="https://phet.colorado.edu/sims/html/under-pressure/latest/under-pressure_vi.html" name="select-img">Bộ lắp ráp mạch điện: DC - Phòng thí nghiệm ảo</a>                                    
                            </div>
                        </a>
                    </div>  -->
                     
                             
<!--                     <div class="col-12 col-sm-3">

                        <a class="click-vatly"  value="https://phet.colorado.edu/sims/html/circuit-construction-kit-dc/latest/circuit-construction-kit-dc_vi.html"  name="select-img">
                            <img src="./site/img/mophong/machdien.png" alt="Image" class="img-fluid">
                        
                            <div class="tm-description-box">
                                <th class="tm-description-text">
                                    
                                </th>
                                Bong bóng và tĩnh điện
                                    
                            </div>
                        </a>
                                                                        
                    </div>
                    <div class="col-12 col-sm-3">

                            <a class="click-vatly"  value="https://phet.colorado.edu/sims/html/energy-forms-and-changes/latest/energy-forms-and-changes_vi.html">
                            <img src="./site/img/mophong/chuyenhoa.png" alt="Image" class="img-fluid">
                        
                            <div class="tm-description-box">
                                <th class="tm-description-text">
                                    
                                </th>
                                Bong bóng và tĩnh điện
                                    
                            </div>
                            </a>
                                                                        
                    </div> -->
                </div>        
         
            </div>
        </div>

    </div>

<script type="text/javascript">
$('a.click-vatly').click(function(event) {
    var _this = $(this),
        link = _this.attr('value'),
        div_preview = $('#pre_view');
        div_preview.empty().append(`<iframe src=${link} width="100%" height="100%" scrolling="no" allowfullscreen></iframe>`);
        
    $('#view-imge').modal('show');


	// var a = event.target.outerHTML;
	// //a.replace("<a.click-vatly","");
    // a.replace("click-vatly","");

	// var res = a.split('"');	
	// var link=res[1];
	// //console.log(link);

    //var link = _this.attr('value');
    //var div_preview = $('#pre_view');
    // div_preview.empty();
    // $('<iframe allowfullscreen>')
    //                 .attr('src', link )
    //                 .attr('width', '100%')
    //                 .attr('height', '100%')
    //                 .attr('scrolling', 'no')
    //                 .appendTo(div_preview);


	//var div_preview='';
    //div_preview = $('#pre_view');
    //div_preview.empty().append('<iframe src="'+link+'" width="100%" height="100%" scrolling="no" allowfullscreen></iframe>');
    //div_preview.empty().append(`<iframe src=${link} width="100%" height="100%" scrolling="no" allowfullscreen></iframe>`);

    //$('#view-imge').modal('show');
    //div_preview.removeClass();
});
</script>
<div class="modal fade" id="view-imge">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div style='height: 600px; width: 100%; display:flex; justify-content: center;   align-items:center;' id='pre_view'></div>

            </div>
            </div>
        </div>
    </div>
    
</div>
<?php include("footer.php"); ?>