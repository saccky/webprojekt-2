<?php
    session_start();
    require 'connection-header.php';
    
    $eventcounter = 0; //Teller events printet
    $articlecounter = 0; //Teller artikkler printet
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

        <?php
        foreach ($events2 as $event) 
        {   
            require 'article.php';
            echo "<br>";
            $articlecounter++;
        } 
        if($articlecounter == 0)
        {
            echo "Beklager! Vi fant ingen artikkler med $getsearch!";
        }?>

        <br>
        <hr>

        <?php
        foreach ($events as $event) 
        {
            require 'event.php';
            echo "<br>";
            $eventcounter++;
        } 
        if($eventcounter == 0)
        {
            echo "Beklager! Vi fant ingen hendelser med $getsearch!";
        }?>
    </div>

<?php
    require 'footer.php';
?>