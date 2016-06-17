<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../application/configuration/config.php';

spl_autoload_register(function ($class_name) {
    require_once CLASSES . "/$class_name.php";
});

$contact = new Contact("Pablo", "Santamarta Esteban", "C/ del Prado N20 1izda", "625341226", "test@gmail.com", "http://source.unsplash.com/");
echo $contact;
?>
