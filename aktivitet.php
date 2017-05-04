<?php
    require 'connection-header.php';
    /* Kode for spesefik spørring etter events med tag "kultur" (Ikke CAPS-sensetiv) */
    $statement = $connection->prepare('SELECT * FROM events WHERE tag = "aktivitet" ORDER BY id DESC LIMIT 10');
    //Order by desc for å hente sist innlagte events først, kan evt. legge til og order by dato (kan også bruke carbon for ekstrapoeng)
    require 'connection-footer.php';
    require 'header.php';
?>
<div class="box">

    <h1>AKTIVITET</h1>
    <!--- Printer alle events med tag = kultur --->
    <?php 
        foreach ($events as $event) 
        {  
            require 'event.php';
        ?>
            <hr>
            <br>
        <?php  } ?>
</div>    
    
<?php
    require 'footer.php';
?>