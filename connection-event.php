<?php
    require 'connection.php';
    
    $statement = $connection->prepare('SELECT * FROM events ORDER BY id DESC LIMIT 10');
    $statement->execute();
    //Order by desc for å hente sist innlagte events først, kan evt. legge til og order tags (MAT/AKTIVITET osv per side) by dato (kan også bruke carbon for ekstrapoeng)

    $events = [];

    while($row = $statement->fetch(PDO::FETCH_ASSOC)) 
    {
	   $events[] = $row;
    }  