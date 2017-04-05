
<!---Artikkel start --->
<a href="<?= $event['link'] ?>" target="_blank"><?= $event['link-name'] ?></a>

<h2><?= $event['title'] ?></h2>
BY <a class="av" href="<?= $event['author-link'] ?>" target="_blank"><?= $event['author'] ?></a>

<p>
    <img class="me" width="200" src="<?= $event['image-path'] ?>">
    <?= $event['body'] ?>
</p>
<!---Artikkel slutt --->