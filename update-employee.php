<?php
require 'connection-header.php';
$employeeid = $_POST['edit-employee-id'];

if(empty($_POST["edit-name"])) //Hvis navn ikke er fylt ut, send bruker tilbake
{
    header('Location: edit-employee.php?id='.$employeeid);
    exit;
}
else
{
    //id, emplyee-name, employee-picture, employee-email, employee-info
    $statement = $connection->prepare('UPDATE employees SET
    employee_name = "'.$_POST['edit-name'].'", 
    employee_picture = "'.$_POST['edit-picture'].'",
    employee_email = "'.$_POST['edit-email'].'",
    employee_info = "'.$_POST['edit-info'].'"
    WHERE id = "'.$employeeid.'"');

    require 'connection-footer.php';
    header('Location: user.php');
    exit;
}