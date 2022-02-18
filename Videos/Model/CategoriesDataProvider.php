<?php
namespace Sjinnovation\Videos\Model;
 
use Sjinnovation\Videos\Model\ResourceModel\Categories\CollectionFactory;
 
class CategoriesDataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $employeeCollectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $categoriesCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $categoriesCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }
 
    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }

        $items = $this->collection->getItems();
        $this->loadedData = array();
        /** @var Customer $customer */
        foreach ($items as $category) {
            
            $this->loadedData[$category->getId()]['category'] = $category->getData();
        }


        return $this->loadedData;

    }
}