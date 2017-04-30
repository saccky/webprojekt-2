<?php
    session_start();
?>

<!---Artikkel start --->
<a href="<?= $event['article_link'] ?>" target="_blank"><?= $event['article_link_name'] ?></a>

<h2><?= $event['article_title'] ?></h2>
BY 
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