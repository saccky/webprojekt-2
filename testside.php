<?php
    session_start(); //Starter session
    require 'header.php'
?>
    <h1>Testside</h1> Test ting her:

    <!--- Søkefunksjon start --->
    <!--- Kan bare søke etter id og tags --->
    <form action="search-results.php" method="GET">
        <input id="search-field" name="search" type="text" placeholder="Sok etter...">
        <input id="search-button" type="submit" value="Sok">
    </form>
    
    <hr>
    
    <!--- Login --->
    <!--- Logger inn bruker og sender den til siden i action-tagen, php koden under sjekker om login er gyldig, og knapper eller lignende kan legges inn i if-blokkene --->
    <!--- Merk: "Login" er brukt litt liberalt her, og passord kan være synlig i url, samt at det ikke er noen scrubbing av input-data. Med andre ord er det ingen sikkerhet i det hele tatt. --->
    <form action="testside.php" method="GET">
        <input id="login-user" name="login-user" type="text" placeholder="Brukernavn"> <br>
        <input id="login-pass" name="login-pass" type="password" placeholder="Passord"> <br>
        <input name="login-button" type="submit" value="Logg inn">
    </form>

    <?php               
        $user = $_GET['login-user'];
        $pass = $_GET['login-pass'];

        if(isset($_SESSION['use'])) //Hvis en session eksisterer, bruk den
        {
            echo "Du er allerede logget inn!<br>";
        }

        if(!isset($_SESSION['use'])) //Hvis det ikke er en session i bruk, login
        {
            if(isset($_GET['login-button'])) //Sjekker om knappen med NAME(ikke id) "login-button er trykket
            {
                if($user == "Admin" && $pass == "1234") //Bruekrnavn/passord er Admin/1234
                {                                
                    $_SESSION['use'] = $user; //setter session til user(?)
                    echo ''.$user.' logget inn!'; 
                }
                else //if($user != "Admin" || $pass != "1234") //Hvis ikke brukernavn og passord er korrekt, print feil
                {
                    echo "Ugyldig brukernavn eller passord!";        
                }
            }
        }
    ?>

    <br>

    <!--- Logout ---> 
    <form action="testside.php" method="GET">
        <input name="logout-button" type="submit" value="Logg ut">
    </form>  
    <?php
        if(isset($_GET['logout-button'])) //Sjekker om knapp med NAME "logout-button er trykket
        {
            session_destroy(); //Terminerer session
            echo ''.$user.' logget ut!'; //$user Virker ikke / konfirmasjon til bruker
        }
    ?>

    <hr>
    
    <div id="googleMap" style="width:400px;height:400px;">
        <script>
            //Lat&Lng Brenneriveien '59.920543, 10.752696'
            //Lat&Lng Vulkan '59.922562, 10.751683'
            //Lat&Lng Fjerdingen '59.916238, 10.759765'
            var LatBrenneriveien = 59.920543;
            var LngBrenneriveien = 10.752696;
            var LatVulkan = 59.922562;
            var LngVulkan = 10.751683;
            var LatFjerdingen = 59.916238;
            var LngFjerdingen = 10.759765;
            
            function myMap() 
            {
                var mapProp = {center: new google.maps.LatLng(LatBrenneriveien, LngBrenneriveien), zoom: 17};
                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9tygoWPfsio74yQq3wXl6wxU23ERPlgA&callback=myMap">
        </script>
    </div>
    
    <br>

<?php
    require 'twitterfeed.php';
    require 'footer.php';
?>