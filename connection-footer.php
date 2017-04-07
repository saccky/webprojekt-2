<?php

$statement->execute();
$events = [];

while($row = $statement->fetch(PDO::FETCH_ASSOC)) 
{
    $events[] = $row;
}  