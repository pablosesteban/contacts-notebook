<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../application/configuration/config.php';



require_once CONTROLLERS . '/RouteController.php';



//$contactModel = new ContactModel();
//echo $contactModel->insertContact(new Contact("Nacho", "Bagues Riaño", "C/ Santa Ana N4 3C", "646577783", "nacho@gmail.com", "nacho_img", 0)), "<br />";
//echo $contactModel->insertContact(new Contact("Luis", "Cuervo Menendez", "C/ del Prado N4 1dcha", "625782332", "luis@gmail.com", "luis_img", 10)), "<br />";
//echo $contactModel->insertContact(new Contact("Raul", "Menendez Vilches", "C/ Luis Treillard N3 6C", "663986211", "raul@gmail.com", "raul_img", 1)), "<br />";
//print_r($contactModel->getContacts());

$routeController = new RouteController();
$routeController->manageRoute();

?>
