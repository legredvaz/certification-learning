<?php
namespace Sjinnovation\Videos\Controller\Adminhtml\listvideos;
use Magento\Backend\App\Action;
use Sjinnovation\Videos\Model\Videos as Videos;

class Delete extends \Magento\Backend\App\Action
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
      $resultRedirect = $this->resultRedirectFactory->create(); 
      $id = $this->getRequest()->getParam('id');
      if($id)
       {
        $this->videoModel->load($id);
        try {
           $this->videoModel->delete();
           $this->messageManager->addSuccessMessage(__("Video Deleted"));

        }
        catch(\Exception $e)
        {
          $this->messageManager->addErrorMessage($e->getMessage());
        }
       
       }

       return $resultRedirect->setPath('*/*/index');
    }
  }