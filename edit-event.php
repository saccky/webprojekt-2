<?php
require 'connection-header.php';
$statement = $connection->prepare('SELECT * FROM events WHERE id =' .$_GET['id']);
require 'connection-footer.php';
require 'header.php';

foreach ($events as $event) //Unødvendig, annen måte i hente verdier som blir endret til "$event" her?
{ 
    echo '<font color="red">Fyll ut alle felt market med en stjerne(*)</font><br>'; ?>
    <main class="form-edit">
        <div class="">
            <form class="" action="update-event.php" method="post">
                <div class="">
                    <input class="" type="text" id="edit-title" name="edit-title" value="<?= $event['event_title'] ?>">
                    <label class="">Tittel<font color="red">*</font></label>
                </div>
                <div class="">
                    <input class="" type="text" id="edit-where" name="edit-where" value="<?= $event['event_where'] ?>">
                    <label class="">Hvor<font color="red">*</font></label>
                </div>
                <div class="">
                    <input class="" type="text" id="edit-where-link" name="edit-where-link" value="<?= $event['event_where_link'] ?>">
                    <label class="">Link til hvor</label>
                </div>
                <div class="">
                    <input class="" type="datetime" id="edit-datetime" name="edit-datetime" value="<?= $event['event_datetime'] ?>">
                    <label class="">Når<font color="red">*</font></label>
                </div>
                <div class="">
                    <textarea class="" type="text" rows= "10" id="edit-body" name="edit-body">
                        <?= $event['event_body']?>
                    </textarea>
                    <label class="" for="body">Body<font color="red">*</font></label>
                </div>
                <div class="">
                    <input class="" type="text" id="edit-image-path" name="edit-image-path" value="<?= $event['event_image_path'] ?>">
                    <label class="">Bilde-URL</label>
                </div>
                <div class="">
                    <select id="edit-tag" name="edit-tag"> <!--- Viser en liste med tags --->
                        <option value="<?= $event['tag'] ?>"><?= $event['tag'] ?></option> <!--- Viser nåværende verdi --->
                        <option value="aktivitet">Aktivitet</option>
                        <option value="mat">Mat</option>
                        <option value="kultur">Kultur</option>
                        <option value="skole">Skole</option>
                    </select>
                    <label class="">Kategori<font color="red">*</font></label>
                </div>
                <button class="" onclick="checkInput()">
                    Lagre
                </button>
                <input type="hidden" name="edit-event-id" value="<?= $_GET['id']?>"> <!--- Henter ID og sender den videre --->
            </form>
        </div>
    </main>
<?php }

require 'footer.php'; 
?>