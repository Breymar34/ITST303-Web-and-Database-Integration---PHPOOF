<?php
class Tatay{
    public function x() {
        echo "Matangos ang ilong";
    }
}

class Nanay extends Tatay{
    public function y(){
        echo "Matangkad";
    }
}

class Anak extends Nanay{
    public function z(){
        echo "Maputi";
    }
}

$obj = new Anak();
$obj->x();
$obj->y();
$obj->z();


