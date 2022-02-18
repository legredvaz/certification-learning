<?php

namespace Certification\Learning\Plugin;

class PluginSolution {

/*	public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name) {
		return "Before name".$name;
	}

	 public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
		return $result." After plugin";
	} */

 /*	public function aroundGetName(\Magento\Catalog\Model\Product $subject, callable $proceed) {

		echo "Before proceed <br>";
		$name = $proceed();
		echo $name;
		echo "afer proceed <br>";

		return $name;
	}

	public function aroundGetIdBySku(\Magento\Catalog\Model\Product $subject, callable $proceed, $sku) {

		echo "Before proceed <br>";
		$id = $proceed($sku);
		echo $id;
		echo "afer proceed <br>";

		return $id;
	}
*/

	public function beforeExecute(\Certification\Learning\Controller\Page\HelloWorld $subject) {
		echo "before execute sort order 10"."</br>";
	}

	public function afterExecute(\Certification\Learning\Controller\Page\HelloWorld $subject) {
		echo "after execute sort order 10"."</br>";
	}

  	public function aroundExecute(\Certification\Learning\Controller\Page\HelloWorld $subject, callable $proceed ) {
		echo "before proceed sort order 10"."</br>";
		$proceed();
		echo "after proceed sort order 10"."</br>";

	} 
}