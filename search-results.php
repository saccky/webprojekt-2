<?php
    session_start();
    require 'connection-header.php';
    //Select * from events where tag like %getsearch%(enum med wildcard) or id like int
    //Eksempel viser direkte get fra url (tag, som er forskjellig fra get id)
    //$statement = $connection->prepare('SELECT * FROM events WHERE tag LIKE "'.$_GET['search'].'"'); 
    $getsearch = $_GET['search'];   
    $statement = $connection->prepare('SELECT * FROM events WHERE tag LIKE "%'.$getsearch.'%" OR id LIKE "'.$getsearch.'"');
    $statement2 = $connection->prepare('SELECT * FROM articles WHERE id LIKE "'.$getsearch.'"');
    require 'connection-footer.php';
    //"Connection-footer2" start
    $statement2->execute();
    $events2 = [];
    while($row2 = $statement2->fetch(PDO::FETCH_ASSOC)) 
    {
        $events2[] = $row2;
    } 
    //"Connection-footer2" slutt

    require 'header.php';
?>

<h1> Viser tag/id resultater for: <?= $getsearch ?> </h1>

<?php
     if(isset($_SESSION['use']))
    {
        echo "Du er logget inn";
    }
    else
    { ?>
        <a href="testside.php">Trykk her for a logge inn</a>
    <?php } ?>

<br>
<hr>

<?php
    echo "Artikler: <br>"; //Kan gjøres i HTML, bare husk ? > (uten mellomrom) for å lukke php tag, og < ?php for å starte igjen
    foreach ($events2 as $event) 
    {   
        require 'article.php';
    }
    /*
    if($rows2 < 1) //Virker ikke :/
    {
        echo "Beklager, vi fant ingen artikler :/ <br>";
    }
    */
    
    echo "<br><br>Hendelser:";
    foreach ($events as $event) 
    {
        require 'event.php';
    }
    
    require 'footer.php';
?>