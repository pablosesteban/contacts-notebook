<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../application/configuration/config.php';

require_once CONTROLLERS . '/RouteController.php';
require_once MODELS . '/ContactModel.php';
require_once CLASSES . '/Contact.php';

$routeController = new RouteController();
$routeController->manageRoute();

//$model = new ContactModel();
//$contact = new Contact();
//$contact->setId(9);
//print_r($model->searchContact($contact));

?>
