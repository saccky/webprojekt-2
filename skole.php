<?php
require 'connection-header.php'; 
// Kode for spesefik spørring etter events med tag "Skole" (Ikke CAPS-sensetiv)
$statement = $connection->prepare('SELECT * FROM events WHERE tag = "SKOLE" ORDER BY id DESC LIMIT 10');
require 'connection-footer.php';
require 'header.php';
?>
    
<h1>SKOLE</h1>
<?php 
foreach ($events as $event) 
{  
    require 'event.php';
    echo "<br>";
    $skolecounter++;
}
if($skolecounter == 0)
{
    echo "Beklager! Vi fant ingen hendelser!";
}

require 'footer.php';
?>