<?php
namespace Sjinnovation\Videos\Model\ResourceModel\Categories;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Sjinnovation\Videos\Model\Categories as CategoriesModel;
use Sjinnovation\Videos\Model\ResourceModel\Categories as CategoriesResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(CategoriesModel::class, CategoriesResourceModel::class);
    }
}