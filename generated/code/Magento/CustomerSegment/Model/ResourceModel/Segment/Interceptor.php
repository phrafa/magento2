<?php
namespace Magento\CustomerSegment\Model\ResourceModel\Segment;

/**
 * Interceptor class for @see \Magento\CustomerSegment\Model\ResourceModel\Segment
 */
class Interceptor extends \Magento\CustomerSegment\Model\ResourceModel\Segment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\CustomerSegment\Model\ResourceModel\Helper $resourceHelper, \Magento\Customer\Model\Config\Share $configShare, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Quote\Model\ResourceModel\Quote $resourceQuote, \Magento\Quote\Model\QueryResolver $queryResolver, $connectionName = null)
    {
        $this->___init();
        parent::__construct($context, $resourceHelper, $configShare, $dateTime, $resourceQuote, $queryResolver, $connectionName);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteSegmentCustomers($segment)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteSegmentCustomers');
        if (!$pluginInfo) {
            return parent::deleteSegmentCustomers($segment);
        } else {
            return $this->___callPlugins('deleteSegmentCustomers', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function saveCustomersFromSelect($segment, $select)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveCustomersFromSelect');
        if (!$pluginInfo) {
            return parent::saveCustomersFromSelect($segment, $select);
        } else {
            return $this->___callPlugins('saveCustomersFromSelect', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function aggregateMatchedCustomers($segment)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'aggregateMatchedCustomers');
        if (!$pluginInfo) {
            return parent::aggregateMatchedCustomers($segment);
        } else {
            return $this->___callPlugins('aggregateMatchedCustomers', func_get_args(), $pluginInfo);
        }
    }
}
