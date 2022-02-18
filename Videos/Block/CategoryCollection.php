<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Catalog breadcrumbs
 */
namespace Sjinnovation\Videos\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Sjinnovation\Videos\Model\ResourceModel\Categories\CollectionFactory;
use Sjinnovation\Videos\Model\ResourceModel\Videos\CollectionFactory as VideoCollectionFactory;

class CategoryCollection extends \Magento\Framework\View\Element\Template
{
    /**
     * Catalog data
     *
     * @var Data
     */
    protected $categoryCollection;

    protected $videoCollection;

    /**
     * @param Context $context
     * @param Data $catalogData
     * @param array $data
     */
    public function __construct(Context $context,  CollectionFactory $categoryCollectionFactory, VideoCollectionFactory $videoCollection, array $data = [])
    {
        $this->categoryCollection = $categoryCollectionFactory->create();
        $this->videoCollection = $videoCollection;
        parent::__construct($context, $data);
    }

    /**
     * Retrieve HTML title value separator (with space)
     *
     * @param null|string|bool|int|Store $store
     * @return string
     */
   public function getCategoryCollection()
   {
    return $this->categoryCollection->getData();
   }

   public function getVideosByCategory($categoryId)
   {
      return  $this->videoCollection->create()->addFieldToSelect('*')->addFieldToFilter('category_id',['eq' => $categoryId]);
   }

   public function getAllCategoriesVideos()
   {
    $value = 0;
      return  $this->videoCollection->create()->addFieldToSelect('*')->addFieldToFilter('category_id',['gt' => $value]);
   }
}
