<?php
require_once 'Batman.php';
require_once 'Superman.php';

echo "<br>";
$batman = new Batman();
$superman = new Superman();

while(($batman->get_health() > 0) && ($superman->get_health() > 0))
{
    $superman->Attack($batman);
    if($batman->get_isDead())
    {
        echo "Superman has defeated Batman!";
        break;
    }
    
    $batman->Attack($superman);
    if($superman->get_isDead())
    {
        echo "Batman has defeated Superman!";
    }
}
?>