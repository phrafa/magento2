<?php
namespace Magento\Rma\Block\Returns\Tracking\Package;

/**
 * Interceptor class for @see \Magento\Rma\Block\Returns\Tracking\Package
 */
class Interceptor extends \Magento\Rma\Block\Returns\Tracking\Package implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Stdlib\DateTime\DateTimeFormatterInterface $dateTimeFormatter, \Magento\Rma\Helper\Data $rmaData, array $data = [], ?\Magento\Framework\Serialize\SerializerInterface $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $dateTimeFormatter, $rmaData, $data, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function formatDeliveryDateTime($date, $time)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatDeliveryDateTime');
        if (!$pluginInfo) {
            return parent::formatDeliveryDateTime($date, $time);
        } else {
            return $this->___callPlugins('formatDeliveryDateTime', func_get_args(), $pluginInfo);
        }
    }
}
