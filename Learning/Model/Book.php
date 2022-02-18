<?php

namespace Certification\Learning\Model;

use Certification\Learning\Api\Color;
use Certification\Learning\Api\Size;

class Book {

   protected $color;

   protected $size;

   public function __construct(Color $color,Size $size)
   {
   	$this->color = $color;
   	$this->size = $size;
   }

}