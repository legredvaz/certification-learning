<?php

namespace Certification\Learning\Controller\Page;
use Magento\Framework\App\ResponseInterface;
use Certification\Learning\Api\PencilInterface;
use Magento\Framework\App\Action\Context;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Certification\Learning\Model\PencilFactory; 
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\App\Request\Http;
use Certification\Learning\Model\HeavyService;

class HelloWorld extends \Magento\Framework\App\Action\Action{

	protected $pencilInterface;

	protected $resultJsonFactory;

	protected $productRepositoryInterface;

	protected $pencilFactory;

	protected $productFactory; 

	protected $_eventManager; 

	protected $http; 

	protected $heavyService;

 public function __construct(Context $context, PencilInterface $pencilInterface,
 	\Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
 	ProductRepositoryInterface $productRepositoryInterface,
 	PencilFactory $pencilFactory,
 	ProductFactory $productFactory,
 	ManagerInterface $_eventManager,
 	Http $http,
 	HeavyService $heavyService){
 	$this->pencilInterface = $pencilInterface;
 	$this->resultJsonFactory = $resultJsonFactory;
 	$this->productRepositoryInterface = $productRepositoryInterface; // used to get default implemntation class of productRepositoryInterface
 	$this->pencilFactory = $pencilFactory;
 	$this->productFactory = $productFactory;
 	$this->_eventManager = $_eventManager;
 	$this->http = $http;
 	$this->heavyService = $heavyService;
	parent::__construct($context);
	} 

 public function execute()
    {
   /* 	$resultJson = $this->resultJsonFactory->create();

   // return $resultJson->setData(['success' => $this->pencilInterface->getPencilType()]);

    //	return $resultJson->setData(['success' => get_class($this->productRepositoryInterface)]);

    	$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    	$book = $objectManager->create('Certification\Learning\Model\Book');
    	var_dump($book);
    	$student = $objectManager->create('Certification\Learning\Model\Student');
    	var_dump($student);
    	$pencil = $objectManager->create('Certification\Learning\Model\Pencil');
    	var_dump($pencil);

    	$pencilfact = $this->pencilFactory->create(array("name" => "legred","school" => "INternational"));
    	var_dump($pencilfact);


    	$product = $this->productFactory->create()->load(2);
    	$product->setName("Iphone 6");
    	$productName = $product->getIdBySku('1339');
    	//var_dump($productName);
		*/
		//echo "Main method"."</br>";

	/*	$message =  new \Magento\Framework\DataObject(array("greeting" => "Good Afternoon" ));
		$this->_eventManager->dispatch('custom_event',['greeting'=>$message]);
		echo $message->getGreeting(); */

		$id = $this->http->getParam('id', 0);
		if($id == 1)
		{
			$this->heavyService->printheavy();
		}
		else
		{
			echo "heavy service not used";
		}
    }
	
}