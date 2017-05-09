<?php
//Denne connection-headeren brukes for å koble siden til server og database.
//Eksempelet viser bruker: garale16_admin, passord: GA16AdminPassord, og databasenavn garale16_westguide. Endre disse tre variablene til ditt brukernavn, passord og databasenavn.
//OBS: ikke bruk personlig passord, lag nye

$host = 'tek.westerdals.no'; //Host, localhost for MAMP, tek.westerdals.no for server
$port = 3306; //Uendret
$username = 'garale16_admin'; //Brukernavn i cPanel 
$password = 'GA16AdminPassord'; //Passord for bruker i cPanel   
$name = 'garale16_westguide'; //[westerdals-brukernavnet]_[Databasenavn]

$connection = new PDO("mysql:host=$host;dbname={$name};port={$port}", $username, $password); //Uendret

//Evt scrubbing //MySQLi gjorde sidene veldig mye tregere, brukes ikke midlertidig
//$mysqlicon = mysqli_connect($host, $username, $password, $name);
//Senere, hvor f.eks $getsearch brukes
//$sansearch = mysqli_real_escape_string($connection, $getsearch);