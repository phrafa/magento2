<?php
namespace Magento\Store\Model\StoreManager;

/**
 * Interceptor class for @see \Magento\Store\Model\StoreManager
 */
class Interceptor extends \Magento\Store\Model\StoreManager implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Api\StoreRepositoryInterface $storeRepository, \Magento\Store\Api\GroupRepositoryInterface $groupRepository, \Magento\Store\Api\WebsiteRepositoryInterface $websiteRepository, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Store\Api\StoreResolverInterface $storeResolver, \Magento\Framework\Cache\FrontendInterface $cache, $isSingleStoreAllowed = true)
    {
        $this->___init();
        parent::__construct($storeRepository, $groupRepository, $websiteRepository, $scopeConfig, $storeResolver, $cache, $isSingleStoreAllowed);
    }

    /**
     * {@inheritdoc}
     */
    public function getStores($withDefault = false, $codeKey = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStores');
        if (!$pluginInfo) {
            return parent::getStores($withDefault, $codeKey);
        } else {
            return $this->___callPlugins('getStores', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsites($withDefault = false, $codeKey = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsites');
        if (!$pluginInfo) {
            return parent::getWebsites($withDefault, $codeKey);
        } else {
            return $this->___callPlugins('getWebsites', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultStoreView()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultStoreView');
        if (!$pluginInfo) {
            return parent::getDefaultStoreView();
        } else {
            return $this->___callPlugins('getDefaultStoreView', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getGroups($withDefault = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGroups');
        if (!$pluginInfo) {
            return parent::getGroups($withDefault);
        } else {
            return $this->___callPlugins('getGroups', func_get_args(), $pluginInfo);
        }
    }
}
