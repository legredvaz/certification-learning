<?php

namespace Certification\Learning\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
class OurObserver implements ObserverInterface {


	public function execute(Observer $observer)
	{
		$message = $observer->getData('greeting');
		$message->setGreeting("good evening");
	}



}