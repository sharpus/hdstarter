<?php

$page = (isset($_GET['p'])) ? trim($_GET['p']) : 'home';

switch ($page) {
    case 'kontakt':
	$inc = 'kontakt';
	$title = 'Kontakt';
	break;
    case 'oferta':
	$inc = 'oferta';
	$title = 'Oferta';
	break;
    case 'o-firmie':
	$inc = 'o-firmie';
	$title = 'O firmie';
	break;
    case 'home':
	$inc = 'home';
	$title = '';
	break;
    default:
	$inc = '404';
	break;
}
?>