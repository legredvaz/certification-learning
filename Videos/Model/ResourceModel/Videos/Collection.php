<?php
namespace Sjinnovation\Videos\Model\ResourceModel\Videos;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Sjinnovation\Videos\Model\Videos as VideosModel;
use Sjinnovation\Videos\Model\ResourceModel\Videos as VideosResourceModel;

class Collection extends AbstractCollection
{

    protected $_idFieldName = 'video_id';

    protected function _construct()
    {
        $this->_init(VideosModel::class, VideosResourceModel::class);
    }
}