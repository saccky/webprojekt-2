<?php
    require 'connection-header.php';
    $statement = $connection->prepare('SELECT * FROM events WHERE id =' .$_GET['id']);
    require 'connection-footer.php';
    require 'header.php';
?>

<h1> Viser hendelser tilknyttet artikkel "<?= $event['id'] ?>" </h1> <!--- Virker ikke --->

<?php
    foreach ($events as $event) 
    {  
        require 'event.php';
    }

    require 'footer.php';
?>