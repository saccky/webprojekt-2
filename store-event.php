<?php
require 'connection-header.php';

if(empty($_POST["new-title"]) || empty($_POST["new-where"]) || empty($_POST["new-datetime"]) || empty($_POST["new-body"])) //Hvis tittel, hvor, når, eller body ikke er fylt ut, send bruker tilbake
{
    header('Location: javascript://history.go(-1)');
    exit;
}

//id, event-title, event-where, event-datetime, event-where-link, event-image-path, event-body, tag 
$statement = $connection->prepare('INSERT INTO events 
VALUES (NULL, 
"'.$_POST['new-title'].'",
"'.$_POST['new-where'].'",
"'.$_POST['new-datetime'].'",
"'.$_POST['new-where-link'].'", 
"'.$_POST['new-image-path'].'", 
"'.$_POST['new-body'].'", 
"'.$_POST['new-tag'].'")');

require 'connection-footer.php';
header('Location: '.$_POST['new-tag'].'.php');
exit;