<?php "Got the Form";?><br>
<?php echo "First Name is " . $_POST["firstname"];?><br>
<?php echo "Last Name is " . $_POST["lastname"];?><br>
<?php 

$link = mysqli_connect("localhost", "root", "root", "activity1");
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

echo "connected!<br>";
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];

if(empty($fname))
{
    echo "The First Name is a required field and cannot be blank.";
    exit;
}

if(empty($lname))
{
    echo "The Last Name is a required field and cannot be blank.";
    exit;
}


$sql = "INSERT INTO users (FIRST_NAME, LAST_NAME) VALUES ('$fname', '$lname')";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
require('getAllUsers.php');

?>
<br>You are now registered.<br>