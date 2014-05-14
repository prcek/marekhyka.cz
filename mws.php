<?php
    if (preg_match('/^'.$site.'$/', $_SERVER['SERVER_NAME'])) {
        echo "production site;\n";
        $debug = False;
    } else {
        echo "testing site;\n";
        $debug = True;
    }


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

    echo "active lang is \"".$lang."\";\n";
    echo "active page is \"".$page."\";\n";
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


    function include_page() {
    	global $page;
    	global $lang;

        if (file_exists($page.'.'.$lang.'.page')) {
            include $page.'.'.$lang.'.page';      
        } elseif (file_exists($page.'.page')) {
            include $page.'.page';                            
        } else {
            echo 'missing page "'.$page.'" and lang "'.$lang.'"';
        }
	}

?>
