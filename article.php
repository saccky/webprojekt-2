<!---Artikkel start --->
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

<script>
    /* Gjemmer knappen hvis det ikke er noe å linke til */
</script>

<a class="article-event-link-class" href="article-event.php?id=<?= $event['article-event-fk'] ?>">
    <button class="article-event-link-btn" type="button"> Se Hendelsen </button>
</a>
<!---Artikkel slutt --->