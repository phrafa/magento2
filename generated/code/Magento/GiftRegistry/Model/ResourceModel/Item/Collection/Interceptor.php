<?php
namespace Magento\GiftRegistry\Model\ResourceModel\Item\Collection;

/**
 * Interceptor class for @see \Magento\GiftRegistry\Model\ResourceModel\Item\Collection
 */
class Interceptor extends \Magento\GiftRegistry\Model\ResourceModel\Item\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Quote\Model\Quote\Config $salesQuoteConfig, \Magento\GiftRegistry\Model\Item\OptionFactory $optionFactory, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $salesQuoteConfig, $optionFactory, $productFactory, $storeManager, $connection, $resource);
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectCountSql()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectCountSql');
        if (!$pluginInfo) {
            return parent::getSelectCountSql();
        } else {
            return $this->___callPlugins('getSelectCountSql', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadWithFilter($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadWithFilter');
        if (!$pluginInfo) {
            return parent::loadWithFilter($printQuery, $logQuery);
        } else {
            return $this->___callPlugins('loadWithFilter', func_get_args(), $pluginInfo);
        }
    }
}
