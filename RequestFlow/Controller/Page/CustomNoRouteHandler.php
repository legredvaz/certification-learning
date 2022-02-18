<?php

namespace Certification\RequestFlow\Controller\Page;

class CustomNoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface {


 public function process(\Magento\Framework\App\RequestInterface $request)
    {
  		$request->setRouteName("noroutefound")->setControllerName("page")->setActionName("CustomNoRoute");
      return true;
    }
	
}