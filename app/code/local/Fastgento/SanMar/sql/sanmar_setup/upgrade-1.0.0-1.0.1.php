<?php
/**
 * @category    Fastgento_SanMar
 * @package     SanMar
 * @copyright   Copyright (c) 2015 Fastgento.
 */

/**
 * Installed all text attributes
 *
 * @var Fastgento_SanMar_Model_Resource_Setup $installer
 */

$installer = $this;

$installer->startSetup();
$attributeSetId = Mage::getModel('eav/entity_attribute_set')
    ->getCollection()
    ->addFieldToFilter('attribute_set_name', array('eq' => 'SanMar attributes'))
    ->getFirstItem()
    ->getId();
$entityTypeId = $installer->getEntityTypeId('catalog_product');
$attributeGroupName = 'San Mar';

$installer->addAttributeGroup($entityTypeId, $attributeSetId, $attributeGroupName);

$installer->addAttribute('catalog_product', 'style', array(
    'type'                     => 'text',
    'label'                    => 'STYLE#',
    'input'                    => 'text',
    'required'                 => false,
    'group'                    => $attributeGroupName,
    'visible_on_front'         => true,
    'is_visible'               => true,
    'user_defined'             => true,
));
$installer->addAttribute('catalog_product', 'available_sizes', array(
    'type'                     => 'text',
    'label'                    => 'AVAILABLE_SIZES',
    'input'                    => 'text',
    'required'                 => false,
    'group'                    => $attributeGroupName,
    'visible_on_front'         => true,
    'is_visible'               => true,
    'user_defined'             => true,
));
$installer->addAttribute('catalog_product', 'price_text', array(
    'type'                     => 'text',
    'label'                    => 'PRICE_TEXT',
    'input'                    => 'text',
    'required'                 => false,
    'group'                    => $attributeGroupName,
    'visible_on_front'         => true,
    'is_visible'               => true,
    'user_defined'             => true,
));
$installer->addAttribute('catalog_product', 'color_name', array(
    'type'                     => 'text',
    'label'                    => 'COLOR_NAME',
    'input'                    => 'text',
    'required'                 => false,
    'group'                    => $attributeGroupName,
    'visible_on_front'         => true,
    'is_visible'               => true,
    'user_defined'             => true,
));
$installer->addAttribute('catalog_product', 'size', array(
    'type'                     => 'text',
    'label'                    => 'SIZE',
    'input'                    => 'text',
    'required'                 => false,
    'group'                    => $attributeGroupName,
    'visible_on_front'         => true,
    'is_visible'               => true,
    'user_defined'             => true,
));
$installer->addAttribute('catalog_product', 'piece_weight', array(
    'type'                     => 'text',
    'label'                    => 'PIECE_WEIGHT',
    'input'                    => 'text',
    'required'                 => false,
    'group'                    => $attributeGroupName,
    'visible_on_front'         => true,
    'is_visible'               => true,
    'user_defined'             => true,
));
