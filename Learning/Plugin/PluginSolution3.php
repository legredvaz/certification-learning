<?php

namespace Certification\Learning\Plugin;

class PluginSolution3 {



	public function beforeExecute(\Certification\Learning\Controller\Page\HelloWorld $subject) {
		echo "before execute sort order 30"."</br>";
	}

	public function afterExecute(\Certification\Learning\Controller\Page\HelloWorld $subject) {
		echo "after execute sort order 30"."</br>";
	}

 	public function aroundExecute(\Certification\Learning\Controller\Page\HelloWorld $subject, callable $proceed ) {
		echo "before proceed sort order 30"."</br>";
		$proceed();
		echo "after proceed sort order 30"."</br>";

	}   
}