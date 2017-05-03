<?php
    require 'connection-header.php';

/*
    $title = $_POST['title'];
    $where = $_POST['where'];
    $image-path = $_POST['image-path'];
    $body = $_POST['body'];
    $tag = $_POST['tag'];

    $statement = $connection->prepare('INSERT INTO events
    VALUES ("11", "Test-Tittel", "Test-Hvor", "Einstein.jpg", "Test-Body", "MAT")'); //("'.$title.'", "'.$where.'", "'.$image-path.'", "'.$body.'", "'.$tag.'")');
*/
    
    require 'connection-footer.php';

    
    //$event = new Event();
    $event->event-title = $_POST['title'];
    $event->event-where = $_POST['where'];
    $event->event-body = $_POST['body'];
    $event->event-image-path = $_POST['image-path'];
    $event->save();
    
    header('Location: index.php');
    exit;