<?php
namespace Sjinnovation\Videos\Controller\Adminhtml\listcategories;
use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\ForwardFactory;

class AddCategory extends \Magento\Backend\App\Action
{

  protected $forwardFactory;

  public function __construct(ForwardFactory $forwardFactory, Action\Context $context)
  {
    $this->forwardFactory = $forwardFactory;
    parent::__construct($context);
  }

  protected function _isAllowed()
  {
    return $this->_authorization->isAllowed("Sjinnovation_Videos::parent");
  }

  public function execute()
  {
    $resultForward = $this->forwardFactory->create();
    return $resultForward->forward("editcategory");
  } 

   /* public function execute()
    {
      $this->_view->loadLayout();
      $this->_view->renderLayout();

        $videosDatas = $this->getRequest()->getParam('video');
        if(is_array($videosDatas)) {
            $video = $this->_objectManager->create(Videos::class);
            $video->setData($videosDatas)->save();
            $resultRedirect = $this->resultRedirectFactory->create(); 
         */ //  return $resultRedirect->setPath('*/*/index');
     /*   }
   } */
}