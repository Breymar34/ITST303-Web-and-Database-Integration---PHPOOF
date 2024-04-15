<?php
class Dog{
  private $sound ="Whooopppp";
  public function bark($animal)
  {
    return "The ".$animal." sounds ".$this->sound;
  }
}

class Cat extends Dog{
   private $sound ="Meow";
   public function bark($animal)
   {
      return "The ".$animal." sounds ".$this->sound;
   }
 }

 $pusa = new Dog();
 echo $pusa->bark("Cat");



