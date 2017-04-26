<?php
    require 'header.php'
?>
    <h1>Testside</h1> Test ting her:

    <form action="search-results.php" method="GET">
        <input id="search-field" name="search" type="text" placeholder="Sok etter...">
        <input id="search-button" type="submit" value="Sok">
    </form>

    <a class="article-event-link-class" href="search-results.php">
        <button class="article-event-link-btn" type="button"> Se tom search-results </button>
    </a>

    <br>

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