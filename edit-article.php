<?php
require 'connection-header.php';
$statement = $connection->prepare('SELECT * FROM articles WHERE id =' .$_GET['id']);
require 'connection-footer.php';
require 'header.php';

foreach ($events as $event) //Unødvendig, annen måte i hente verdier som blir endret til "$event" her?
{ 
    echo '<font color="red">Fyll ut alle felt market med en stjerne(*)</font><br>'; ?>
    <main class="form-edit">
        <div class="">
            <form class="" action="update-article.php" method="post">
                <div class="">
                    <input class="" type="text" id="edit-title" name="edit-title" value="<?= $event['article_title'] ?>">
                    <label class="">Tittel<font color="red">*</font></label>
                </div>
                <!--- Datetime = null/automatisk fylt up --->
                <div class="">
                    <textarea class="" type="text" rows= "10" id="edit-body" name="edit-body"> <?= $event['article_body'] ?> </textarea>
                    <label class="" for="body">Body<font color="red">*</font></label>
                </div>
                <div class="">
                    <input class="" type="text" id="edit-image-path" name="edit-image-path" value="<?= $event['article_image_path'] ?>">
                    <label class="">Bilde-URL</label>
                </div>
                <div class="">
                    <input class="" type="text" id="edit-author" name="edit-author" value="<?= $event['article_author'] ?>">
                    <label class="">Forfatter<font color="red">*</font></label>
                </div>
                <div class="">
                    <input class="" type="text" id="edit-author-link" name="edit-author-link" value="<?= $event['article_author_link'] ?>">
                    <label class="">Forfatter link</label>
                </div>
                <div class="">
                    <input class="" type="text" id="edit-link-name" name="edit-link-name" value="<?= $event['article_link_name'] ?>">
                    <label class="">Kildenavn</label>
                </div>
                <div class="">
                    <input class="" type="text" id="edit-link" name="edit-link" value="<?= $event['article_link'] ?>">
                    <label class="">Kildelink</label>
                </div>
                <div class="">
                    <input class="" type="number" id="edit-event-link" name="edit-event-link" value="<?= $event['article_event_fk'] ?>">
                    <label class="">Id på relevant event</label>
                </div>
                <button class="">
                    Lagre
                </button>
                <input type="hidden" name="edit-article-id" value="<?= $_GET['id']?>"> <!--- Henter ID og sender den videre --->
            </form>
        </div>
    </main>
<?php }
                                   
require 'footer.php'; 
?>