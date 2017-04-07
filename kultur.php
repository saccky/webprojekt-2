<?php
    require 'connection-event.php';
    require 'header.php';
?>

    <h1>KULTUR</h1>
    <!--- Printer alle events med tag = kultur --->
    <?php 
        foreach ($events as $event) 
        {  
            require 'event.php';
        ?>
            <hr>
            <br>
        <?php  } ?>
<?php
    require 'footer.php'
?>