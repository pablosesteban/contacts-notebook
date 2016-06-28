<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../application/configuration/config.php';

require_once CONTROLLERS . '/RouteController.php';

$routeController = new RouteController();
$routeController->manageRoute();

?>
