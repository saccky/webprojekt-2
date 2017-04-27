<?php
    session_start();
    require 'header.php'
?>
    <h1>Testside</h1> Test ting her:

    <!--- Søkefunksjon start --->
    <!--- Kan bare søke etter id og tags --->
    <form action="search-results.php" method="GET">
        <input id="search-field" name="search" type="text" placeholder="Sok etter...">
        <input id="search-button" type="submit" value="Sok">
    </form>
    <!--- Søkefunksjon slutt --->
    
    <hr>
    
    <!--- Login start --->
    <!--- "Logger" inn bruker på siden i action-tagen, php koden under sjekker om login er gyldig, og knapper eller lignende kan legges inn i if-blokkene --->
    <form action="testside.php" method="GET">
        <input id="login-user" name="login-user" type="text" placeholder="Brukernavn"> <br>
        <input id="login-pass" name="login-pass" type="password" placeholder="Passord"> <br>
        <input id="login-button" type="submit" value="Login">
    </form>

    <?php 
        if(isset($_SESSION['use']))
        {
            echo "<br>Du er logget inn<br>";
        }

        if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
        {
            $user = $_GET['login-user'];
            $pass = $_GET['login-pass'];

            if($user == "Admin" && $pass == "1234")
            {                                
                $_SESSION['use']=$user;
                echo 'Logget inn';
            }
            else
            {
                echo "invalid UserName or Password";        
            }
        }

        /*
        //Eksempelkode for login og unksjoner en bruker kan ha
        //Merk at brukernavn og passord er Admin og Gruppe32, kan også bruke database til dette
        //Merk også brukernavn og passord vises i url
       $username = $_GET['login-user'];
       $password = $_GET['login-pass'];

        if($username == "Admin" && $password == "Gruppe32")
        {
            echo "<br>Du er logget inn<br>";
        }
        else if($username == "Admin" && $password != "Gruppe32")
        {
            echo "<br>Feil passord!<br>";
        }
        else if($username != "Admin" || $password != "Gruppe32")
        {
            //printes uansett, se om mulig/nødvendig med actionlistener
            echo "<br>Feil brukernavn eller passord!<br>";
        }
        */
    ?>
    <!--- Login slutt --->

    <!--- Logout start --->
    <form action="testside.php" method="GET">
        <input id="logout-user" name="logout-user" type="text" placeholder="Brukernavn"> <br>
        <input id="logout-button" type="submit" value="Logout">
    </form>

    <?php
        $logout = $_GET['logout-user'];
        if($logout == "Admin") 
        {
            session_destroy();  
            echo "Logget ut<br>";
        }
    ?>    
    <!--- Lougout slutt --->

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