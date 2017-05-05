<?php

$host = 'localhost';
$port = 8889;
$username = 'root';
$password = 'root';
$name = 'westguide';

$connection = new PDO("mysql:host=$host;dbname={$name};port={$port}", $username, $password);

//Evt scrubbing //MySQLi gjorde sidene veldig mye tregere, brukes ikke midlertidig
//$mysqlicon = mysqli_connect($host, $username, $password, $name);
//Senere, hvor f.eks $getsearch brukes
//$sansearch = mysqli_real_escape_string($connection, $getsearch);