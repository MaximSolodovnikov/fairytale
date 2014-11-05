<?php
$view = empty($_GET['view']) ? 'index' : $_GET['view'];
require_once "config.php";
require_once "fns.php";

$page_title = get_page_title($view);

switch($view) {
	case "index":
		
	break;
	
	case "gallery":
		
	break;
	
	case "price":
		
	break;
	
	case "programs":
		
	break;
}


require_once "view/layouts/site.html";