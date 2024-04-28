<?php
class Ligaw{
    //3WMAD1
    private $girl = 'Andrea Cruz';
    
    private function classmates()
    { return "Classmates of ".$this->girl;}

    public function teacher()
    { return "Teacher of ".$this->girl;}
}

$obj = new Ligaw();
echo $obj->teacher();


