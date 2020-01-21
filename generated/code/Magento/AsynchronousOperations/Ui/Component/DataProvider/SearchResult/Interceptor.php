<?php
namespace Magento\AsynchronousOperations\Ui\Component\DataProvider\SearchResult;

/**
 * Interceptor class for @see \Magento\AsynchronousOperations\Ui\Component\DataProvider\SearchResult
 */
class Interceptor extends \Magento\AsynchronousOperations\Ui\Component\DataProvider\SearchResult implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Authorization\Model\UserContextInterface $userContextInterface, \Magento\AsynchronousOperations\Model\StatusMapper $statusMapper, \Magento\AsynchronousOperations\Model\BulkStatus\CalculatedStatusSql $calculatedStatusSql, $mainTable = 'magento_bulk', $resourceModel = null, $identifierName = 'uuid')
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $userContextInterface, $statusMapper, $calculatedStatusSql, $mainTable, $resourceModel, $identifierName);
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
