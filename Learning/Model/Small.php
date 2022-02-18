<?php

namespace Certification\Learning\Model;

use Certification\Learning\Api\Size;

class Small implements Size {

	public function getSize(){
		return "small";
	}

}