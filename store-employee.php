<?php
require 'connection-header.php';

if(empty($_POST["new-name"])) //Hvis tittel ikke er fylt ut, send bruker tilbake
{
    header('Location: javascript://history.go(-1)');
    exit;
}

//id, event-title, event-where, event-datetime, event-where-link, event-image-path, event-body, tag 
$statement = $connection->prepare('INSERT INTO employees 
VALUES (NULL, 
"'.$_POST['new-name'].'",
"'.$_POST['new-picture'].'",
"'.$_POST['new-email'].'",
"'.$_POST['new-info'].'")');

require 'connection-footer.php';
header('Location: user.php');
exit;