<?php
require 'connection-header.php';
$statement = $connection->prepare('DELETE FROM articles WHERE id =' .$_GET['id']);
require 'connection-footer.php';

header('Location: index.php');
exit;