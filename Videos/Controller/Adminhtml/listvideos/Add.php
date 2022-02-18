<?php
namespace Sjinnovation\Videos\Controller\Adminhtml\listvideos;
use Magento\Backend\App\Action;
use Sjinnovation\Videos\Model\Videos as Videos;
use Magento\Backend\Model\View\Result\ForwardFactory;

class Add extends \Magento\Backend\App\Action
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
    return $resultForward->forward("edit");
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