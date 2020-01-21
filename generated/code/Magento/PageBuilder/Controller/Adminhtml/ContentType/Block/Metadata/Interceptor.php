<?php
namespace Magento\PageBuilder\Controller\Adminhtml\ContentType\Block\Metadata;

/**
 * Interceptor class for @see \Magento\PageBuilder\Controller\Adminhtml\ContentType\Block\Metadata
 */
class Interceptor extends \Magento\PageBuilder\Controller\Adminhtml\ContentType\Block\Metadata implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Cms\Model\ResourceModel\Block\CollectionFactory $blockCollectionFactory)
    {
        $this->___init();
        parent::__construct($context, $blockCollectionFactory);
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
