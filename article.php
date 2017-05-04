<?php
    session_start();
?>

<!---Artikkel start --->
<div class="article-shadow">
        <img class="me" width="200" src="<?= $event['article-image-path'] ?>">
    <div class="container">
<a href="<?= $event['article-link'] ?>" target="_blank"><?= $event['article-link-name'] ?></a>

<h2><?= $event['article-title'] ?></h2>
av 
<a class="av" href="<?= $event['article-author-link'] ?>" target="_blank">
    <?= $event['article-author'] ?>
</a>

<p>
    <?= $event['article-body'] ?>
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
    if($event['article-event-fk']) 
    { ?>
        <a id="article-event-link" href="article-event.php?id=<?= $event['article-event-fk'] ?>">
            <button class="article-btn" type="button"> Se Hendelsen </button>
        </a>
    <?php } ?>
    </div>
</div>