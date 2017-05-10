<?php   
    session_start();
    require 'connection-header.php';
    $statement = $connection->prepare('SELECT * FROM articles ORDER BY id DESC LIMIT 10');
    //Order by desc for å hente sist innlagte artikler først, kan evt. legge til og order by dato (kan også bruke carbon for ekstrapoeng)
    require 'connection-footer.php';
    require 'header.php';
?>

<div class="wrap">
    <div class="box">
        <br>
        <!--- Slideshow start --->
        <!--- legg til bilder som skal vises på forsiden her --->
        <div id="SlidesContainer">
            <img class="Slides" src="Bilder-Skole/westerdals_bygning_01-1-ekempel.jpg">
            <img class="Slides" src="Bilder-Kultur/tag-gladfisk.jpg">
            <img class="Slides" src="Bilder-Mat/mathallen.jpg">
            <img class="Slides" src="Bilder-Kultur/akerselven-fjerdingen.jpg">
            <img class="Slides" src="Bilder-Skole/campus-fjerdingen.jpg">
        </div>
        <?php 
            require 'slideshow.php'; 
        ?>

        <br>

        <div class="artikel1">
            <article>
                <!--- Printer alle artikler --->
                <?php foreach ($events as $event) 
                {
                    require 'article.php';
                    echo "<br>";
                } ?>
            </article>
        </div>
    </div>
</div>

<?php 
    require 'footer.php'; 
?>
