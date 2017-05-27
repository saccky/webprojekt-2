<?php
require 'connection-header.php'; 
// Kode for spesefik spørring etter events med tag "kultur" (Ikke CAPS-sensetiv)
$statement = $connection->prepare('SELECT * FROM events WHERE tag = "aktivitet" ORDER BY id DESC LIMIT 10');
require 'connection-footer.php';
require 'header.php';
?>

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
} 

require 'footer.php';
?>