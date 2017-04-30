<?php
    session_start();
    require 'connection-header.php';
    //Select * from events where tag like %getsearch%(enum med wildcard) or id like int
    //Eksempel viser direkte get fra url (tag, som er forskjellig fra get id)
    //$statement = $connection->prepare('SELECT * FROM events WHERE tag LIKE "'.$_GET['search'].'"'); 
    $getsearch = $_GET['search'];   
    $statement = $connection->prepare('SELECT * FROM events WHERE id LIKE "'.$getsearch.'" OR tag LIKE "%'.$getsearch.'%"');
    //UPDATE events SET event-title = replace(event-title, ' ', '') OR CONTAINS(event-title, "'.$getsearch.'") // Fjerner mellomrom mellom ord i event-title, som ser ut som det gjør det mulig å søke etter individuelle ord. Koder er ufulstendige, virker ikke, og fjerner mellomrommene permanent. Med mindre man lager et view eller noe.
    $statement2 = $connection->prepare('SELECT * FROM articles WHERE id LIKE "'.$getsearch.'"');
    require 'connection-footer.php';
    //Merk: det ble vurdert hvorvidt det var vits å ha connection-footer.php, og om det skulle bli laget en connection-ooter2.php, men det viser seg at nesten alle sidene bruker connection-footer.php, og bare denne (sålangt) bruker en andre connection-footer.
    //"Connection-footer2" start
    $statement2->execute();
    $events2 = [];
    while($row2 = $statement2->fetch(PDO::FETCH_ASSOC)) 
    {
        $events2[] = $row2;
    }
    require 'header.php';
?>

<h1> Viser tag/id resultater for: <?= $getsearch ?> </h1>

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
?>

<br>
<hr>

<?php
    
    echo "Hendelser: <br>";
    foreach ($events as $event) 
    {
        require 'event.php';
    }
?>

<br>
<hr>

<?php
    require 'footer.php';
?>