<?php
    require 'connection-header.php';
    $statement = $connection->prepare('SELECT * FROM events WHERE id =' .$_GET['id']);
    require 'connection-footer.php';
    require 'header.php';

    foreach ($events as $event) //Unødvendig, annen måte i hente verdier som blir endret til "$event" her?
    {    
?>

        <main class="form-edit">
            <div class="">
                <form class="" action="update-event.php" method="post">
                    <div class="">
                        <input class="" type="text" id="edit-title" name="edit-title" value="<?= $event['event_title'] ?>">
                        <label class="">Tittel</label>
                    </div>
                    <div class="">
                        <input class="" type="text" id="edit-where" name="edit-where" value="<?= $event['event_where'] ?>">
                        <label class="">Hvor</label>
                    </div>
                    <div class="">
                        <input class="" type="text" id="edit-where-link" name="edit-where-link" value="<?= $event['event_where_link'] ?>">
                        <label class="">Link til hvor (null)</label>
                    </div>
                    <div class="">
                        <textarea class="" type="text" rows= "10" id="edit-body" name="edit-body" value="<?= $event['event_body'] //Printes ikke - textarea? ?>"> 
                        </textarea>
                        <label class="" for="body">Body</label>
                    </div>
                    <div class="">
                        <input class="" type="text" id="edit-image-path" name="edit-image-path" value="<?= $event['event_image_path'] ?>">
                        <label class="">Bilde-URL</label>
                    </div>
                    <div class="">
                        <input class="" type="text" id="edit-tag" name="edit-tag" value="<?= $event['tag'] ?>">
                        <label class="">Tag</label>
                    </div>
                    <button class="">
                        Endre
                    </button>
                    <input type="hidden" name="edit-event-id" value="<?= $_GET['id']?>"> <!--- Henter ID og sender den videre --->
                </form>
            </div>
        </main>

<?php
    }

    require 'footer.php'; 
?>