<?php
namespace Magento\Staging\Model\Update\Grid\SearchResult;

/**
 * Interceptor class for @see \Magento\Staging\Model\Update\Grid\SearchResult
 */
class Interceptor extends \Magento\Staging\Model\Update\Grid\SearchResult implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, $mainTable, $resourceModel, \Magento\Staging\Model\StagingList $stagingList, \Magento\Staging\Model\VersionHistoryInterface $versionHistory, \Magento\Staging\Model\Update\Includes\Retriever $includes, \Magento\Staging\Model\Update\Includes\Hierarchy $hierarchy, ?\Magento\Framework\Intl\DateTimeFactory $dateTimeFactory = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $mainTable, $resourceModel, $stagingList, $versionHistory, $includes, $hierarchy, $dateTimeFactory);
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
