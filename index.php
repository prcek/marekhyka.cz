<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marek Hyka CZ test 1</title>

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="bootstrap.test.css" rel="stylesheet">

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
	$pages = array("news", "profile", "extra");	
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
	<img src="imgs/hyka_logo_tr.png" class="img-responsive" alt="Responsive image">
	</div>
    </div>

    <div class="row">
        <div class="navbar navbar-inverse">
            <ul class="nav navbar-nav nav-justified">
                <li class="<?php active("news") ?>"><a href="?q=news" class="">Novinky</a> </li>
                <li class="<?php active("profile") ?>"><a href="?q=profile" class="">Profil</a></li>
                <li><a href="#" class="">Akrobatický&nbsp;stroj</a></li>
                <li><a href="#" class="">Volná&nbsp;sestava</a></li>
                <li><a href="#" class="">Výsledky</a></li>
                <li><a href="#" class="">Kalendář</a></li>
                <li><a href="#" class="">Fotogalerie</a></li>
                <li><a href="#" class="">Video</a></li>
                <li><a href="#" class="">Partneři</a></li>
                <li><a href="#" class="">Kontakty</a></li>
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
                <div class="panel-body" contenteditable="false">Content here..</div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Facebook</div>
                <div class="panel-body">Content here..</div>
            </div>
        </div>
    </div>
    <div class="row">
	<div class="panel">
                <div class="panel-heading text-center">Partenři a sponzoři</div>
                <div class="panel-body text-center">
			<img src="imgs/bittner_logo_sm.png"  class="" alt="">
			<img src="//placehold.it/220x100" class=""> 
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
  </body>
</html>
