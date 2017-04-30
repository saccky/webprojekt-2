<?php
    require 'connection-header.php';
    $statement = $connection->prepare('DELETE FROM events WHERE id =' .$_GET['id']);
    require 'connection-footer.php';

    header('Location: index.php');
    exit;