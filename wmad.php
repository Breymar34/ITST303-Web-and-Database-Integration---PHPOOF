<?php
class Accumulate{
   private $a;
   private $b;

   public function get($q,$w){
    $this->a = $q;
    $this->b = $w;
   }
   public function set(){
    return $this->a + $this->b;
   }
}
class Execute extends Accumulate{
    private function formula(){
    }

}

$obj = new Accumulate();
$obj::get(5,4);

