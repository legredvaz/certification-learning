<?php
namespace Sjinnovation\Videos\Controller\Adminhtml\listcategories;
use Magento\Backend\App\Action;
use Sjinnovation\Videos\Model\Categories as Categories;

class SaveCategory extends \Magento\Backend\App\Action
{

  protected $forwardFactory;

  protected $categoryModel;

  public function __construct(Categories $categoryModel, Action\Context $context)
  {
    $this->categoryModel = $categoryModel;
    parent::__construct($context);
  }

  protected function _isAllowed()
  {
    return $this->_authorization->isAllowed("Sjinnovation_Videos::parent");
  }

    public function execute()
    {


      $data = $this->getRequest()->getPostValue();
      $resultRedirect = $this->resultRedirectFactory->create(); 

      if($data){
        $category = $this->getRequest()->getParam('category');
        if(array_key_exists("category_id",$category)) {
           $id = $category["category_id"];
           $this->categoryModel->load($id);
        }
        try {
           $this->categoryModel->setData($data["category"])->save();
           $this->messageManager->addSuccessMessage(__("Category Saved"));
           $this->_getSession()->getFormData(false);
     // if($this->getRequest()->getParam('back')) {
       //     return $resultRedirect->setPath('*/*/edit',['id' =>$video["video_id"], '_current' => true]);
      //     } */
           return $resultRedirect->setPath('*/*/index');

        }
        catch(\Exception $e)
        {
          $this->messageManager->addErrorMessage($e->getMessage());
        }
       
      }

      return $resultRedirect->setPath('*/*/index');
    } 
}