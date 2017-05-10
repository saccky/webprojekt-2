<?php
    session_start();
?>

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
    
    <br><br><br>
    <div class="author-buttons">
        <?php
        //hvis fremmednøkkelen er true (ikke er null), legg til knapp
        if($event['']) //Linke til artikler skrevet av forfatter/ansatt"
        { ?>
            <a id="author-article-link" href="author-article.php?id=<?= $event[''] ?>">
                <button class="author-btn" type="button"> Se Artikler </button>
            </a>
        <?php }

        if(isset($_SESSION['use']))
        { ?>
            <!--- Sletteknapp --->
            <a class="author-delete-class" href="delete-author.php?id=<?= $event['id'] ?>">
                <button class="author-btn" type="button"> Fjern Forfatter (placeholder) </button>
            </a>
            <!--- Endreknapp --->
            <a class="author-edit-class" href="edit-author.php?id=<?= $event['id'] ?>">
                <button class="author-btn" type="button"> Endre Forfatters info (placeholder) </button>
            </a>
        <?php } ?>
    </div>
</div>