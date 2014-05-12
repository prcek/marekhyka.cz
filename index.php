<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marek Hyka CZ  test</title>


    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
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
    div#page {
        background-color: rgba(255,255,255,1);
    }


    .gal > a > img {
        border: 2px solid #eeeeff;
    }

    .gal > a > img:hover {
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
  </head>
  <body>

<!--
<?php 


    $langs = array("cs","en");
	$pages = array("news", "profile", "extra", "sestava", "vysledky", "foto", "video", "partneri", "kontakty", "tiskova_1", "test");	
	


    if (isset($_GET["l"])) {
        $lang = $_GET["l"];
        if (!in_array($lang,$langs))  {
            $lang = $langs[0];
        }
    } else {
        $lang = $langs[0];
    }

    if (isset($_GET["q"])) {
		$page = $_GET["q"];
		if (!in_array($page,$pages))  {
			$page = $pages[0];
		}
	} else {
		$page = $pages[0];
	}

    echo "active lang is \"".$lang."\"";
    echo "active page is \"".$page."\"";
	function active($p) {
		global $page;
		if ($p == $page) {
			echo "active";
		}
	}

    function active_lang($l) {
        global $lang;
        if ($l == $lang) {
            echo "active";
        }
    }

    function is_lang($l) {
        global $lang;
        return ($l == $lang);
    }

    function to_lang() {
        global $lang;
        global $langs;
        $lang_index = array_search($lang,$langs);
        echo func_get_arg($lang_index);
    }

    function href_page($p) {
        global $lang;
        echo "?q=".$p."&l=".$lang;
    
    }

    function href_lang($l) {
        global $page;
        echo "?q=".$page."&l=".$l;
    }

    function btn_link($href,$text) {
        echo "<a href=\"".$href."\" class=\"btn btn-primary btn-xs\">".$text." <i class=\"glyphicon glyphicon-arrow-right\"></i></a>";
    }
    function btn_blink($href,$text) {
        echo "<a href=\"".$href."\" class=\"btn btn-default btn-xs\"> <i class=\"glyphicon glyphicon-arrow-left\"></i> ".$text."</a>";
    }

?>
-->
 


<div class="container">

<div class="container visible-lg visible-md" id="bgtest">
	<div class="row">
            <div class="col-md-offset-6 col-md-5">
                <img src="imgs/extra_2_sm_tr.png" class="img-responsive" alt="Responsive image">
            </div>
	</div>
</div>


    <div class="row">
        <div class="col-md-6">
            <a href=".">
	           <img src="imgs/hyka_logo_tr.png" class="img-responsive" alt="Responsive image">
            </a>
        </div>

        <div class="pull-right">

                    <?php if (is_lang('cs')) { ?>
                        <a href="<?php href_lang('cs'); ?>"><img class="active_flag" src="imgs/flag_cz.png"></a>
                        <a href="<?php href_lang('en'); ?>"><img class="flag" src="imgs/flag_gb.png"></a>
                    <?php } else { ?>
                        <a href="<?php href_lang('cs'); ?>"><img class="flag" src="imgs/flag_cz.png"></a>
                        <a href="<?php href_lang('en'); ?>"><img class="active_flag" src="imgs/flag_gb.png"></a>
                    <?php } ?>

        </div>
      
    </div>


    <div class="row">
        <div class="navbar navbar-inverse">
            <ul class="nav navbar-nav nav-justified">
                <li class="<?php active("news"); ?>"><a href="<?php href_page('news'); ?>" class=""><?php to_lang("Novinky","News"); ?></a> </li>
                <li class="<?php active("profile"); ?>"><a href="<?php href_page('profile'); ?>" class=""><?php to_lang("Profil","Profile"); ?></a></li>
                <li class="<?php active("extra"); ?>"><a href="<?php href_page('extra'); ?>" class=""><?php to_lang("Letoun","Aircraft"); ?></a></li>
                <li class="<?php active("sestava"); ?>"><a href="<?php href_page('sestava'); ?>" class=""><?php to_lang("Volná&nbsp;sestava","Freestyle"); ?></a></li>
                <li class="<?php active("vysledky"); ?>"><a href="<?php href_page('vysledky'); ?>" class=""><?php to_lang("Výsledky","Results"); ?></a></li>
                <li class="<?php active("foto"); ?>"><a href="<?php href_page('foto'); ?>" class=""><?php to_lang("Fotogalerie","Photo"); ?></a></li>
                <li class="<?php active("video"); ?>"><a href="<?php href_page('video'); ?>" class=""><?php to_lang("Video","Video"); ?></a></li>
                <li class="<?php active("partneri"); ?>"><a href="<?php href_page('partneri'); ?>" class=""><?php to_lang("Partneři","Partners");?></a></li>
                <li class="<?php active("kontakty"); ?>"><a href="<?php href_page('kontakty'); ?>" class=""><?php to_lang("Kontakty","Contacts");?></a></li>
            </ul>
        </div>
	<div> </div>
    </div>
    <div class="row">
        <div class="col-md-9">
                <!-- include page "<?php echo $page; ?>" lang "<?php echo $lang; ?>" -->
                    <?php
                        if (file_exists($page.'.'.$lang.'.page')) {
                            include $page.'.'.$lang.'.page';      
                        } elseif (file_exists($page.'.page')) {
                            include $page.'.page';                            
                        } else {
                            echo 'missing page "'.$page.'" and lang "'.$lang.'"';
                        }

                    ?>
                <!-- end of include --> 
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading"><?php to_lang("Nejbližší akce","Upcoming events")?></div>
                <div class="panel-body">
                    <?php include 'akce.page'; ?>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Facebook</div>
                <div class="panel-body">
                    <?php include 'fb.page'; ?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
	    <div class="panel">
            <div class="panel-heading text-center"><?php to_lang("Partneři a sponzoři","Partners and sponsors"); ?></div>
            <div class="panel-body text-center">
                <a href="http://www.bittner-audio.com">
                    <img src="imgs/ba-logo.png"  class="">
                </a>
                <a href="http://www.sport-invest.cz/seznam-sportovcu/ostatni/hyka-marek">
                    <img src="imgs/sport_invest_logo2.png" class="">
                </a>
                <a href="http://www.woodcomp.cz">
                    <img src="imgs/logo_woodcomp.png" class="">
                </a>

            <!--
                <img src="//placehold.it/220x100" class=""> 
                <img src="imgs/boxer_logo_sm.png"  class="" alt="">
                <img src="//placehold.it/220x100" class=""> 
            -->
            </div>
        </div>
    </div>
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
