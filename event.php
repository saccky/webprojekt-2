<?php
session_start();
header('Content-Type: text/html; charset=ISO-8859-1');
?>

<!--- Event start --->
<div class="event-card">
    <div class="event-shadow">
        <img class="event-image" src="<?= $event['event_image_path'] ?>">
        <div class="event-container">
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
                    <!--- Viser id --->
                    <p>Event ID: <?= $event['id'] ?></p>
                <?php } ?>
            </div>    
        </div>
    </div>
</div>
<?php
header('Content-type: text/html; charset=utf-8');
?>
