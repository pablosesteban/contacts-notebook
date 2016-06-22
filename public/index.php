<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../application/configuration/config.php';

require_once CLASSES . '/Contact.php';

require_once MODELS . '/Model.php';
require_once MODELS . '/ContactModel.php';

$contact = new Contact("Mario", "Fernandez Garcia", "Av de Alemania N12 4dcha", "636772822", "test@gmail.com", "http://source.unsplash.com/", 6);
echo $contact, "<br />";

$contactModel = new ContactModel();
//echo $contactModel->insertContact($contact), "<br />";
//echo $contactModel->insertContact(new Contact("Pablo", "Santamarta Esteban", "C/ del Prado N20 1izda", "625341226", "test@gmail.com", "http://source.unsplash.com/")), "<br />";
//echo $contactModel->insertContact(new Contact("Pablo", "Santamarta Esteban", "C/ del Prado N20 1izda", "625341226", "test@gmail.com", "http://source.unsplash.com/")), "<br />";
//print_r($contactModel->getContacts());
//echo $contactModel->updateContact($contact);
print_r($contactModel->searchContact($contact));

?>
