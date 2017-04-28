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
        <!--- div id="wrapper" --->
            <header>

                <a href="index.php">
                    <img id="logo" src="./logoer/logo-klipt.png" width="400px">
                </a>

            </header>
          
           <div id="box">         
<nav>
  <ul>
    <li>hjem
      
    </li>
    <li>aktiviteter
      <ul class="drop-menu menu-#{i}">
        <li>uno</li>
        <li>dos</li>
        <li>tres</li>
        <li>cuatro</li>
        <li>cinco</li>
        <li>seis</li>
      </ul>
    </li>
    <li>mat
      <ul class="drop-menu menu-#{i}">
        <li>uno</li>
        <li>dos</li>
        <li>tres</li>
        <li>cuatro</li>
        <li>cinco</li>
        <li>seis</li>
      </ul>
    </li>
    <li>kultur
      <ul class="drop-menu menu-#{i}">
        <li>uno</li>
        <li>dos</li>
        <li>tres</li>
        <li>cuatro</li>
        <li>cinco</li>
        <li>seis</li>
      </ul>
    </li>
  </ul>
</nav>
       </div>
