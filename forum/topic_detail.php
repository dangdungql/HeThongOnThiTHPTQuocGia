
<?php
include_once('../inc/myconnect.php');
include_once('../inc/function.php');

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forum :: Topic</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome-4.0.3/css/font-awesome.min.css">

    <!-- CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

</head>
<body class="topic">

<div class="container-fluid">

    <!-- Slider -->
    <div class="tp-banner-container">
        <div class="tp-banner" >
            <ul>
                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                    <!-- MAIN IMAGE -->
                    <img src="images/slide.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                </li>
            </ul>
        </div>
    </div>
    <!-- //Slider -->

    <?php include ("HeaderNav.php")?>



    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 breadcrumbf">
                    <a href="#">Borderlands 2</a> <span class="diviver">&gt;</span> <a href="#">General Discussion</a> <span class="diviver">&gt;</span> <a href="#">Topic Details</a>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">

                    <!-- POST -->
                    <div class="post beforepagination">
                        <div class="topwrap">
                            <div class="userinfo pull-left">
                                <div class="avatar">
                                    <img src="images/avatar.jpg" alt="" />
                                    <div class="status green">&nbsp;</div>
                                </div>

                                <div class="icons">
                                    <img src="images/icon1.jpg" alt="" /><img src="images/icon4.jpg" alt="" /><img src="images/icon5.jpg" alt="" /><img src="images/icon6.jpg" alt="" />
                                </div>
                            </div>
                            <div class="posttext pull-left">
                                <?php
                                $idTopic = $_GET["id"];
                                $query_1 = "SELECT * FROM topic where id = '$idTopic'";
                                $results_1 = mysqli_query($dbc, $query_1);
                                kt_query($results_1, $query_1);
                                $data = mysqli_fetch_array($results_1, MYSQLI_ASSOC);
                                echo  "<h2>".$data['title']."</h2>";
                                echo  "<p>".$data['description']."</p>";
                                ?>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="postinfobot">

                            <div class="likeblock pull-left">
                                <a href="#" class="up"><i class="fa fa-thumbs-o-up"></i>25</a>
                                <a href="#" class="down"><i class="fa fa-thumbs-o-down"></i>3</a>
                            </div>

                            <div class="prev pull-left">
                                <a href="#"><i class="fa fa-reply"></i></a>
                            </div>

                            <div class="posted pull-left"><i class="fa fa-clock-o"></i> Posted on : 20 Nov @ 9:30am</div>

                            <div class="next pull-right">
                                <a href="#"><i class="fa fa-share"></i></a>

                                <a href="#"><i class="fa fa-flag"></i></a>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div><!-- POST -->

                    <div class="paginationf">
                        <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
                        <div class="pull-left">
                            <ul class="paginationforum">
                                <li class="hidden-xs"><a href="#">1</a></li>
                                <li class="hidden-xs"><a href="#">2</a></li>
                                <li class="hidden-xs"><a href="#">3</a></li>
                                <li class="hidden-xs"><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#" class="active">7</a></li>
                                <li><a href="#">8</a></li>
                                <li class="hidden-xs"><a href="#">9</a></li>
                                <li class="hidden-xs"><a href="#">10</a></li>
                                <li class="hidden-xs hidden-md"><a href="#">11</a></li>
                                <li class="hidden-xs hidden-md"><a href="#">12</a></li>
                                <li class="hidden-xs hidden-sm hidden-md"><a href="#">13</a></li>
                                <li><a href="#">1586</a></li>
                            </ul>
                        </div>
                        <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
                        <div class="clearfix"></div>
                    </div>

                    <?php
                    $idTopic = $_GET["id"];
                    $query_2 = "SELECT * FROM topic_comment where topic_id = '$idTopic'";
                    $results_2 = mysqli_query($dbc, $query_2);
                    kt_query($results_2, $query_2);
                    while ($topic = mysqli_fetch_array($results_2, MYSQLI_ASSOC)) {?>

                    <!-- POST -->
                    <div class="post">
                        <div class="topwrap">
                            <div class="userinfo pull-left">
                                <div class="avatar">
                                    <img src="images/avatar2.jpg" alt="" />
                                    <div class="status red">&nbsp;</div>
                                </div>

                                <div class="icons">
                                    <img src="images/icon3.jpg" alt="" /><img src="images/icon4.jpg" alt="" /><img src="images/icon5.jpg" alt="" /><img src="images/icon6.jpg" alt="" />
                                </div>
                            </div>
                            <div class="posttext pull-left">
                                <p><?php echo $topic["content"]?></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="postinfobot">

                            <div class="likeblock pull-left">
                                <a href="#" class="up"><i class="fa fa-thumbs-o-up"></i>10</a>
                                <a href="#" class="down"><i class="fa fa-thumbs-o-down"></i>1</a>
                            </div>

                            <div class="prev pull-left">
                                <a href="#"><i class="fa fa-reply"></i></a>
                            </div>

                            <div class="posted pull-left"><i class="fa fa-clock-o"></i> Posted on : 20 Nov @ 9:45am</div>

                            <div class="next pull-right">
                                <a href="#"><i class="fa fa-share"></i></a>

                                <a href="#"><i class="fa fa-flag"></i></a>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div><!-- POST -->

                    <?php }?>

                    <!-- POST -->
                    <div class="post">
                        <form action="#" class="form" method="post">
                            <div class="topwrap">
                                <div class="userinfo pull-left">
                                    <div class="avatar">
                                        <img src="images/avatar4.jpg" alt="" />
                                        <div class="status red">&nbsp;</div>
                                    </div>

                                    <div class="icons">
                                        <img src="images/icon3.jpg" alt="" /><img src="images/icon4.jpg" alt="" /><img src="images/icon5.jpg" alt="" /><img src="images/icon6.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="posttext pull-left">
                                    <div class="textwraper">
                                        <div class="postreply">Phản hồi</div>
                                        <textarea name="reply" id="reply" placeholder="Nhập nội dung phản hồi"></textarea>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="postinfobot">

                                <div class="notechbox pull-left">
                                    <input type="checkbox" name="note" id="note" class="form-control" />
                                </div>

                                <div class="pull-left">
                                    <label for="note"> Email cho tôi khi có phản hồi khác</label>
                                </div>

                                <div class="pull-right postreply">
                                    <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                                    <div class="pull-left"><button type="submit" class="btn btn-primary" onclick="addComment()">Post Reply</button></div>
                                    <div class="clearfix"></div>
                                </div>


                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div><!-- POST -->


                </div>
                <?php include ("Panel.php")?>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="pull-left"><a href="#" class="prevnext"><i class="fa fa-angle-left"></i></a></div>
                    <div class="pull-left">
                        <ul class="paginationforum">
                            <li class="hidden-xs"><a href="#">1</a></li>
                            <li class="hidden-xs"><a href="#">2</a></li>
                            <li class="hidden-xs"><a href="#">3</a></li>
                            <li class="hidden-xs"><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#" class="active">7</a></li>
                            <li><a href="#">8</a></li>
                            <li class="hidden-xs"><a href="#">9</a></li>
                            <li class="hidden-xs"><a href="#">10</a></li>
                            <li class="hidden-xs hidden-md"><a href="#">11</a></li>
                            <li class="hidden-xs hidden-md"><a href="#">12</a></li>
                            <li class="hidden-xs hidden-sm hidden-md"><a href="#">13</a></li>
                            <li><a href="#">1586</a></li>
                        </ul>
                    </div>
                    <div class="pull-left"><a href="#" class="prevnext last"><i class="fa fa-angle-right"></i></a></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-1 col-xs-3 col-sm-2 logo "><a href="#"><img src="images/logo.jpg" alt=""  /></a></div>
                <div class="col-lg-8 col-xs-9 col-sm-5 ">Copyrights 2020, onluyendaihoc.com</div>
                <div class="col-lg-3 col-xs-12 col-sm-5 sociconcent">
                    <ul class="socialicons">
                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-cloud"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- get jQuery from the google apis -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>


<!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
<script type="text/javascript">

    var revapi;

    jQuery(document).ready(function() {
        "use strict";
        revapi = jQuery('.tp-banner').revolution(
            {
                delay: 15000,
                startwidth: 1200,
                startheight: 278,
                hideThumbs: 10,
                fullWidth: "on"
            });

    });	//ready


    function addComment() {
        let content = $('#reply').val();
        let topicId = <?php echo $a = $_GET["id"]?>;
        console.log(content, topicId)
        $.ajax({
            url: 'Process.php',
            method: "POST",
            data: {addTopicComment: 1, topic_id: topicId, author_id: 2, content: content},
            success: (response) => {
                console.log(response)
            }
        })
    }
</script>

<!-- END REVOLUTION SLIDER -->
</body>
</html>