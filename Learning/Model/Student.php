<?php

namespace Certification\Learning\Model;

class Student {

   public $name;

   public $age;

   public $scores;

   public function __construct($name = "Legred" ,$age = 27, array $scores = array('maths' => 92, "Programming" => 90 ) )
   {
   	$this->name = $name;
   	$this->age = $age;
      $this->scores = $scores;
   }

}