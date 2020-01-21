<?php
namespace Magento\Sales\Model\ResourceModel\Sale\Collection;

/**
 * Interceptor class for @see \Magento\Sales\Model\ResourceModel\Sale\Collection
 */
class Interceptor extends \Magento\Sales\Model\ResourceModel\Sale\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Store\Model\ResourceModel\Store\CollectionFactory $storeCollectionFactory, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $storeCollectionFactory, $storeManager);
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
