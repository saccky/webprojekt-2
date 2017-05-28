<?php
require 'connection-header.php';
// Kode for spesefik spørring etter events med tag "mat" (Ikke CAPS-sensetiv)
$statement = $connection->prepare('SELECT * FROM events WHERE tag = "mat" ORDER BY id DESC LIMIT 10');
require 'connection-footer.php';
require 'header.php';
?>

<h1>MAT</h1>
<div class="event-wrapper">
    <?php 
    foreach ($events as $event) 
    {  
        require 'event.php';
        echo "<br>";
        $matcounter++;
    }
    if($matcounter == 0)
    {
        echo "Beklager! Vi fant ingen hendelser!";
    } ?>
</div>

<?php 
require 'footer.php';
?>