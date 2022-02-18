<?php

namespace Certification\Learning\Model;


class HeavyService {

	public function __construct(){
		echo "heavy service has been intantiared"."</br>";
	}

	public function printheavy(){
		echo "message from heavy class";
	}

}