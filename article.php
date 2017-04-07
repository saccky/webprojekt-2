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
<!---Artikkel slutt --->