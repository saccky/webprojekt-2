<?php
    require 'connection-header.php';
    $eventid = $_POST['edit-event-id'];

    //id, event-title, event-where, event-where-link, event-image-path, event-body, tag 
    $statement = $connection->prepare('UPDATE events SET
    event_title = "'.$_POST['edit-title'].'", 
    event_where = "'.$_POST['edit-where'].'", 
    event_where-link = "'.$_POST['edit-where-link'].'", 
    event_image-path = "'.$_POST['edit-image-path'].'", 
    event_body = "'.$_POST['edit-body'].'", 
    tag = "'.$_POST['edit-tag'].'"
    WHERE id = "'.$eventid.'"');
    
    require 'connection-footer.php';
 
    header('Location: index.php');
    exit;

/*
    event_title = "'.$_POST['edit-title'].'", 
    event_where = "'.$_POST['edit-where'].'", 
    event_where-link = "'.$_POST['edit-where-link'].'", 
    event_image-path = "'.$_POST['edit-image-path'].'", 
    event_body = "'.$_POST['edit-body'].'", 
    tag = "'.$_POST['edit-tag'].'"
*/ ?>