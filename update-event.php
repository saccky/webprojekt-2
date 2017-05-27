<?php
require 'connection-header.php';
$eventid = $_POST['edit-event-id'];

if(empty($_POST["edit-title"]) || empty($_POST["edit-where"]) || empty($_POST["edit-datetime"]) || empty($_POST["edit-body"])) //Hvis tittel, hvor, når, eller body ikke er fylt ut, send bruker tilbake
{
    header('Location: edit-event.php?id='.$eventid);
    exit;
}

//id, event-title, event-where, event-where-link, event-image-path, event-body, tag 
$statement = $connection->prepare('UPDATE events SET
event_title = "'.$_POST['edit-title'].'", 
event_where = "'.$_POST['edit-where'].'",
event_where_link = "'.$_POST['edit-where-link'].'",
event_datetime = "'.$_POST['edit-datetime'].'", 
event_image_path = "'.$_POST['edit-image-path'].'", 
event_body = "'.$_POST['edit-body'].'", 
tag = "'.$_POST['edit-tag'].'"
WHERE id = "'.$eventid.'"');

require 'connection-footer.php';
header('Location: index.php');
//header('Location: '.$_POST['edit-tag'].'.php'); //Feil i server
exit;