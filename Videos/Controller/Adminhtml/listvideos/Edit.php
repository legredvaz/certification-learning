<?php
namespace Sjinnovation\Videos\Controller\Adminhtml\listvideos;
use Magento\Backend\App\Action;
use Sjinnovation\Videos\Model\Videos;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Registry;

class Edit extends \Magento\Backend\App\Action
{

  protected $pageFactory;

  protected $videos;

  protected $registry;

  public function __construct(Videos $videos, Registry $registry, PageFactory $pageFactory, Action\Context $context)
  {
    $this->registry = $registry;
    $this->videos = $videos;
    $this->pageFactory = $pageFactory;
    parent::__construct($context);
  }

  protected function _isAllowed()
  {
    return $this->_authorization->isAllowed("Sjinnovation_Videos::parent");
  }

  public function execute()
  {
   $id = $this->getRequest()->getParams("id");
   $model = $this->videos;
   if($id)
   {
    $model->load($id);
    if(!$model->getId()) {
      $this->messageManager->addErrorMessage(__("No user exist"));
      $result = $this->resultRedirectFactory->create();
      return $result->setPath("videos/listvideos/index");
    }

   }
   $data = $this->_getSession()->getFormData(true);
    if(!empty($data))
    {
      $model->setData($data);
    }

    $this->registry->register("video",$model);

    $resultPage = $this->pageFactory->create();

    $resultPage->addBreadcrumb($id ? __("Edit Video") : __("Add a New Video"),$id ? __("Edit Video") : __("Add a New Video"));

    if($id)
   {
    $resultPage->getConfig()->getTitle()->prepend("Edit Video");
   }
   else
   {
    $resultPage->getConfig()->getTitle()->prepend("Add a New Video");
   }

   return $resultPage;
  }

   /* public function execute()
    {
      $this->_view->loadLayout();
      $this->_view->renderLayout();

        $videosDatas = $this->getRequest()->getParam('video');
        if(is_array($videosDatas)) {
            $video = $this->_objectManager->create(Videos::class);
            $video->setData($videosDatas)->save();
            $resultRedirect = $this->resultRedirectFactory->create(); */
          //  return $resultRedirect->setPath('*/*/index');
       // }
   // } 
}