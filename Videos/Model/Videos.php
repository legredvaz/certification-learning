<?php

namespace Sjinnovation\Videos\Model;

use Magento\Framework\Model\AbstractModel;

class Videos extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Sjinnovation\Videos\Model\ResourceModel\Videos::class);
    }
    
}