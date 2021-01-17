<?php 
require_once('utility.php');

$users = getAllUsers();
    
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Login was successful: <?php echo " ". $uname ?></h2>
</body>
<a href="whoAmI.php">Who Am I</a>

<?php include('_displayUsers.php'); ?>
</html>