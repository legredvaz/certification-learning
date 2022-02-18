<?php

namespace Sjinnovation\Videos\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        // Get tutorial_simplenews table
        $tableName = $installer->getTable('prt_videos');
        // Check if the table already exists
        if ($installer->getConnection()->isTableExists($tableName) != true) {
            // Create tutorial_simplenews table
            $table = $installer->getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'video_id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity' => true,
                        'unsigned' => true,
                        'nullable' => false,
                        'primary' => true
                    ],
                    'Video ID'
                )
                ->addColumn(
                    'title',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'Video Title'
                )
                ->addColumn(
                    'sub_title',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => true],
                    'Video Sub-title'
                )
                ->addColumn(
                    'url',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'Video URL'
                )
                ->addColumn(
                    'banner_url',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'Video banner image'
                )
                ->setComment('Portable restroom Videos');
            $installer->getConnection()->createTable($table);
        }

        $installer->endSetup();
    }
}