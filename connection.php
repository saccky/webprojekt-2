<?php

$port = 8889;
$username = 'root';
$password = 'root';
$name = 'westguide';

    $connection = new PDO("mysql:host=localhost;dbname={$name};port={$port}", $username, $password);