<?php
    require 'connection-header.php';

    if(empty($_POST["new-title"]) || empty($_POST["new-body"]) || empty($_POST["new-author"])) //Hvis tittel, body, eller forfatter ikke er fylt ut, send bruker tilbake
    {
        header('Location: javascript://history.go(-1)');
        exit;
    }

    //id, article-title, article-datetime, article-body, article-image-path, article-author, article-author-link, article-link, article-link-name, article-event-fk
    $statement = $connection->prepare('INSERT INTO articles 
    VALUES (NULL, 
    "'.$_POST['new-title'].'",
    NULL,
    "'.$_POST['new-body'].'",
    "'.$_POST['new-image-path'].'",
    "'.$_POST['new-author'].'", 
    "'.$_POST['new-author-link'].'", 
    "'.$_POST['new-link'].'", 
    "'.$_POST['new-link-name'].'",
    "'.$_POST['new-event-link'].'")');
    
    require 'connection-footer.php';

    header('Location: index.php');
    exit;