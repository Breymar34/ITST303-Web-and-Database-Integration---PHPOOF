<?php
class X{
    public function a(){
        echo "AAAAAA";
    }
}
class Y extends X{
    public function B(){
        echo "BBBBBA";
    }
}

$obj = new Y();
$obj->a();