<?php
    require 'connection-header.php';
    $statement = $connection->prepare('SELECT * FROM events WHERE id =' .$_GET['id']);
    $statement2 = $connection->prepare('SELECT * FROM articles WHERE article_event_fk = ' .$_GET['id']);

    require 'connection-footer.php';
    //"Connection-footer2" start
    $statement2->execute();
    $events2 = [];
    while($row2 = $statement2->fetch(PDO::FETCH_ASSOC)) 
    {
        $events2[] = $row2;
    }

    require 'header.php';
?>

<div class="box">
    <?php
    foreach ($events2 as $event2) 
    { ?>
        <h1> Viser hendelser tilknyttet artikkel "<?= $event2['article_title'] ?>" </h1>
    <?php }

    foreach ($events as $event) 
    {
        require 'event.php';
    } ?>
    
</div>

<?php
        require 'footer.php';
?>