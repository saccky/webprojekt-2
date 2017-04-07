<?php
    require 'connection.php';
    
    $statement = $connection->prepare('SELECT * FROM articles ORDER BY id DESC LIMIT 10');
    $statement->execute();
    //Order by desc for å hente sist innlagte artikler først, kan evt. legge til og order by dato (kan også bruke carbon for ekstrapoeng)

    $arts = [];

    while($row = $statement->fetch(PDO::FETCH_ASSOC)) 
    {
	   $articles[] = $row;
    }  