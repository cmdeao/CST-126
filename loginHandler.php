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

include 'myfuncs.php';
$link = dbConnect();

$sql = "SELECT * FROM users WHERE USERNAME = '$uname' AND PASSWORD = '$pword'";

$result = mysqli_query($link, $sql);

if(mysqli_num_rows($result) == 0)
{
    $message = "Login Failed";
    include('loginFailed.php');
}
elseif(mysqli_num_rows($result) == 1)
{
    $row = $result->fetch_assoc();
    saveUserId($row["ID"]);
    include('loginResponse.php');
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