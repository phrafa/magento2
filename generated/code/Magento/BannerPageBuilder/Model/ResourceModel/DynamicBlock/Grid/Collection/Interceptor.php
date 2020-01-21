<?php
namespace Magento\BannerPageBuilder\Model\ResourceModel\DynamicBlock\Grid\Collection;

/**
 * Interceptor class for @see \Magento\BannerPageBuilder\Model\ResourceModel\DynamicBlock\Grid\Collection
 */
class Interceptor extends \Magento\BannerPageBuilder\Model\ResourceModel\DynamicBlock\Grid\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, $mainTable, $eventPrefix, $eventObject, $resourceModel, \Magento\BannerCustomerSegment\Model\ResourceModel\BannerSegmentLink $bannerSegmentLink, \Magento\CustomerSegment\Model\ResourceModel\Segment\Collection $customerSegmentCollection, $model = 'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\Document', ?\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null, $connection = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $mainTable, $eventPrefix, $eventObject, $resourceModel, $bannerSegmentLink, $customerSegmentCollection, $model, $resource, $connection);
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
