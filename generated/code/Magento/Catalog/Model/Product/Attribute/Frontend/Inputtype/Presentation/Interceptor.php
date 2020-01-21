<?php
namespace Magento\Catalog\Model\Product\Attribute\Frontend\Inputtype\Presentation;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Attribute\Frontend\Inputtype\Presentation
 */
class Interceptor extends \Magento\Catalog\Model\Product\Attribute\Frontend\Inputtype\Presentation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function getPresentationInputType(\Magento\Catalog\Model\ResourceModel\Eav\Attribute $attribute) : ?string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPresentationInputType');
        if (!$pluginInfo) {
            return parent::getPresentationInputType($attribute);
        } else {
            return $this->___callPlugins('getPresentationInputType', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function convertPresentationDataToInputType(array $data) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertPresentationDataToInputType');
        if (!$pluginInfo) {
            return parent::convertPresentationDataToInputType($data);
        } else {
            return $this->___callPlugins('convertPresentationDataToInputType', func_get_args(), $pluginInfo);
        }
    }
}
