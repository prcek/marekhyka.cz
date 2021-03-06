<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marek Hyka CZ</title>


    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,900italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="bootstrap.test.css" rel="stylesheet">

    <link rel="stylesheet" href="css/blueimp-gallery.min.css">
    <!-- <link rel="stylesheet" href="css/bootstrap-image-gallery.css"> -->

   <style>
    .navbar-nav>li {
      float: none;
    }
    .navbar, .panel-heading {
      xfont-family: 'Alegreya Sans SC', sans-serif;
      xfont-style:  italic;
      font-weight: 800;
      font-size: 18px;
    }

    .navbar-inverse .navbar-nav > .active > a {
        color: white;
    }

    .panel-default {
        border: none;
    }

    .panel-default > .panel-heading {
       background-color: white;
       background-image: url('imgs/bg_plane5.png');
       background-repeat: no-repeat;
       background-position: right center;
       padding-left: 10px;
       color: black;
       border-bottom: 2px solid #17438a;
       border-radius: 3px;
    }
 
    .panel-heading {
	   padding: 5px 10px;
       font-size: 15px;
       text-transform:uppercase;
    }

    div#bgtest {
	position:absolute;
	width: 100%;
	left:0px;
	top: 30px;
        z-index: -10;
    }

    div#lang {
        position:absolute;
        z-index: 10;
        padding-right: 50px;
    }


    div#page {
        background-color: rgba(255,255,255,1);
    }

    body {
        background-color: rgba(200,200,200,1);
    }


    .gal > a > img {
        border: 2px solid #eeeeff;
    }

    .gal > a > img:hover {
        border: 2px solid #17438a;
        border-radius: 2px;
    }
    .link > a > img {
        border: 2px solid #eeeeff;
    }

    .link > a > img:hover {
        border: 2px solid #17438a;
        border-radius: 2px;
    }

    img.flag {
        border-bottom: 1px solid #eeeeff;
        border-radius: 2px;
    }
 
    img.active_flag {
        border-bottom: 1px solid #17438a;
        border-radius: 2px;
    }
  
  </style>

  


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!--  MWS include; 
<?php 
        $site = '.*marekhyka.cz';
        $langs = array("cs","en");
        $pages = array("news", "profile", "sugo", "sestava", "vysledky", "foto", "video", "partneri", "kontakty", "tiskova_1", "test");    

        include_once('mws.php');

?>
end of MWS include -->

    <?php 
        if (!$debug) {
            include_once("ga_track.php");       
            include_once("fb_track.php");
        }
    ?>





  </head>
  <body>







<div class="container">

<div class="container visible-lg visible-md" id="bgtest">
	<div class="row">
            <div class="col-md-offset-6 col-md-5">
               <!-- <img src="imgs/extra_2_sm_tr.png" class="img-responsive" alt="extra">  -->
               <!-- <img src="imgs/extra_new_top.jpg" class="img-responsive" alt="sugo">  -->
            </div>
	</div>
</div>

<div class="container visible-lg visible-md" id="lang">
    <div class="row">
                <div class="pull-right">

                    <?php if (is_lang('cs')) { ?>
                        <a href="<?php href_lang('cs'); ?>"><img class="active_flag" src="imgs/flag_cz.png" alt="lang flag cz"></a>
                        <a href="<?php href_lang('en'); ?>"><img class="flag" src="imgs/flag_gb.png" alt="lang flag en"></a>
                    <?php } else { ?>
                        <a href="<?php href_lang('cs'); ?>"><img class="flag" src="imgs/flag_cz.png" alt="lang flag cz"></a>
                        <a href="<?php href_lang('en'); ?>"><img class="active_flag" src="imgs/flag_gb.png" alt="lang flag en"></a>
                    <?php } ?>

        </div>
    </div>
</div>



    <div class="row">

        <div class="col-md-12">
            <a href=".">
               <img src="imgs/extra_new_top.jpg" class="img-responsive" alt="hyka logo">
            </a>
        </div>

  
<!--
        <div class="col-md-5">
            <a href=".">
	           <img src="imgs/hyka_logo_tr.png" class="img-responsive" alt="hyka logo">
            </a>
        </div>

        <div class="pull-right">

                    <?php if (is_lang('cs')) { ?>
                        <a href="<?php href_lang('cs'); ?>"><img class="active_flag" src="imgs/flag_cz.png" alt="lang flag cz"></a>
                        <a href="<?php href_lang('en'); ?>"><img class="flag" src="imgs/flag_gb.png" alt="lang flag en"></a>
                    <?php } else { ?>
                        <a href="<?php href_lang('cs'); ?>"><img class="flag" src="imgs/flag_cz.png" alt="lang flag cz"></a>
                        <a href="<?php href_lang('en'); ?>"><img class="active_flag" src="imgs/flag_gb.png" alt="lang flag en"></a>
                    <?php } ?>

        </div>
-->
      
    </div>


    <div class="row">
        <div class="col-md-12">

        <div class="navbar navbar-inverse">
            <ul class="nav navbar-nav nav-justified">
                <li class="<?php active("news"); ?>"><a href="<?php href_page('news'); ?>" class=""><?php to_lang("Novinky","News"); ?></a> </li>
                <li class="<?php active("profile"); ?>"><a href="<?php href_page('profile'); ?>" class=""><?php to_lang("Profil","Profile"); ?></a></li>
                <li class="<?php active("sugo"); ?>"><a href="<?php href_page('sugo'); ?>" class=""><?php to_lang("Letoun","Aircraft"); ?></a></li>
                <li class="<?php active("sestava"); ?>"><a href="<?php href_page('sestava'); ?>" class=""><?php to_lang("Volná&nbsp;sestava","Freestyle"); ?></a></li>
                <li class="<?php active("vysledky"); ?>"><a href="<?php href_page('vysledky'); ?>" class=""><?php to_lang("Výsledky","Results"); ?></a></li>
                <li class="<?php active("foto"); ?>"><a href="<?php href_page('foto'); ?>" class=""><?php to_lang("Fotogalerie","Photo"); ?></a></li>
                <li class="<?php active("video"); ?>"><a href="<?php href_page('video'); ?>" class=""><?php to_lang("Video","Video"); ?></a></li>
                <li class="<?php active("partneri"); ?>"><a href="<?php href_page('partneri'); ?>" class=""><?php to_lang("Partneři","Partners");?></a></li>
                <li class="<?php active("kontakty"); ?>"><a href="<?php href_page('kontakty'); ?>" class=""><?php to_lang("Kontakty","Contacts");?></a></li>
            </ul>
        </div>
        
        </div>
	<div> </div>
    </div>
    <div class="row">
        <div class="col-md-9">
                <!-- include page "<?php echo $page; ?>" lang "<?php echo $lang; ?>" -->
                    <?php
                        include_page();
                    ?>
                <!-- end of include --> 
        </div>
        <div class="col-md-3">

            <div class="panel panel-default">
                <div class="panel-heading"><?php to_lang("Partneři a sponzoři","Partners and sponsors")?></div>
                <div class="panel-body">

		<a href="http://mogul.cz">
                    <img src="imgs/logo_mogul.png" class="img-responsive center-block" alt="mogul logo">
		</a>

		<a href="http://www.hamiltonwatch.com">
                    <img src="imgs/logo_hamilton.png" class="img-responsive center-block" alt="hamilton logo">
		</a>
 
		<a href="http://www.k2t.cz">
                    <img src="imgs/logo_k2t.png" class="img-responsive center-block" alt="k2t logo">
		</a>

		<a href="http://www.xtremeair.com">
                    <img src="imgs/logo_xtremeair.png" class="img-responsive center-block" alt="xtremeair logo">
                </a>

		<a href="http://cirrus.cz">
                    <img src="imgs/logo_cirrus.png" class="img-responsive center-block" alt="cirrus logo">
                </a>

		<a href="http://smartwings.com">
                    <img src="imgs/logo_smartwings.png" class="img-responsive center-block" alt="smartwings logo">
                </a>

		<a href="https://www.kr-stredocesky.cz">
                    <img src="imgs/logo_stredoceskykraj.png" class="img-responsive center-block" alt="stredocesky kraj logo">
                </a>

		<a href="http://goldfren.cz">
                    <img src="imgs/logo_goldfren.png" class="img-responsive center-block" alt="goldfren logo">
                </a>

		<a href="http://www.unikov.cz">
                    <img src="imgs/logo_unikov.png" class="img-responsive center-block" alt="unikov logo">
                </a>

<!--
                <a href="http://www.airfaceone.cz/">
                    <img src="imgs/logo_afo.png" class="img-responsive center-block" alt="airfaceone logo">
                </a>
   
                <a href="http://www.aeroengine.cz/">
                    <img src="imgs/logo_aeroengine.png" class="img-responsive center-block" alt="aeroengine logo">
                </a>

                <a href="http://www.jihostroj.com/">
                    <img src="imgs/logo_jihostroj.png" class="img-responsive center-block" alt="jihostroj logo">
                </a>
                
                <a href="http://www.gestivbohemia.com">
                    <img src="imgs/logo_gestiv.png" class="img-responsive center-block" alt="gestiv logo">
                </a>
               
                <a href="http://www.zlinaero.com">
                    <img src="imgs/logo_savage.png" class="img-responsive center-block" alt="savage logo">
                </a>
-->


                </div>
            </div>
            
               
            <div class="panel panel-default">
                <div class="panel-heading"><?php to_lang("Nejbližší akce","Upcoming events")?></div>
                <div class="panel-body">
                    <?php include 'akce.page'; ?>
                </div>
            </div>
           <!--   
           <iframe style="border: 0;" scrolling="no" width="250" height="376" src="https://www.hithit.com/cs/project/1221/cs/airfaceone/embedded/teaser"></iframe>
            -->

            <div class="panel panel-default">
                <div class="panel-heading">Facebook</div>
                <div class="panel-body">
                    <?php include 'fb.page'; ?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!--
    <div class="row">
	    <div class="panel">
            <div class="panel-heading text-center"><?php to_lang("Partneři a sponzoři","Partners and sponsors"); ?></div>
            <div class="panel-body text-center">

            
                <a href="http://www.airfaceone.cz/">
                    <img src="imgs/logo_afo.png" class="" alt="airfaceone logo">
                </a>
   
                <a href="http://www.aeroengine.cz/">
                    <img src="imgs/logo_aeroengine.png" class="" alt="aeroengine logo">
                </a>

                <a href="http://www.jihostroj.com/">
                    <img src="imgs/logo_jihostroj.png" class="" alt="jihostroj logo">
                </a>

            </div>
        </div>
    </div>
    -->
</div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>


    <div id="blueimp-image" class="blueimp-gallery blueimp-gallery-controls">
        <div class="slides"></div>
        <a class="close">×</a>
    </div>

    <script src="js/blueimp-gallery.min.js"></script>
    <script>
        $("div[id^='blueimp-gallery-carousel-']").each( function function_name (index) {
            var links = this.id.replace("blueimp-gallery-carousel-","links-gallery-carousel-");

            blueimp.Gallery( 
                document.getElementById(links).getElementsByTagName('a'), {
                    container: '#'+this.id,
                    carousel: true,
                    startSlideshow: false
                });


        } );
    </script>

    
  </body>
</html>
