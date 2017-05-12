<?php
    require 'connection-header.php';
    $statement = $connection->prepare('SELECT * FROM events WHERE id =' .$_GET['id']);
    $statement2 = $connection->prepare('SELECT * FROM articles WHERE article_event_fk = ' .$_GET['id']);
    require 'connection-footer.php';
    require 'connection-footer-2.php';
    require 'header.php';

foreach ($events2 as $event) 
{ ?>
    <h1> Viser hendelser tilknyttet artikkel "<?= $event['article_title'] ?>" </h1>
<?php }

foreach ($events as $event) 
{
    require 'event.php';
} 
        
    require 'footer.php';
?>