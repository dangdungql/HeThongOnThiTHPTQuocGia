<?php include("general.php"); ?>
<?php include("headerMore.php");
include_once('inc/myconnect.php');
include_once('inc/function.php');
?>
<title>Luyện đề</title>
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style.css">
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style1.css"><style>
footer{
    position: absolute!important;
    bottom: 0px!important;
}
ul.dsbh {list-style-type: none;}

</style>

<div class= "container pad-60" id="vatly">
<div class="col-sm-6" style="text-align: center;">
    <input id="search" onkeyup="filter()" type="text" class="text-search add-lesson-input" placeholder="Tên đề thi">
    <!-- <i class="fa fa-search"></i> -->
</div>
<br/>
<ul class="dsbh" id="Menu">
<?php
    $query_1 = "SELECT * FROM dethi";
    $results_1 = mysqli_query($dbc, $query_1);
    kt_query($results_1, $query_1);
    while ($dethi = mysqli_fetch_array($results_1, MYSQLI_ASSOC)) {
?>
    <li><div class="row style-vatly">
        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
        <a href="infodethi.php?md=<?php echo $dethi['Made']; ?>" class="click-vatly" value="" name="select-img"><?php echo $dethi['TenDeThi'] ?></a>
    </div></li>
</br>
<?php } ?>
</ul>
</div>

<script type="text/javascript">
            function filter(){
            
            var filterValue, input, ul,li,a,i;
            input = document.getElementById("search");
            filterValue = input.value.toUpperCase();
            ul = document.getElementById("Menu");
            li = ul.getElementsByTagName("li");
                
                for (i = 0 ; i < li.length ; i++){
                    a = li[i].getElementsByTagName("a")[0];
                    if(a.innerHTML.toUpperCase().indexOf(filterValue) > -1){
                        li[i].style.display = "";
                        
                    }else{
                        li[i].style.display = "none";
                    }
                }

            }

</script>

<?php include("footer.php"); ?>