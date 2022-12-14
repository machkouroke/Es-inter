<?php

/**
* ouvre la page d'envoi d'un message
*/

public static function sendMessage(): void
{
$sendMessage = function () {
$title = 'Envoyer un message';
$selectedUser = [];
if (isset($_POST['user'])) {
foreach ($_POST['user'] as $user) {
$selectedUser[] = $user;
}
$selectedUser = implode(';', $selectedUser);
MenuController::sendMessagePage($selectedUser);
return;
}
MenuController::sendMessagePage();
};
$sendMessage();
}

/**
* transfert le message
*/
public static function transferMessage(): void
{

$sendMessage = function () {

$isAllFieldsPresent = ((isset($_POST["destinataire"]) && !empty($_POST["destinataire"]))
&& (isset($_POST["object"]) && !empty($_POST['object']))
&& (isset($_POST['message']) && !empty($_POST['message'])));
if ($isAllFieldsPresent) {

$dest = explode(";", $_POST["destinataire"]);
$subject = $_POST["object"];
$message = $_POST["message"];
$headers = "From: " . "machkour@LOPStudio.com";
foreach ($dest as $to) {
if (!mail($to, $subject, $message, $headers)) {
$_SESSION['error'] = "Une erreur est survenue lors de l'envoi du message";
header("Location:index.php?action=sendMessage&error");
return;

}
}
} else {

$query = ['action' => 'sendMessage',
'error' => "Veuillez saisir tous les champs pour l'envoi",
'selectedUser' => $_POST['destinataire']];
header("Location:indexindex.php?" . http_build_query($query));
return;

}


$query = ['action' => 'listingStudents',
'sucess' => 'Le message a bien été envoyé',
'page' => '1'];
header("Location:indexindex.php?" . http_build_query($query));
};
AuthenticationController::loginRequired($sendMessage)();
}

