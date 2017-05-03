<?php
    session_start();
?>

<!---Artikkel start --->
<<<<<<< HEAD
<a href="<?= $event['article_link'] ?>" target="_blank"><?= $event['article_link_name'] ?></a>

<h2><?= $event['article_title'] ?></h2>
av 
<a class="av" href="<?= $event['article_author_link'] ?>" target="_blank">
    <?= $event['article_author'] ?>
</a>

<p>
    <img class="me" width="200" src="<?= $event['article_image_path'] ?>">
    <?= $event['article_body'] ?>
</p>

<?php
    if(isset($_SESSION['use']))
    { ?>
        <!--- Sletteknapp --->
        <a class="article-delete-class" href="delete-article.php?id=<?= $event['id'] ?>">
            <button class="article-delete-btn" type="button"> Slett Artikkel </button>
        </a>
    <?php } ?>

<?php
    //hvis fremmednøkkelen er true (ikke er null), legg til knapp
    if($event['article_event_fk']) 
    { ?>
        <a id="article-event-link" href="article-event.php?id=<?= $event['article_event_fk'] ?>">
            <button class="article-event-link-btn" type="button"> Se Hendelsen </button>
        </a>
    <?php } ?>
=======
<div if="article-card">
    <a href="<?= $event['article-link'] ?>" target="_blank"><?= $event['article-link-name'] ?></a>

    <h2><?= $event['article-title'] ?></h2>
    BY 
    <a class="av" href="<?= $event['article-author-link'] ?>" target="_blank">
        <?= $event['article-author'] ?>
    </a>

    <p>
        <img class="me" width="200" src="<?= $event['article-image-path'] ?>">
        <?= $event['article-body'] ?>
    </p>

    <!--- Sletteknapp --->
    <a class="article-delete-class" href="delete.php?id=<?= $event['id'] ?>">
        <button class="article-delete-btn" type="button"> Slett Artikkel </button>
    </a>

    <script>
        document.getElementById("article-event-link").style.display = "block";
        //Gjemmer knappen hvis det ikke er noe å linke til //Virker kun på den siste artikkelen printet
        if(<?= $event['article-event-fk'] ?>) //hvis fremmednøkkelen true (ikke er null), vis knapp
        {
            document.getElementById("article-event-link").style.display = "block";
        }
    </script>

    <a id="article-event-link" href="article-event.php?id=<?= $event['article-event-fk'] ?>">
        <button class="article-event-link-btn" type="button"> Se Hendelsen </button>
    </a>
    </div>
<!---Artikkel slutt --->
>>>>>>> origin/master
