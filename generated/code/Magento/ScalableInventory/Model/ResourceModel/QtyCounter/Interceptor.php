<?php
namespace Magento\ScalableInventory\Model\ResourceModel\QtyCounter;

/**
 * Interceptor class for @see \Magento\ScalableInventory\Model\ResourceModel\QtyCounter
 */
class Interceptor extends \Magento\ScalableInventory\Model\ResourceModel\QtyCounter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ScalableInventory\Model\Counter\ItemsBuilder $itemsBuilder, \Magento\Framework\MessageQueue\PublisherInterface $publisher)
    {
        $this->___init();
        parent::__construct($itemsBuilder, $publisher);
    }

    /**
     * {@inheritdoc}
     */
    public function correctItemsQty(array $items, $websiteId, $operator)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'correctItemsQty');
        if (!$pluginInfo) {
            return parent::correctItemsQty($items, $websiteId, $operator);
        } else {
            return $this->___callPlugins('correctItemsQty', func_get_args(), $pluginInfo);
        }
    }
}
