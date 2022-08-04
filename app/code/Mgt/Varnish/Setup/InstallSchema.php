<?php
 namespace Mgt\Varnish\Setup; use Magento\Framework\Setup\InstallSchemaInterface; use Magento\Framework\Setup\ModuleContextInterface; use Magento\Framework\Setup\SchemaSetupInterface; class InstallSchema implements InstallSchemaInterface { public function install(SchemaSetupInterface $setup, ModuleContextInterface $context) { goto b0c4e; C8fc9: $installer->getConnection()->createTable($table); goto E3f9a; df195: $installer->startSetup(); goto C8a5f; b0c4e: $installer = $setup; goto df195; c1eba: $table = $installer->getConnection()->newTable($installer->getTable("\x6d\x67\164\137\166\x61\x72\156\151\163\150\x5f\x75\162\154\137\x74\x61\x67"))->addColumn("\165\x72\x6c\x5f\151\x64", \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, ["\165\156\x73\x69\x67\x6e\145\144" => true, "\x6e\x75\154\x6c\141\x62\154\x65" => false], "\x55\x52\114\x20\x49\x44")->addColumn("\x74\141\x67", \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 128, ["\156\165\x6c\x6c\x61\142\x6c\x65" => false, "\x64\x65\146\x61\165\x6c\x74" => null], "\x54\141\x67")->addIndex($installer->getIdxName("\x6d\x67\x74\x5f\x76\141\x72\x6e\x69\163\150\137\x75\x72\154\x5f\164\x61\147", ["\x75\162\x6c\137\x69\144"]), ["\165\x72\x6c\137\x69\144"])->addForeignKey($installer->getFkName("\155\x67\164\137\x76\x61\162\x6e\151\x73\150\137\x75\162\x6c\x5f\x74\141\147", "\x75\x72\x6c\137\151\x64", "\x6d\147\164\x5f\x76\141\x72\x6e\x69\x73\x68\137\x75\x72\x6c", "\165\162\x6c\137\151\x64"), "\165\x72\x6c\137\x69\x64", $installer->getTable("\x6d\x67\164\x5f\166\x61\162\x6e\x69\x73\x68\x5f\165\162\154"), "\165\162\154\137\151\x64", \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE)->setComment("\115\x47\124\x20\x56\x61\162\156\x69\x73\150\40\x55\x72\154\40\x54\x61\147"); goto C8fc9; C8a5f: $table = $installer->getConnection()->newTable($installer->getTable("\155\147\x74\137\166\141\162\x6e\151\163\x68\x5f\165\162\154"))->addColumn("\x75\162\x6c\137\x69\x64", \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, ["\151\144\145\156\164\x69\x74\171" => true, "\165\156\x73\151\147\156\145\x64" => true, "\156\165\154\154\141\x62\x6c\x65" => false, "\160\162\151\x6d\141\162\x79" => true], "\x55\x52\x4c\x20\x49\104")->addColumn("\163\x74\x6f\x72\x65\137\151\144", \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT, null, ["\165\x6e\163\x69\x67\x6e\x65\144" => true], "\123\x74\x6f\162\145\x20\111\x44")->addColumn("\160\141\x74\x68", \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 128, ["\156\165\154\x6c\141\x62\x6c\145" => false, "\144\x65\x66\x61\x75\154\164" => null], "\120\x61\164\x68")->addColumn("\143\141\x63\150\145\x5f\x6c\151\x66\x65\164\151\x6d\145", \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, ["\165\x6e\163\151\147\156\x65\x64" => true, "\156\x75\x6c\x6c\x61\x62\x6c\145" => false], "\x43\x61\x63\150\x65\40\x4c\x69\146\x65\164\x69\155\x65")->addColumn("\x63\141\143\x68\x65\x5f\145\170\x70\151\x72\145\144\x5f\x61\x74", \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME, null, ["\156\x75\x6c\x6c\141\142\x6c\x65" => false], "\x43\x61\143\x68\x65\40\105\x78\x70\x69\162\x61\x74\x69\x6f\156\x20\104\141\164\x65")->addColumn("\143\x72\x65\x61\164\145\144\137\141\164", \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP, null, ["\156\x75\154\x6c\x61\x62\154\x65" => false, "\144\145\146\x61\x75\154\x74" => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT], "\x43\x72\145\x61\164\x69\157\x6e\x20\124\151\155\x65")->addIndex($installer->getIdxName("\x6d\147\x74\x5f\x76\141\162\x6e\151\163\150\x5f\x75\162\154\137\x71\165\x65\x75\145", ["\163\164\x6f\x72\x65\x5f\151\x64"]), ["\x73\x74\157\x72\145\137\x69\x64"])->addForeignKey($installer->getFkName("\x6d\x67\164\x5f\x76\x61\162\156\151\x73\150\137\165\162\154", "\163\164\157\x72\x65\x5f\x69\144", "\x73\164\x6f\162\x65", "\163\164\157\x72\145\137\151\144"), "\163\164\x6f\x72\x65\x5f\x69\x64", $installer->getTable("\163\164\x6f\162\x65"), "\x73\x74\x6f\x72\145\137\151\x64", \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE)->setComment("\x4d\x47\124\x20\x56\141\162\156\x69\x73\150\40\125\x72\154"); goto Aff87; E3f9a: $table = $installer->getConnection()->newTable($installer->getTable("\x6d\x67\x74\x5f\166\141\162\156\151\x73\150\137\x75\x72\154\137\x71\x75\145\165\145"))->addColumn("\165\162\154\x5f\x69\x64", \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, ["\151\x64\145\156\x74\x69\x74\x79" => true, "\165\156\163\x69\x67\x6e\145\x64" => true, "\x6e\x75\x6c\x6c\x61\142\154\145" => false, "\x70\162\x69\155\141\162\x79" => true], "\125\122\x4c\40\111\104")->addColumn("\x73\164\157\x72\145\x5f\x69\144", \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT, null, ["\165\156\x73\151\147\156\x65\144" => true], "\123\x74\157\x72\145\x20\x49\104")->addColumn("\x70\141\164\150", \Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 128, ["\156\x75\x6c\x6c\141\142\x6c\145" => false, "\144\x65\146\x61\x75\154\164" => null], "\x50\x61\x74\x68")->addColumn("\160\162\151\x6f\x72\151\x74\x79", \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER, null, ["\x75\156\163\151\x67\156\145\144" => true, "\156\x75\154\154\x61\x62\154\145" => false, "\x64\x65\x66\141\165\x6c\x74" => "\60"], "\120\162\x69\157\x72\151\x74\171")->addColumn("\x63\162\145\141\x74\x65\144\137\x61\x74", \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP, null, ["\156\165\x6c\154\141\x62\x6c\145" => false, "\x64\145\146\141\165\x6c\x74" => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT], "\103\x72\145\141\x74\x69\157\156\x20\124\x69\x6d\145")->addIndex($installer->getIdxName("\155\147\164\137\x76\x61\162\x6e\x69\163\150\x5f\165\162\x6c\x5f\x71\165\145\x75\145", ["\163\x74\x6f\x72\x65\x5f\x69\144"]), ["\x73\x74\157\x72\145\137\151\144"])->addIndex($installer->getIdxName("\155\x67\164\x5f\166\141\x72\x6e\151\163\150\137\165\x72\154\137\x71\x75\145\x75\145\x5f\x73\x74\x6f\x72\145\137\151\144\137\160\x61\x74\150", ["\x73\164\157\x72\x65\137\x69\144", "\160\x61\x74\x68"], \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE), ["\163\164\157\162\145\137\151\x64", "\x70\141\x74\x68"], ["\x74\x79\160\145" => \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE])->addForeignKey($installer->getFkName("\x6d\x67\x74\x5f\x76\141\162\x6e\151\x73\150\137\165\x72\x6c\137\161\x75\145\165\145", "\163\164\157\162\x65\137\x69\144", "\163\164\157\x72\x65", "\163\164\x6f\x72\145\137\x69\144"), "\x73\x74\157\162\x65\137\151\x64", $installer->getTable("\163\164\157\162\145"), "\x73\164\x6f\162\145\x5f\151\144", \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE)->setComment("\115\107\x54\40\x56\x61\x72\x6e\151\x73\x68\x20\125\162\154\40\121\x75\x65\165\145"); goto F4505; F4505: $installer->getConnection()->createTable($table); goto dfedb; Aff87: $installer->getConnection()->createTable($table); goto c1eba; dfedb: $installer->endSetup(); goto d3ef6; d3ef6: } }
