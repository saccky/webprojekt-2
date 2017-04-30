<?php
    session_start();
?>

<!--- Event start --->
<div id="EventWrapper">
    <img class="event-image" width="300" height="200" src="<?= $event['event-image-path'] ?>">

    <h2><?= $event['event-title'] ?></h2>
    AT 
    <a class="event-hvor" href="<?= $event['event-where-link'] ?>" target="_blank">
        <?= $event['event-where'] ?>
    </a>

    <p>
        <?= $event['event-body'] ?>
    </p>
</div>

<?php
    if(isset($_SESSION['use']))
    { ?>
        <!--- Sletteknapp --->
        <a class="event-delete-class" href="delete-event.php?id=<?= $event['id'] ?>">
            <button class="event-delete-btn" type="button"> Slett Event </button>
        </a>
    <?php } ?>