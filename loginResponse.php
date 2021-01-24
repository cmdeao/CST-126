<?php 
require_once('utility.php');
//require_once('SuperHero.php');
require_once('Batman.php');
require_once('Superman.php');

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
<?php include('PlayGame.php'); ?>
<?php include('_displayUsers.php'); ?>
</html>