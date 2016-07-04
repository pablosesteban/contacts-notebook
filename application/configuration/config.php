<?php
/*
 * CONSTANTS DEFINITIONS
 */

define ('HOME', $_SERVER['DOCUMENT_ROOT'] . "/..");
define ('APPLICATION', HOME . '/application');
define ('CLASSES', APPLICATION . '/classes');
define ('CONFIGURATION', APPLICATION . '/configuration');
define ('VIEWS', APPLICATION . '/views');
define ('LAYOUTS', VIEWS . '/layouts');
define ('CONTROLLERS', APPLICATION . '/controllers');
define ('MODELS', APPLICATION . '/models');


define ('PUBLICA', HOME . "/public");
define ('CSS', PUBLICA . '/css');
define ('IMAGES', PUBLICA . '/img');
define ('IMAGES_DATA', IMAGES . '/data');
define ('JAVASCRIPT', PUBLICA . '/js');


define ('URL_APPLICATION', 'http://' . $_SERVER['HTTP_HOST']);
define ('URL_CSS', URL_APPLICATION . '/css');
define ('URL_IMAGES', URL_APPLICATION . '/img');
define ('URL_IMAGES_DATA', URL_IMAGES . '/data');
define ('URL_JAVASCRIPT', URL_APPLICATION . '/js');

define ('HOST', 'localhost');
define ('USER', 'root');
define ('USER_SALT', "1qTR3");
define ('PASSWORD', 'Admin2020*');
define ('PASSWORD_SALT', "o4GE7");
define ('DATABASE', 'contacts_notebook');
define ('PORT', 3306);

?>