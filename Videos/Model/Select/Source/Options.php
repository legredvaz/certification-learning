<?php

namespace Sjinnovation\Videos\Model\Select\Source;
use Magento\Framework\Option\ArrayInterface;
class Options implements ArrayInterface
{
    protected $options;

    protected $categoryFactory;

    public function __construct(
        \Sjinnovation\Videos\Model\ResourceModel\Categories\CollectionFactory $categoryFactory
    ) {
        $this->categoryFactory = $categoryFactory;
    }
    public function toOptionArray()
    {
        $categoryModel = $this->categoryFactory->create()->getData();
        $options[] = array( 'label' => 'Please select', 'value' => ''  );
        if( sizeof($categoryModel) > 0 ){
            foreach ( $categoryModel  as $category) {
                $options[] = array( 
                'label' => ucfirst( $category['name'] ) ,
                'value' => $category['category_id'],
                );
            }
        }
        return $options;
        

       // return [array('label' => 'hi','value' => '1' )];
    }
}  

?>