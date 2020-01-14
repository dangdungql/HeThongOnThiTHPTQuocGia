<?php include("general.php"); ?>
<?php include("headerMore.php"); ?>
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style.css">
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style1.css"><style>
footer{
    position: absolute!important;
    bottom: 0px!important;
}
</style>
<div class= "container pad-60" id="vatly">
    <div class="row style-vatly">
        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
        <a href="#" class="click-vatly" value="https://phet.colorado.edu/sims/html/under-pressure/latest/under-pressure_vi.html" name="select-img">Áp suất</a>
    </div>
</br>
    <div class="row style-vatly">
        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
        <a href="#" class="click-vatly" value="https://phet.colorado.edu/sims/html/balloons-and-static-electricity/latest/balloons-and-static-electricity_vi.html" name="select-img">Bong bóng và tĩnh điện</a>
    </div>
</br>
    <div class="row style-vatly">
        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
        <a href="#" class="click-vatly" value="https://phet.colorado.edu/sims/html/circuit-construction-kit-dc-virtual-lab/latest/circuit-construction-kit-dc-virtual-lab_vi.html" name="select-img">Bộ lắp ráp mạch điện: DC - Phòng thí nghiệm ảo</a>
    </div>
</br>
    <div class="row style-vatly">
       <i class="fa fa-hand-o-right" aria-hidden="true"></i>
       <a href="#" class="click-vatly" value="https://phet.colorado.edu/sims/html/circuit-construction-kit-dc/latest/circuit-construction-kit-dc_vi.html" name="select-img">Bộ lắp ráp mạch điện: DC</a>
    </div>
</br>
    <div class="row style-vatly">
        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
        <a href="#" class="click-vatly" value="https://phet.colorado.edu/sims/html/energy-forms-and-changes/latest/energy-forms-and-changes_vi.html">Các dạng và sự chuyển hoá năng lượng</a>
    </div>
</br>
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