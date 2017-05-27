<?php
require 'connection-header.php';
//Sletter fremmednøkkel i articles så man kan slette relevant event
$statement = $connection->prepare('UPDATE articles SET
article_event_fk = NULL 
WHERE article_event_fk =' .$_GET['id']); 
$statement2 = $connection->prepare('DELETE FROM events WHERE id =' .$_GET['id']);
require 'connection-footer.php';
require 'connection-footer-2.php';

header('Location: index.php');
exit;