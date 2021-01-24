<?php
require_once('utility.php');

$searchPattern = trim($_POST['searchTerm']);

$users = getUsersByFirstName($searchPattern);

if(count($users) == 0)
{
    echo "No users were found";
}

include '_displayUsers.php';
?>