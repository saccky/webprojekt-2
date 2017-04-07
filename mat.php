<?php
    require 'connection-event.php';
    require 'header.php';

    /* Kode for spesefik spørring etter events med tag "kultur" (Ikke CAPS-sensetiv) */
    $statement = $connection->prepare('SELECT * FROM events WHERE tag = "mat" ORDER BY id DESC LIMIT 10 ');

    /* 
    <!--- connection-event-footer.php foreslått start ---> 
    <?php */
    $statement->execute();

    $events = [];

    while($row = $statement->fetch(PDO::FETCH_ASSOC)) 
    {
	   $events[] = $row;
    } 
    /* connection-event-footer.php slutt */

?>

    <h1>MAT</h1>
    <!--- Printer alle events med tag = kultur --->
    <?php 
        foreach ($events as $event) 
        {  
            require 'event.php';
        ?>
            <hr>
            <br>
        <?php  } ?>
<?php
    require 'footer.php';
?>