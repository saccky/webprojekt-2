<?php 
    require 'header.php';
?>

<div class="box">
    <?= 'Fyll ut alle felt market med en stjerne(*)<br>' ?>
    <main class="form-new">
        <div class="">
            <form class="" action="store-event.php" method="post">
                <div class="">
                    <input class="" type="text" id="new-title" name="new-title">
                    <label class="">Tittel*</label>
                </div>
                <div class="">
                    <input class="" type="text" id="new-where" name="new-where">
                    <label class="">Hvor*</label>
                </div>
                <div class="">
                    <input class="" type="text" id="new-where-link" name="new-where-link">
                    <label class="">Link til hvor</label>
                </div>
                <div class="">
                    <input class="" type="datetime-local" rows= "10" id="new-datetime" name="new-datetime"> <!--- datetime-local virker ikke i firefox, eldre IE versjoner --->
                    <label class="">Naar*</label>
                </div>
                <div class="">
                    <textarea class="" type="text" rows= "10" id="new-body" name="new-body"></textarea>
                    <label class="" for="body">Body*</label>
                </div>
                <div class="">
                    <input class="" type="text" id="new-image-path" name="new-image-path">
                    <label class="">Bilde-URL</label>
                </div>
                <div class="">
                        <select id="new-tag" name="new-tag"> <!--- Viser en liste med tags --->
                        <option value="aktivitet">Aktivitet</option>
                        <option value="mat">Mat</option>
                        <option value="kultur">Kultur</option>
                        <option value="skole">Skole</option>
                    </select>
                    <label class="">Tag*</label>
                </div>
                <button class="">
                    Legg til
                </button>
            </form>
            
            <form class="" action="store-event.php" method="post"> 
                <input type="hidden" id="new-title" name="new-title" value="Test Tittel">
                <input type="hidden" id="new-where" name="new-where" value="Test Hvor">
                <input type="hidden" id="new-where-link" name="new-where-link" value="testside.php">
                <input type="hidden" id="new-datetime" name="new-datetime" value="">
                <input type="hidden" id="new-body" name="new-body" value="Test Body, fylt ut av Quickfill">
                <input type="hidden" id="new-image-path" name="new-image-path" value="Bilder-Aktivitet/Einstein.jpg">
                <input type="hidden" id="new-tag" name="new-tag" value="skole">
                <button class="">
                    Quickfill
                </button>
            </form>
        </div>
    </main>
</div>

<?php 
    require 'footer.php'; 
?>