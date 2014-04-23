<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marek Hyka CZ</title>


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

    .panel-heading {
	padding: 5px 10px;
        font-size: 15px;
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
	$pages = array("news", "profile", "extra", "sestava", "vysledky", "foto", "video", "partneri", "kontakty", "tiskova_1", "test");	
	if (isset($_GET["q"])) {
		$page = $_GET["q"];
		if (!in_array($page,$pages))  {
			$page = $pages[0];
		}
	} else {
		$page = $pages[0];
	}
	echo "active page is \"".$page."\"";
	function active($p) {
		global $page;
		if ($p == $page) {
			echo "active";
		}
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
			<!-- <img src="//placehold.it/475x475" class=""> -->
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
    </div>

    <div class="row">
        <div class="navbar navbar-inverse">
            <ul class="nav navbar-nav nav-justified">
                <li class="<?php active("news") ?>"><a href="?q=news" class="">Novinky</a> </li>
                <li class="<?php active("profile") ?>"><a href="?q=profile" class="">Profil</a></li>
                <li class="<?php active("extra") ?>"><a href="?q=extra" class="">Akrobatický&nbsp;stroj</a></li>
                <li class="<?php active("sestava") ?>"><a href="?q=sestava" class="">Volná&nbsp;sestava</a></li>
                <li class="<?php active("vysledky") ?>"><a href="?q=vysledky" class="">Výsledky</a></li>
                <li class="<?php active("foto") ?>"><a href="?q=foto" class="">Fotogalerie</a></li>
                <li class="<?php active("video") ?>"><a href="?q=video" class="">Video</a></li>
                <li class="<?php active("partneri") ?>"><a href="?q=partneri" class="">Partneři</a></li>
                <li class="<?php active("kontakty") ?>"><a href="?q=kontakty" class="">Kontakty</a></li>
            </ul>
        </div>
	<div> </div>
    </div>
    <div class="row">
        <div class="col-md-9">
                <!-- include page "<?php echo $page; ?>" -->
                    <?php include $page.'.page'; ?>
                <!-- end of include --> 
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading" contenteditable="false">Nejbližší akce</div>
                <div class="panel-body" contenteditable="false">
                    <?php include 'akce.page'; ?>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Facebook</div>
                <div class="panel-body">Content here...</div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
	    <div class="panel">
            <div class="panel-heading text-center">Partenři a sponzoři</div>
            <div class="panel-body text-center">
                <img src="imgs/bittner_logo_sm.png"  class="" alt="">
                <img src="imgs/sport_invest_logo.png" class="">
                <img src="//placehold.it/220x100" class=""> 
                <img src="imgs/boxer_logo_sm.png"  class="" alt="">
                <img src="//placehold.it/220x100" class=""> 
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
