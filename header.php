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
          <link rel="stylesheet" href="normalize.css" />
        <link rel="stylesheet" href="main.css" />
        <link rel="icon" href="logo1.png" />
        <title>WestGuide</title>
    </head>

    <body>
        <div id="wrapper">
            <header>

                <a href="index.php">
                    <img id="logo" src="./logoer/logo-klipt.png" width="400px">
                </a>



            </header>
            <img class="logoer" id="facelogo" src="./logoer/facebook-logo.png">
            <img class="logoer" id="twitterlogo" src="./logoer/twitter-logo.png">
            <img class="logoer" id="instalogo" src="./logoer/instagrom-logo.png">

            <nav>
                <ul>
                   <li><a href="index.php">HJEM</li> 
                       
                    <li><a href="kultur.php">KULTUR</a>




                        <ul>
                            <li><a href="#">Kunst</a></li>
                            <li><a href="#">Historie</a></li>
                            <li><a href="#">Utstilling</a></li>
                        </ul>
                    </li>
                    <li><a href="aktivitet.php">AKTIVITET</a></li>
                    <li><a href="mat.php">MAT</a></li>
                    <li><a href="skole.php">SKOLE</a></li>
                    <li><a href="testside.php">TEST-SIDE</a></li>
                    <li><a href="new-test.php">ADD</a></li>
                </ul>
            </nav>
