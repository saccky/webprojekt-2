<div class="medlemmar">
    <div class="profilbild"> 
        <img src="<?= $event['author_picture'] ?>">
    </div>
    <div class="profilinfo">
        <?= $event['author_name'] ?>
        <br>
        <a href="mailto:<?= $event['author_email'] ?>"><?= $event['author_email'] ?></a>  
        <br>
        Information: <?= $event['author_info'] ?>
    </div>
</div>