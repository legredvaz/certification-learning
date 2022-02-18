<?php

namespace Sjinnovation\Videos\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Categories extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('prt_video_categories', 'category_id');
    }
}