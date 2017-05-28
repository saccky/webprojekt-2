<?php
session_start(); //Starter session for artikkel
header('Content-Type: text/html; charset=ISO-8859-1'); //Endrer charset så æ ø å kan vises som normalt
?>

<!---Artikkel start --->
<div class="article-shadow">
    <div class="article-container">
        <a class="av" href="<?= $event['article_link'] ?>" target="_blank"><?= $event['article_link_name'] ?></a>
        <h2><?= $event['article_title'] ?></h2>
        av 
        <a class="av" href="<?= $event['article_author_link'] ?>" target="_blank">
            <?= $event['article_author'] ?>
        </a>,
        Sist oppdatert <?= $event['article_datetime'] ?>
        <br>
        <img class="me" width="200" src="<?= $event['article_image_path'] ?>">
        <p>
            <?= $event['article_body'] ?>
        </p>
        <!--nkjn --></--nkjn>
        
        <br><br><br>
        <div class="article-buttons">
            <?php
            //hvis fremmednøkkelen er true (ikke er null), legg til knapp
            if($event['article_event_fk']) 
            { ?>
                <a id="article-event-link" href="article-event.php?id=<?= $event['article_event_fk'] ?>">
                    <button class="article-btn" type="button"> Se Hendelsen </button>
                </a>
            <?php }
    
            if(isset($_SESSION['use']))
            { ?>
                <!--- Sletteknapp --->
                <a class="article-delete-class" href="delete-article.php?id=<?= $event['id'] ?>">
                    <button class="article-btn" type="button"> Slett Artikkel </button>
                </a>
                <!--- Endreknapp --->
                <a class="article-edit-class" href="edit-article.php?id=<?= $event['id'] ?>">
                    <button class="article-btn" type="button"> Endre Artikkel </button>
                </a>
                <!--- Viser id --->
                <p>Artikkel ID: <?= $event['id'] ?></p>
            <?php } ?>
        </div>
    </div>
</div>
<?php
header('Content-type: text/html; charset=utf-8'); //Endrer charset tilbake så æ ø å virker på resten av siden
?>