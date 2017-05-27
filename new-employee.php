<?php 
require 'header.php';
?>

<?= '<font color="red">Fyll ut alle felt market med en stjerne(*)</font><br>' ?>
<main class="form-new">
    <div class="">
        <form class="" action="store-employee.php" method="post">
            <div class="">
                <input class="" type="text" id="new-name" name="new-name">
                <label class="">Navn<font color="red">*</font></label>
            </div>
            <div class="">
                <input class="" type="text" id="new-picture" name="new-picture">
                <label class="">Bilde</label>
            </div>
            <div class="">
                <input class="" type="text" id="new-email" name="new-email">
                <label class="">Email</label>
            </div>
            <div class="">
                <textarea class="" type="text" rows= "10" id="new-info" name="new-info"></textarea>
                <label class="" for="body">Info</label>
            </div>
            <button class="">
                Legg til ansatt
            </button>
        </form>

        <form class="" action="store-employee.php" method="post"> 
            <input type="hidden" id="new-name" name="new-name" value="Einstein">
            <input type="hidden" id="new-picture" name="new-picture" value="Bilder-Aktivitet/Einstein.jpg">
            <input type="hidden" id="new-email" name="new-email" value="Testemail@ikkeklikk.no">
            <input type="hidden" id="new-info" name="new-info" value="Test Info, fylt ut av Quickfill">
            <button class=""> Quickfill </button>
        </form>
    </div>
</main>

<?php 
require 'footer.php'; 
?>