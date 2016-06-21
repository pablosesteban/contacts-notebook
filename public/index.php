<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../application/configuration/config.php';

require_once CLASSES . '/Contact.php';

require_once MODELS . '/Model.php';
require_once MODELS . '/ContactModel.php';

$contact = new Contact("Pablo", "Santamarta Esteban", "C/ del Prado N20 1izda", "625341226", "test@gmail.com", "http://source.unsplash.com/");
echo $contact, "<br />";

$contactModel = new ContactModel();
echo $contactModel->insertContact($contact), "<br />";
echo $contactModel->searchContact($contact), "<br />";

?>
