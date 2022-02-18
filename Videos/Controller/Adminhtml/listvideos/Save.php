<?php
namespace Sjinnovation\Videos\Controller\Adminhtml\listvideos;
use Magento\Backend\App\Action;
use Sjinnovation\Videos\Model\Videos as Videos;

class Save extends \Magento\Backend\App\Action
{

  protected $forwardFactory;

  protected $videoModel;

  public function __construct(Videos $videoModel, Action\Context $context)
  {
    $this->videoModel = $videoModel;
    parent::__construct($context);
  }

  protected function _isAllowed()
  {
    return $this->_authorization->isAllowed("Sjinnovation_Videos::parent");
  }

    public function execute()
    {
     /* $this->_view->loadLayout();
    //  $this->_view->renderLayout();

        $videosDatas = $this->getRequest()->getParam('video');
        if(is_array($videosDatas)) {
            $video = $this->_objectManager->create(Videos::class);
            $video->setData($videosDatas)->save(); */
            
          // return $resultRedirect->setPath('*/*/index');
       // }

      $data = $this->getRequest()->getPostValue();
      $resultRedirect = $this->resultRedirectFactory->create(); 

      if($data){
        $video = $this->getRequest()->getParam('video');
        if(array_key_exists("video_id",$video)) {
           $id = $video["video_id"];
           $this->videoModel->load($id);
        }
        try {
           $this->videoModel->setData($data["video"])->save();
           $this->messageManager->addSuccessMessage(__("Video Saved"));
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