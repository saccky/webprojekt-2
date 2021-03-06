<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="normalize.css"/>
    <link rel="stylesheet" href="main.css"/>
    <link rel="icon" href="logo1.png"/>
    <title>WestGuide</title>
</head>

<body>
    <!--- a href="user.php"><div id="hidden-link"></div></a --->
        <header class="main-header">
            <h1 class="name"><a href="index.php">WestGuide</a></h1>
            <!---  <a href="index.php">
                <img id="logo" src="./logoer/logo-klipt.png" width="400px">
            </a>  -->
            <div class="box">         
                <nav>
                    <ul>
                        <li>
                            <a href="index.php">hjem</a>
                        </li>
                        <li>
                            <a href="aktivitet.php">aktiviteter</a>
                            <ul class="drop-menu menu-#{i}">
                                <li>Museer</li>
                                <li>Parker</li>
                                <li>Barer</li>
                            </ul>
                        </li>
                        <li>
                            <a href="mat.php">mat</a>
                            <ul class="drop-menu menu-#{i}">
                                <li>Resturanter</li>
                                <li>Fast Food</li>
                                <li>Kaf&eacute;er</li>
                            </ul>
                        </li>
                        <li>
                            <a href="kultur.php">kultur</a>
                            <ul class="drop-menu menu-#{i}">
                                <li>Guider</li>
                                <li>Eventer</li>
                                <li>Severdigheter</li>
                            </ul>
                        </li>
                        <li>
                            <a href="skole.php">skole</a>
                            <ul class="drop-menu menu-#{i}">
                                <li>Fjerdingen</li>
                                <li>Vulkan</li>
                                <li>Auditorium</li>
                            </ul>
                        </li>
                        <li class="search">
                            <!--- Søkefunksjon start --->
                            <form action="search-results.php" method="GET">
                                <input id="search-field" name="search" type="text" placeholder="Søk etter...">
                                <input id="search-button" type="submit" value="Søk">
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="wrap">
            <div class="box">
                <br>