<?php
class House{
    public $electronics;
    private $consumable;
    public $pwde = "Hello World";
    private $dpwde = "Awts";

    // public function kusina($dekuryente,$nauubos){
    //     $this->electronics = $dekuryente;
    //     $this->consumable = $nauubos;
    //     $message = "Ang ".$this->electronics." at ".$this->consumable;
    // }

    public function pwdesalahat()
    {
        echo $this->dpwde;
    }

}

$bahay = new House();
$bahay->pwdesalahat();