<?php
class Op{
  public function add()
  { 
   return $args = func_num_args();
  }
}



$op = new Op();
echo $op->add(4,5);
echo $op->add(4,5,3);
echo $op->add(4,5,5,6);


