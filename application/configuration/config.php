<?php
/*
 * CONSTANTS DEFINITIONS
 */

define ('HOME', $_SERVER['DOCUMENT_ROOT']);
define ('APPLICATION', HOME . '/application');
define ('CONFIGURATION', APPLICATION . '/configuration');
define ('VIEWS', APPLICATION . '/views');
define ('LAYOUTS', VIEWS . '/layouts');
define ('CONTROLLERS', APPLICATION . '/controllers');
define ('MODELS', APPLICATION . '/models');


define ('PUBLICA', HOME);
define ('CSS', PUBLICA . '/css');
define ('IMAGES', PUBLICA . '/img');
define ('JAVASCRIPT', PUBLICA . '/js');


define ('URLAPPLICATION', 'http://' . $_SERVER['HTTP_HOST']);
define ('URLCSS', URLAPPLICATION . '/css');
define ('URLIMAGES', URLAPPLICATION . '/img');
define ('URLJAVASCRIPT', URLAPPLICATION . '/js');

?>
