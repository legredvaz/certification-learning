<?php

namespace Certification\Learning\Model;

use Certification\Learning\Api\Color;
use Certification\Learning\Api\Brightness;

class Yellow implements Color {

	protected $brightness;

	public function __construct(Brightness $brightness)
	{
		$this->brightness = $brightness;
	}

	public function getColor(){
		return "yellow";
	}

}