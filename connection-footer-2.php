<?php

$statement2->execute();
$events2 = [];

while($row2 = $statement2->fetch(PDO::FETCH_ASSOC)) 
{
    $events2[] = $row2;
}  