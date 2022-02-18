<?php
namespace Sjinnovation\Videos\Controller\Adminhtml\listcategories;
use Magento\Backend\App\Action;
use Sjinnovation\Videos\Model\Categories;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Registry;

class EditCategory extends \Magento\Backend\App\Action
{

  protected $pageFactory;

  protected $categories;

  protected $registry;

  public function __construct(Categories $categories, Registry $registry, PageFactory $pageFactory, Action\Context $context)
  {
    $this->registry = $registry;
    $this->categories = $categories;
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
   $model = $this->categories;
   if($id)
   {
    $model->load($id);
    if(!$model->getId()) {
      $this->messageManager->addErrorMessage(__("No user exist"));
      $result = $this->resultRedirectFactory->create();
      return $result->setPath("videos/listcategories/index");
    }

   }
   $data = $this->_getSession()->getFormData(true);
    if(!empty($data))
    {
      $model->setData($data);
    }

    $this->registry->register("category",$model);

    $resultPage = $this->pageFactory->create();

    $resultPage->addBreadcrumb($id ? __("Edit Category") : __("Add a New Category"),$id ? __("Edit Category") : __("Add a New Category"));

    if($id)
   {
    $resultPage->getConfig()->getTitle()->prepend("Edit Category");
   }
   else
   {
    $resultPage->getConfig()->getTitle()->prepend("Add a New Category");
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