<?php

namespace Certification\Learning\Model;

use Certification\Learning\Api\Size;

class Big implements Size {

	public function getSize(){
		return "big";
	}

}