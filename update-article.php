<?php
require 'connection-header.php';
$articleid = $_POST['edit-article-id'];
date_default_timezone_set('Europe/Oslo'); //Setter tidssone
$date = date('Y-m-d H:i:s', time()); //Setter dato/tid til nå

$editeventlink = $_POST['edit-event-link'];

if(empty($_POST["edit-title"]) || empty($_POST["edit-body"]) || empty($_POST["edit-author"])) //Hvis tittel, body, eller forfatter ikke er fylt ut, send bruker tilbake
{
    header('Location: edit-article.php?id='.$articleid);
    exit;
}
if(empty($editeventlink))
{
    $editeventlink = "NULL"; //Endrer artikkel/event FK til "NULL" hvis ingen verdi ble satt
}

//id, article-title, article-datetime, article-body, article-image-path, article-author, article-author-link, article-link, article-link-name, article-event-fk
$statement = $connection->prepare('UPDATE articles SET
article_title = "'.$_POST['edit-title'].'",
article_datetime = "'.$date.'",
article_body = "'.$_POST['edit-body'].'",
article_image_path = "'.$_POST['edit-image-path'].'",
article_author = "'.$_POST['edit-author'].'", 
article_author_link = "'.$_POST['edit-author-link'].'", 
article_link = "'.$_POST['edit-link'].'", 
article_link_name = "'.$_POST['edit-link-name'].'",
article_event_fk = '.$editeventlink.'
WHERE id = "'.$articleid.'"');

require 'connection-footer.php';
header('Location: index.php');
exit;