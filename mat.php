<?php
    require 'connection-header.php';
    // Kode for spesefik spørring etter events med tag "mat" (Ikke CAPS-sensetiv)
    $statement = $connection->prepare('SELECT * FROM events WHERE tag = "mat" ORDER BY id DESC LIMIT 10');
    require 'connection-footer.php';
    require 'header.php';
?>

<div class="wrap">
    <div class="box">

        <h1>MAT</h1>
        <?php 
            foreach ($events as $event) 
            {  
                require 'event.php';
                echo "<br>";
            } ?>
    </div>
</div>

<?php
    require 'footer.php';
?>