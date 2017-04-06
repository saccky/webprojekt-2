<?php   
    require 'connection.php';
    require 'header.php';
?>
    
    <br>
    
    <!--- Slideshow start --->
    <!--- legg til bilder som skal vises på forsiden her --->
    <div id="SlidesContainer">
        <img class="Slides" src="westerdals_bygning_01-1-ekempel.jpg">
        <img class="Slides" src="mathallen-andre-etasje-side.jpg">
        <img class="Slides" src="akerselven-fjerdingen.jpg">
    </div>

    <?php 
        require 'slideshow.php'; 
    ?>
    <!--- Slideshow slutt --->

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
            <?php 
                require 'test-article1.php'
            ?>
            <!---Artikkel 1 slutt --->
            
            <hr>
            <br>
            <!---Artikkel 2 start --->
            <a href="http://www.harvard.edu" target="_blank">HARVARD UNIVERSITY / THE BEST SCHOOL / FEBRUARY 21, 2017</a> 
            <h2>ANDRE ARTIKEL</h2>
            BY <a class="av" href="http://www.facebook.com/saccky?fref=ts" target="_blank">KENNETH SACCKY</a>
            <p>
                <img class="me" width="200" src="Einstein.jpg">
                Cable bills in America have been on the rise, with the average household spending $64.41 a month or about $768 a year. The thing is, there are many cheaper alternatives available these days that will provide you with enough entertainment options for the entire family. You can try a third-party service such as Netflix, which costs $9.99 a month, Amazon Prime at $99 a year or Hulu Plus, which costs $7.99 a month.

                If you prefer to stick to television, but usually only watch the same few channels, you can still lower costs by buying a package of channels. Sling TV does a base package called “The Best of Live TV,” which is $20 a month and includes 19 of the most popular channels. Add-on packs are an extra $5 each per month, so you can tailor it to your family’s needs and still save money.
            </p>
            <!---Artikkel 2 slutt --->
        
        </article>       
    </div>
    
    <?php 
        require 'footer.php' 
    ?> 