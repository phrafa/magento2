<?php
namespace Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Attribute\Collection;

/**
 * Interceptor class for @see \Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Attribute\Collection
 */
class Interceptor extends \Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Attribute\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\ConfigurableProduct\Model\Product\Type\Configurable $catalogProductTypeConfigurable, \Magento\Catalog\Helper\Data $catalogData, \Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Attribute $resource, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable $configurableResource = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $storeManager, $catalogProductTypeConfigurable, $catalogData, $resource, $connection, $configurableResource);
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
