<?php
class Op{
    private $x; //global
    private $y; //global

    public function add($a,$b){ //local
        $this->x = $a;
        $this->y = $b;
        $result = $this->x + $this->y;
        return $result; //local
    }

}

$Op = new Op();
$sagot = $Op->add(4,5);
echo $sagot;

