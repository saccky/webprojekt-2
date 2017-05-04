<?php
    session_start();
    require 'connection-header.php';

    $getsearch = $_GET['search'];   
    $statement = $connection->prepare('SELECT * FROM events 
    WHERE id = "'.$getsearch.'" 
    OR event_title LIKE "%'.$getsearch.'%" 
    OR event_where LIKE "%'.$getsearch.'%" 
    OR tag LIKE "%'.$getsearch.'%" 
    ORDER BY ID DESC');
    //order by date, body?

    $statement2 = $connection->prepare('SELECT * FROM articles 
    WHERE id = "'.$getsearch.'" 
    OR article_title LIKE "%'.$getsearch.'%"  
    OR article_author LIKE "%'.$getsearch.'%" 
    ORDER BY id DESC');
    //order by body, date, link_name?
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
<div class="box">
    <h1> Viser tag/id resultater for: <?= $getsearch ?> </h1>

    <br>

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
?>
            <br>
<?php } ?>
        
</div>

    <?php
        require 'footer.php';
    ?>