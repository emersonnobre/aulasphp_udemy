<?php

// include
require "vendor/autoload.php";

// namespace
use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
);

Tpl::configure( $config );


// Add PathReplace plugin (necessary to load the CSS with path replace)
Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );


// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign( "title", "Teste de RainTPL" );

// assign an array

$tpl->assign( "noticia1", "Neymar gosta do Murilo!" );
$tpl->assign( "noticia2", "Avião com doses da vacina da Covid-19 bate em jumento que estava em pista de aeródromo da Bahia" );
$tpl->assign( "noticia3", "Neymar gosta do Murilo!" );

// draw the template
$tpl->draw( "index" );


?>