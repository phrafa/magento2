<?php
namespace Magento\Store\Model\ResourceModel\Config\Collection\Scoped;

/**
 * Interceptor class for @see \Magento\Store\Model\ResourceModel\Config\Collection\Scoped
 */
class Interceptor extends \Magento\Store\Model\ResourceModel\Config\Collection\Scoped implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Config\Model\ResourceModel\Config\Data $resource, $scope, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, $scopeId = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $resource, $scope, $connection, $scopeId);
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
