<?php
    require 'header.php'
?>

<h1>AKTIVITET</h1>
test

<?php
    require 'footer.php'
?>

<div id="googleMap" style="width:400px;height:400px;">
    <script>
        function myMap() {
        var mapProp= {
        center:new google.maps.LatLng(59.920543, 10.752696),
        zoom:17,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
    </script>
    
    <!-- Lat&Lng brenneriveien '59.920543, 10.752696' -->
    <!-- Lat&Lng vulkan '59.922562, 10.751683' -->
    <!-- I TILFELLE: Lat&Lng fjerdingen '59.916238, 10.759765' -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9tygoWPfsio74yQq3wXl6wxU23ERPlgA&callback=myMap"></script>
</div>