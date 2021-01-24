<?php
require_once('myfuncs.php');

function getAllUsers()
{
    $link = dbConnect();
    $users = array();
    $index = 0;
    
    $sql = "SELECT * FROM users";
    
    $result = mysqli_query($link, $sql);
    
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $users[$index] = array($row["ID"], $row["FIRST_NAME"], $row["LAST_NAME"]);
            ++$index;
        }
    }
  
    mysqli_close($link);
    return $users;
}

function getUsersByFirstName($fName)
{
    $link = dbConnect();
    $users = array();
    $index = 0;
    
    $sql = "SELECT * FROM users WHERE FIRST_NAME LIKE '%" . $fName . "%'";
    
    $result = mysqli_query($link, $sql);
    
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $users[$index] = array($row["ID"], $row["FIRST_NAME"], $row["LAST_NAME"]);
            ++$index;
        }
    }
    
    mysqli_close($link);
    return $users;
}
?>