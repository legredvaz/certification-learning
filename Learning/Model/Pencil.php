<?php

namespace Certification\Learning\Model;

use Certification\Learning\Api\PencilInterface;
use Certification\Learning\Api\Color;
use Certification\Learning\Api\Size;

class Pencil implements PencilInterface {

   protected $color;

   protected $size;

   protected $name;

   protected $school;


   public function __construct(Color $color,Size $size, $name = null, $school = null)
   {
   	$this->color = $color;
   	$this->size = $size;
      $this->name = $name;
      $this->school = $school;

   }

	public function getPencilType(){
      return "our pencil has ".$this->color->getColor()." color and ".$this->size->getSize()." size";
	}

}