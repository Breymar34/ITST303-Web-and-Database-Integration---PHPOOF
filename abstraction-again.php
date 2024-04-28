<?php
class Op{
    private $x;
    private $y;

    public function get($x,$y){
        $this->x = $x;
        $this->y = $y;
        $this->set();
    }
    private function set(){
       echo $this->x + $this->y;
    }
}
$obj = new Op();
$obj->get(2,3);
