<?php
namespace Sjinnovation\Videos\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface
{
	public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context ) {
		$installer = $setup;

		$installer->startSetup();

		if(version_compare($context->getVersion(), '1.1.0', '<')) {
			$tableName = $installer->getTable('prt_video_categories');
			$table = $installer->getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'category_id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'unsigned' => true,
                        'nullable' => false,
                        'primary' => true
                    ],
                    'Video Category ID'
                )
                ->addColumn(
                    'name',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'Category Name'
                )->setComment('Portable restroom Video categories');
            $installer->getConnection()->createTable($table);

			$installer->getConnection()->addColumn(
				$installer->getTable('prt_videos'),
				'category_id',
				[
					'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
					'nullable' => true,
					'comment' => 'Video Category ID'
				]
			);


		}

		$installer->endSetup();


	}
}
