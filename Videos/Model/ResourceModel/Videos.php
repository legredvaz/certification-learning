<?php

namespace Sjinnovation\Videos\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Videos extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('prt_videos', 'video_id');
    }
}