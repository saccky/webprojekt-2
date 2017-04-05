<?php

$port = 8889;
$username = 'root';
$password = 'root';
$name = 'test';

    $connection = new PDO("mysql:host=localhost;dbname={$name};port={$port}", $username, $password);

    $statement = $connection->prepare('SELECT * FROM articles');
    $statement->execute();

    $arts = [];

    while($row = $statement->fetch(PDO::FETCH_ASSOC)) 
    {
	   $articles[] = $row;
    }  
