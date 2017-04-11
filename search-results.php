<?php
    require 'connection-header.php';
    //Select * from articles/events where id/tag =/like int/enum
    $statement = $connection->prepare('SELECT * FROM events WHERE id LIKE ' .$_GET['search']);
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