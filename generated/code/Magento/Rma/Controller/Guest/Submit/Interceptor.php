<?php
namespace Magento\Rma\Controller\Guest\Submit;

/**
 * Interceptor class for @see \Magento\Rma\Controller\Guest\Submit
 */
class Interceptor extends \Magento\Rma\Controller\Guest\Submit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Rma\Model\RmaFactory $rmaModelFactory, \Magento\Sales\Model\OrderRepository $orderRepository, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime, \Magento\Rma\Model\Rma\Status\HistoryFactory $statusHistoryFactory, \Magento\Rma\Api\CommentManagementInterface $commentManagement, ?\Magento\Rma\Helper\Data $rmaHelper = null, ?\Magento\Sales\Helper\Guest $salesGuestHelper = null)
    {
        $this->___init();
        parent::__construct($context, $rmaModelFactory, $orderRepository, $logger, $dateTime, $statusHistoryFactory, $commentManagement, $rmaHelper, $salesGuestHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
