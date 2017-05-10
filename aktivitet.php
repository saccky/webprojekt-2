<?php
    require 'connection-header.php';
    $aktivitetcounter = 0;
    // Kode for spesefik spørring etter events med tag "kultur" (Ikke CAPS-sensetiv)
    $statement = $connection->prepare('SELECT * FROM events WHERE tag = "aktivitet" ORDER BY id DESC LIMIT 10');
    require 'connection-footer.php';
    require 'header.php';
?>

<div class="wrap">
    <div class="box">
        <h1>AKTIVITET</h1>
        <?php 
        foreach ($events as $event) 
        {  
            require 'event.php';
            echo "<br>";
            $aktivitetcounter++;
        }
        if($aktivitetcounter == 0)
        {
            echo "Beklager! Vi fant ingen hendelser!";
        } ?>
    </div>    
</div>  

<?php
    require 'footer.php';
?>