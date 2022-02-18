<?php

namespace Certification\Learning\Model;


use Certification\Learning\Api\Brightness;

class High implements Brightness {

	protected $brightness;

	public function getBrightness(){
		return "yellow";
	}

}