<?php
    session_start(); //Starter session
    require 'header.php'
?>
    <h1>Logg inn</h1>

    <!--- Login --->
    <!--- Logger inn bruker og sender den til siden i action-tagen, php koden under sjekker om login er gyldig, og knapper eller lignende kan legges inn i if-blokkene --->
    <!--- Merk: "Login" er brukt litt liberalt her, og passord kan være synlig i url, samt at det ikke er noen scrubbing av input-data. Med andre ord er det ingen sikkerhet i det hele tatt. --->
    <form action="user.php" method="GET">
        <input id="login-user" name="login-user" type="text" placeholder="Brukernavn"> <br>
        <input id="login-pass" name="login-pass" type="password" placeholder="Passord"> <br>
        <input name="login-button" type="submit" value="Logg inn">
    </form>

<?php               
    $user = $_GET['login-user'];
    $pass = $_GET['login-pass'];

    if(isset($_SESSION['use'])) //Hvis en session eksisterer, bruk den
    {
        //Logget inn koder
        echo "Du er logget inn!<br>"; 
?>
        <form action="new-event.php" method="GET">
            <input name="new" type="submit" value="Ny hendelse">
        </form>

        <!--- Logout ---> 
        <form action="user.php" method="GET">
            <input name="logout-button" type="submit" value="Logg ut">
        </form>  
<?php
        if(isset($_GET['logout-button'])) //Sjekker om knapp med NAME "logout-button er trykket
        {
            session_destroy(); //Terminerer session
            echo ''.$user.' logget ut!'; //$user Virker ikke / konfirmasjon til bruker
            header("Refresh:0"); //Laster inn siden på nytt for å oppdatere endreingene
        }
    }

    if(!isset($_SESSION['use'])) //Hvis det ikke er en session i bruk, login
    {
        if(isset($_GET['login-button'])) //Sjekker om knappen med NAME(ikke id) "login-button" er trykket
        {
            if($user == "Admin" && $pass == "1234") //Bruekrnavn/passord er Admin/1234
            {                                
                $_SESSION['use'] = $user; //setter session til user(?)
                echo ''.$user.' logget inn!'; 
                header("Refresh:0");
            }
            else //if($user != "Admin" || $pass != "1234") //Hvis ikke brukernavn og passord er korrekt, print feil
            {
                echo "Ugyldig brukernavn eller passord!";        
            }
        }
    }
    require 'footer.php';
?>