<?php

namespace Certification\Learning\Model;


use Certification\Learning\Api\Brightness;

class Medium implements Brightness {

	protected $brightness;

	public function getBrightness(){
		return "yellow";
	}

}