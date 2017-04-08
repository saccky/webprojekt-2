<?php
    require 'connection-header.php';
    $statement = $connection->prepare('SELECT * FROM events WHERE id =' .$_GET['id']);
    require 'connection-footer.php';
    require 'header.php';
?>

<br>

<?php
    foreach ($events as $event) 
    {  
        require 'event.php';
    }

    require 'footer.php';
?>