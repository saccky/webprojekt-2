<?php
    /*Just for your server-side code*/
    header('Content-Type: text/html; charset=ISO-8859-1');
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="normalize.css" / >
        <link rel="stylesheet" href="main.css" />
        <link rel="icon" href="logo1.png" />
        <title>WestGuide</title>
    </head>

    <body>
        <a href="user.php"><div id="hidden-link"></div></a>
        <!---div id="wrapper"--->
            <header class="main-header">

                <h1 class="name"><a href="index.php">WestGuide</a></h1>
            <!---    <a href="index.php">
                    <img id="logo" src="./logoer/logo-klipt.png" width="400px">
                </a>
                        -->
            
          
            <div class="box">         
                <nav>
                    <ul>
                        <li>
                            <!---a href="index.php">hjem</a---> <!--- Må linkes til siden, men å legge linken rundt teksten gjør bare teksten klikkbar, og å legge lingen rundt <li> ødelegger layout --->
                            <a href="index.php">hjem</a>
                        </li>
                        <li>
                            <a href="aktivitet.php">aktiviteter</a>
                            <ul class="drop-menu menu-#{i}">
                                <li>uno</li>
                                <li>dos</li>
                                <li>tres</li>
                                <li>cuatro</li>
                                <li>cinco</li>
                                <li>seis</li>
                            </ul>
                        </li>
                        <li>
                            <a href="mat.php">mat</a>
                            <ul class="drop-menu menu-#{i}">
                                <li>uno</li>
                                <li>dos</li>
                                <li>tres</li>
                                <li>cuatro</li>
                                <li>cinco</li>
                                <li>seis</li>
                            </ul>
                        </li>
                        <li>
                            <a href="kultur.php">kultur</a>
                            <ul class="drop-menu menu-#{i}">
                                <li>uno</li>
                                <li>dos</li>
                                <li>tres</li>
                                <li>cuatro</li>
                                <li>cinco</li>
                                <li>seis</li>
                            </ul>
                        </li>
                        <li>
                            <a href="skole.php">skole</a>
                            <ul class="drop-menu menu-#{i}">
                                <li>uno</li>
                                <li>dos</li>
                                <li>tres</li>
                                <li>cuatro</li>
                                <li>cinco</li>
                                <li>seis</li>
                            </ul>
                        </li>
                        <li id="search">
                            <!--- Søkefunksjon start --->
                            <!--- Kan bare søke etter id og tags --->
                            <form action="search-results.php" method="GET">
                                <input id="search-field" name="search" type="text" placeholder="Sok etter...">
                                <input id="search-button" type="submit" value="Sok">
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
                </header>