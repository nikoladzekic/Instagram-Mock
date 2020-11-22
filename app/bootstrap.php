<?php

//Load Config
require_once 'config/config.php';
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';
//Autoload Core Libraries(Automatsko ucitavanje, obavezno fajl nazvati kako smo nazvali i klasu)

spl_autoload_register(function($className){
    require_once 'libraries/'.$className.'.php';
});
?>