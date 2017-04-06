<?php   
    require 'connection.php';
    require 'header.php';
?>
    <br> <img src="westerdals_bygning_01-1-ekempel.jpg" width="100%">
    <br>
    <hr>
    <br>


<div class="artikel1">
    <article>

        <!--- Printer alle artikler --->
        <?php foreach ($articles as $event) 
                {  
                    require 'article.php';
                ?>
        <hr>
        <br>
        <?php  } ?>

        <!---Artikkel 1 start --->
        
        <!---Artikkel 1 slutt --->

        <hr>
        <br>
        <!---Google maps start --->

        <div id="googleMap" style="width:400px;height:400px;">
            <script>
                function myMap() {
                    var mapProp = {
                        center: new google.maps.LatLng(59.920543, 10.752696),
                        zoom: 17,
                    };
                    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                }

            </script>

            <!-- Lat&Lng brenneriveien '59.920543, 10.752696' -->
            <!-- Lat&Lng vulkan '59.922562, 10.751683' -->
            <!-- I TILFELLE: Lat&Lng fjerdingen '59.916238, 10.759765' -->

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9tygoWPfsio74yQq3wXl6wxU23ERPlgA&callback=myMap"></script>
        </div>
        <!---Google maps slutt --->

    </article>
</div>

<?php 
        require 'footer.php' 
    ?>
