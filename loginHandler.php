<?php
$uname = trim($_POST["username"]);
$pword = trim($_POST["password"]);

if(empty($uname))
{
    echo "The Username is a required field and cannot be blank.";
    exit;
}
if(empty($pword))
{
    echo "The Password is a required field and cannot be blank.";
    exit;
}

$link = mysqli_connect("localhost", "root", "root", "activity1");

$sql = "SELECT * FROM users WHERE USERNAME = '$uname' AND PASSWORD = '$pword'";

$result = mysqli_query($link, $sql);

if(mysqli_num_rows($result) == 0)
{
    echo "Login failed.";
}
elseif(mysqli_num_rows($result) == 1)
{
    echo "Login was successful!";
}
elseif(mysqli_num_rows($result) > 2)
{
    echo "There are multiple users registered.";
}
else
{
    die("ERROR: Connection error occurred. " . mysqli_connect_error());
}


mysqli_close($link);
?>