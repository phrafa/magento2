<?php
namespace Magento\Staging\Model\Entity\Upcoming\SearchResult;

/**
 * Interceptor class for @see \Magento\Staging\Model\Entity\Upcoming\SearchResult
 */
class Interceptor extends \Magento\Staging\Model\Entity\Upcoming\SearchResult implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\App\RequestInterface $request, \Magento\Staging\Model\VersionManager $versionManager, $entityRequestName, $entityTable, $entityColumn, array $entityFieldsToSelect = [])
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $request, $versionManager, $entityRequestName, $entityTable, $entityColumn, $entityFieldsToSelect);
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
