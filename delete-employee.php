<?php
require 'connection-header.php';
$statement = $connection->prepare('DELETE FROM employees WHERE id =' .$_GET['id']);
require 'connection-footer.php';

header('Location: user.php');
exit;