<?php
    session_start();
    require 'connection-header.php';
    $getsearch = $_GET['search'];

    $statement = $connection->prepare('SELECT * FROM articles 
    WHERE id = "'.$getsearch.'" 
    OR article_title LIKE "%'.$getsearch.'%"  
    OR article_author LIKE "%'.$getsearch.'%" 
    ORDER BY id DESC');
    //order by body, date, link_name?

    $statement2 = $connection->prepare('SELECT * FROM events 
    WHERE id = "'.$getsearch.'" 
    OR event_title LIKE "%'.$getsearch.'%" 
    OR event_where LIKE "%'.$getsearch.'%" 
    OR tag LIKE "%'.$getsearch.'%" 
    ORDER BY ID DESC');
    //order by date, body?

    $statement3 = $connection->prepare('SELECT * FROM employees
    WHERE id = "'.$getsearch.'" 
    OR employee_name LIKE "%'.$getsearch.'%"  
    OR employee_email LIKE "%'.$getsearch.'%" 
    OR employee_info LIKE "%'.$getsearch.'%"');

    require 'connection-footer.php';
    require 'connection-footer-2.php';
    $statement3->execute();
    $events3 = [];

    while($row3 = $statement3->fetch(PDO::FETCH_ASSOC)) 
    {
        $events3[] = $row3;
    } 

    require 'header.php';
?>

<div class="wrap">
    <div class="box">
        <h1> Viser resultater for <?= $getsearch ?> </h1>

        <?php
        foreach ($events as $event) 
        {   
            require 'article.php';
            echo "<br>";
            $articlecounter++;
        } 
        if($articlecounter == 0) //teller antal artikler, hvis ingen funnet, print beklager..
        {
            echo "Beklager! Vi fant ingen artikkler med $getsearch!";
        }?>

        <br>
        <hr>

        <?php
        foreach ($events2 as $event) 
        {
            require 'event.php';
            echo "<br>";
            $eventcounter++;
        } 
        if($eventcounter == 0)
        {
            echo "Beklager! Vi fant ingen hendelser med $getsearch!";
        }?>

        <br>
        <hr>

        <?php
        foreach ($events3 as $event) 
        {
            require 'employee.php';
            echo "<br>";
            $employeecounter++;
        } 
        if($employeecounter == 0)
        {
            echo "Beklager! Vi fant ingen ansatte med $getsearch!";
        }?>
    </div>
</div>

<?php
    require 'footer.php';
?>