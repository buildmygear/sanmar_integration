<?php
/**
 * Create new attribute set for San Mar attributes.
 *
 * @var $this Fastgento_SanMar_Model_Resource_Setup
 */
$defaultAttributeSetId = $this->getAttributeSetId('catalog_product', 'default');
$this->createAttributeSet("SanMar attributes", $defaultAttributeSetId);