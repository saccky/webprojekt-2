<?php 
    require 'header.php';
?>

<div class="wrap">
    <div class="box">
        <?= 'Fyll ut alle felt market med en stjerne(*)<br>' ?>
        <main class="form-new">
            <div class="">
                <form class="" action="store-article.php" method="post">
                    <div class="">
                        <input class="" type="text" id="new-title" name="new-title">
                        <label class="">Tittel*</label>
                    </div>
                    <!--- Datetime = null --->
                    <div class="">
                        <textarea class="" type="text" rows= "10" id="new-body" name="new-body"></textarea>
                        <label class="" for="body">Body*</label>
                    </div>
                    <div class="">
                        <input class="" type="text" id="new-image-path" name="new-image-path">
                        <label class="">Bilde-URL</label>
                    </div>
                    <div class="">
                        <input class="" type="text" id="new-author" name="new-author">
                        <label class="">Forfatter*</label>
                    </div>
                    <div class="">
                        <input class="" type="text" id="new-author-link" name="new-author-link">
                        <label class="">Forfatter link</label>
                    </div>
                    <div class="">
                        <input class="" type="text" id="new-link-name" name="new-link-name">
                        <label class="">Kildenavn</label>
                    </div>
                    <div class="">
                        <input class="" type="text" id="new-link" name="new-link">
                        <label class="">Kildelink</label>
                    </div>
                    <div class="">
                        <input class="" type="text" id="new-event-link" name="new-event-link">
                        <label class="">Id på relevant event</label>
                    </div>
                    <button class="">
                        Legg til artikkel
                    </button>
                </form>
                 
                <form class="" action="store-article.php" method="post"> 
                    <input type="hidden" id="new-title" name="new-title" value="Test Tittel">
                    <input type="hidden" id="new-body" name="new-body" value="Test Body, fylt ut av Quickfill">
                    <input type="hidden" id="new-image-path" name="new-image-path" value="Bilder-Aktivitet/Einstein.jpg">
                    <input type="hidden" id="new-author" name="new-author" value="Test Forfatter">
                    <input type="hidden" id="new-author-link" name="new-author-link" value="user.php">
                    <input type="hidden" id="new-link-name" name="new-link-name" value="Test Kilde">
                    <input type="hidden" id="new-link" name="new-link" value="testside.php">
                    <input type="hidden" id="new-event-link" name="new-event-link" value="1">
                    <button class=""> Quickfill </button>
                </form>
            </div>
        </main>
    </div>
</div>

<?php 
    require 'footer.php'; 
?>