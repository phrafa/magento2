<?php
namespace Magento\PageBuilder\Controller\Adminhtml\Form\Element\ProductConditions;

/**
 * Interceptor class for @see \Magento\PageBuilder\Controller\Adminhtml\Form\Element\ProductConditions
 */
class Interceptor extends \Magento\PageBuilder\Controller\Adminhtml\Form\Element\ProductConditions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\CatalogWidget\Model\Rule $rule, \Magento\Framework\Serialize\Serializer\Json $serializer)
    {
        $this->___init();
        parent::__construct($context, $rule, $serializer);
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
