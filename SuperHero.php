<?php
class SuperHero
{
    private $name;
    private $health;
    private $isDead = FALSE;

    function __construct($name, $health)
    {
        $this->name = $name;
        $this->health = $health;
    }
    
    function Attack($obj)
    {
        $damage = rand(1, 10);
        echo $this->name . " attacks " . $obj->name . " for " . $damage . " damage." . "<br>"; 
        $obj->DetermineHealth($damage);
    }
    
    function DetermineHealth($damage)
    {
        echo $this->name . "'s health before attack: " . $this->get_health() . " - ";
        $result = $this->health - $damage;
        $this->health = $result;
        echo $this->name . "'s health after attack: " . $this->get_health() . "<br>";
        if($this->health <= 0)
        {
            $this->isDead = true;
        }
    }
    
    function get_isDead()
    {
        return $this->isDead;
    }
    
    
    function get_name()
    {
        return $this->name;
    }
    
    function get_health()
    {
        return $this->health;
    }
}
?>