<?php
/**
 *
 * Fastgento SanMar setup resource model
 *
 * @category Fastgento
 * @package Fastgento_SanMar
 */
class Fastgento_SanMar_Model_Resource_Setup extends Mage_Eav_Model_Entity_Setup
{
    /**
     * Create new attribute set
     *
     * @param $name
     * @param $skeletonID
     */
    public function createAttributeSet($name, $skeletonID)
    {
        /** @var integer $entityTypeId */
        $entityTypeId = Mage::getModel('catalog/product')
            ->getResource()
            ->getEntityType()
            ->getId();
        $attributeSet = Mage::getModel('eav/entity_attribute_set')
            ->setEntityTypeId($entityTypeId)
            ->setAttributeSetName($name);

        $attributeSet->validate();
        $attributeSet->save();

        $attributeSet->initFromSkeleton($skeletonID)->save();
    }
}
