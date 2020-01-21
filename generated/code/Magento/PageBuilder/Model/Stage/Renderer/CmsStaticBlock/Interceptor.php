<?php
namespace Magento\PageBuilder\Model\Stage\Renderer\CmsStaticBlock;

/**
 * Interceptor class for @see \Magento\PageBuilder\Model\Stage\Renderer\CmsStaticBlock
 */
class Interceptor extends \Magento\PageBuilder\Model\Stage\Renderer\CmsStaticBlock implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Cms\Model\ResourceModel\Block\CollectionFactory $blockCollectionFactory, \Magento\PageBuilder\Model\Stage\Renderer\WidgetDirective $widgetDirectiveRenderer, \Psr\Log\LoggerInterface $loggerInterface, \Magento\PageBuilder\Model\Stage\HtmlFilter $htmlFilter)
    {
        $this->___init();
        parent::__construct($blockCollectionFactory, $widgetDirectiveRenderer, $loggerInterface, $htmlFilter);
    }

    /**
     * {@inheritdoc}
     */
    public function render(array $params) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        if (!$pluginInfo) {
            return parent::render($params);
        } else {
            return $this->___callPlugins('render', func_get_args(), $pluginInfo);
        }
    }
}
