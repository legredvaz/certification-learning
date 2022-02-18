<?php

namespace Sjinnovation\Videos\Model;

use Magento\Framework\Model\AbstractModel;

class Categories extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Sjinnovation\Videos\Model\ResourceModel\Categories::class);
    }
    
}