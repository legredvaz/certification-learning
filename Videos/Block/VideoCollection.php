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
use Sjinnovation\Videos\Model\ResourceModel\Videos\CollectionFactory;

class VideoCollection extends \Magento\Framework\View\Element\Template
{
    /**
     * Catalog data
     *
     * @var Data
     */
    protected $videoCollection;

    /**
     * @param Context $context
     * @param Data $catalogData
     * @param array $data
     */
    public function __construct(Context $context,  CollectionFactory $videosCollectionFactory, array $data = [])
    {
        $this->videoCollection = $videosCollectionFactory->create();
        parent::__construct($context, $data);
    }

    /**
     * Retrieve HTML title value separator (with space)
     *
     * @param null|string|bool|int|Store $store
     * @return string
     */
   public function getVideoCollection()
   {
    return $this->videoCollection->getData();
   }
}
