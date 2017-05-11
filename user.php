<?php
    session_start(); //Starter session
    require 'connection-header.php';
    // Kode for spesefik spørring etter events med tag "Kultur" (Ikke CAPS-sensetiv)
    $statement = $connection->prepare('SELECT * FROM employees');
    require 'connection-footer.php';
    require 'header.php';
?>

<div class="wrap">
    <div class="box">
        <?php
        //Henter brukernavn og passord fra login-feltene
        $user = $_GET['login-user'];
        $pass = $_GET['login-pass'];

        if(isset($_SESSION['use'])) //Hvis en session eksisterer, bruk den
        {
            //Logget inn koder
            echo "<h1>Velkommen, $user!</h1>"; //Viser bare navnet rett etter login..
            ?>
            <form action="new-event.php" method="GET">
                <input type="submit" value="Ny hendelse">
            </form>

            <form action="new-article.php" method="GET">
                <input type="submit" value="Ny artikkel">
            </form>

            <form action="testside.php" method="GET">
                <input type="submit" value="Testside">
            </form>

            <!--- Logout ---> 
            <form action="user.php" method="GET">
                <input name="logout-button" type="submit" value="Logg ut">
            </form>  
            <?php
            if(isset($_GET['logout-button'])) //Sjekker om knapp med NAME "logout-button er trykket
            {
                session_destroy(); //Terminerer session
                echo ''.$user.' logget ut! Vennligst oppdater siden'; //$user Virker ikke / konfirmasjon til bruker
                header("Refresh:0"); 
                header("location: user.php"); //Laster inn siden på nytt for å oppdatere endreingene
            }
        }

        if(!isset($_SESSION['use'])) //Hvis det ikke er en session i bruk, login
        { ?>
            <h1>Logg inn</h1>
            <!--- Login --->
            <!--- Merk: "Login" er brukt litt liberalt her, og passord kan være synlig i url, samt at det ikke er noen scrubbing av input-data. Med andre ord er det ingen sikkerhet i det hele tatt. --->
            <form action="user.php" method="GET">
                <input id="login-user" name="login-user" type="text" placeholder="Brukernavn"> <br>
                <input id="login-pass" name="login-pass" type="password" placeholder="Passord"> <br>
                <input name="login-button" type="submit" value="Logg inn">
            </form>
            <?php
            if(isset($_GET['login-button'])) //Sjekker om knappen med NAME(ikke id) "login-button" er trykket
            {
                if($user == "Admin" && $pass == "1234") //Bruekrnavn/passord er Admin/1234
                {                                
                    $_SESSION['use'] = $user; //setter session til user(?)
                    echo ''.$user.' logget inn! Vennligst oppdater siden'; 
                    header("Refresh:0");
                }
                else //if($user != "Admin" || $pass != "1234") //Hvis ikke brukernavn og passord er korrekt, print feil
                {
                    echo "Ugyldig brukernavn eller passord! <br> Er du sikker på at du skal være her?"; //Tegnproblemer
                }
            }
        } ?>
        <hr>

        <!--- Om oss --->
        <div class="container">
            <div class="item-1 item">
                <h1>Kort om projektet</h1>
                <p> 
                    The opening of a streetwear giant such as Palace would naturally draw a line, but no one would expect the turn out to be so large on May 5, 2017. The shop, located at 49 Howard St. neatly between Stadium Goods and around the corner from NikeLab, was announced earlier with a teaser video and later confirmed with a solid address and store hours.Regardless of the torrential rain, hopeful shoppers stood in line and donned their latest pickups ranging from Supreme and Anti Social Social Club to BAPE and even Palace pieces from previous seasons and collections. 
                </p>
            </div>

            <div class="item-2 item">
                <h1>Lenker</h1>
                <a href="http://www.westerdals.no" target="_blank">Westerdals hjemmeside</a><br>
                <a href="https://trello.com/b/8BqHB93W/kreativt-webprosjekt2" target="_blank">Trello</a><br>
                <a href="https://github.com/saccky/webprojekt-2" target="_blank">GitHub</a><br>
                <a href="https://www.youtube.com/watch?v=dTdR75pGdO4&feature=youtu.be" target="_blank">Kanban video - YouTube</a>
            </div>
        </div>
        
        <h1>Medlemmar</h1>
        <?php 
        foreach ($events as $event) 
        {  
            require 'employee.php';
            echo "<hr>";
            $employeecounter++;
        }
        if($employeecounter == 0)
        {
            echo "Beklager! Vi fant ingen ansatte!";
        } ?>
    </div>
</div>
<br>
<?php
    require 'footer.php';
?>