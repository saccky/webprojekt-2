<?php
    session_start();
?>

<!--- Event start --->
<div class="event-container">
    <div class="event-shadow">
        <div class="event-inner-container">
            
            <img class="event-image" width="300" height="200" src="<?= $event['event_image_path'] ?>">
            <h2><?= $event['event_title'] ?></h2> 
            <a class="av" href="<?= $event['event_where_link'] ?>" target="_blank">
                <?= $event['event_where'] ?>
            </a>,
            <?= $event['event_datetime'] ?>
            <p>
                <?= $event['event_body'] ?>
            </p>
            
            <div class="event-buttons">
                <?php
                if(isset($_SESSION['use']))
                { ?>
                    <!--- Sletteknapp --->
                    <a class="event-delete-class" href="delete-event.php?id=<?= $event['id'] ?>">
                        <button class="event-btn" type="button"> Slett Event </button>
                    </a>
                    <!--- Editknapp --->
                    <a class="event-edit-class" href="edit-event.php?id=<?= $event['id'] ?>">
                        <button class="event-btn" type="button"> Endre Event </button>
                    </a>
                <?php } ?>
            </div>    
        </div>
    </div>
</div>