<?php
class Event implements EventInterface
{
    // Properties
    protected $name;
    protected $date;
    protected $location;

    // Constructor
    public function __construct($name, $date, $location)
    {
        $this->name = $name;
        $this->date = $date;
        $this->location = $location;
    }

    // Methods
    public function getName()
    {
        return $this->name;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getLocation()
    {
        return $this->location;
    }
}
?>