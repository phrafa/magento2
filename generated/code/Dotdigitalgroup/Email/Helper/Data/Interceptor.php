<?php
namespace Dotdigitalgroup\Email\Helper\Data;

/**
 * Interceptor class for @see \Dotdigitalgroup\Email\Helper\Data
 */
class Interceptor extends \Dotdigitalgroup\Email\Helper\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ProductMetadata $productMetadata, \Dotdigitalgroup\Email\Model\ContactFactory $contactFactory, \Dotdigitalgroup\Email\Model\ResourceModel\Contact $contactResource, \Magento\Config\Model\ResourceModel\Config $resourceConfig, \Magento\Framework\App\ResourceConnection $adapter, \Magento\Framework\App\Helper\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Framework\Module\ModuleListInterface $moduleListInterface, \Magento\Store\Model\Store $store, \Magento\Framework\App\Config\Storage\Writer $writer, \Dotdigitalgroup\Email\Model\Apiconnector\ClientFactory $clientFactory, \Dotdigitalgroup\Email\Helper\ConfigFactory $configHelperFactory, \Dotdigitalgroup\Email\Model\Config\Json $serilizer, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone, \Dotdigitalgroup\Email\Model\DateIntervalFactory $dateIntervalFactory, \Magento\Quote\Model\ResourceModel\Quote $quoteResource, \Magento\Quote\Model\QuoteFactory $quoteFactory, \Magento\User\Model\ResourceModel\User $userResource, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Dotdigitalgroup\Email\Logger\Logger $logger, \Magento\Framework\App\RequestInterface $request)
    {
        $this->___init();
        parent::__construct($productMetadata, $contactFactory, $contactResource, $resourceConfig, $adapter, $context, $storeManager, $customerFactory, $moduleListInterface, $store, $writer, $clientFactory, $configHelperFactory, $serilizer, $dateTime, $timezone, $dateIntervalFactory, $quoteResource, $quoteFactory, $userResource, $encryptor, $logger, $request);
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteCustomerMappingDatafields($website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsiteCustomerMappingDatafields');
        if (!$pluginInfo) {
            return parent::getWebsiteCustomerMappingDatafields($website);
        } else {
            return $this->___callPlugins('getWebsiteCustomerMappingDatafields', func_get_args(), $pluginInfo);
        }
    }
}
