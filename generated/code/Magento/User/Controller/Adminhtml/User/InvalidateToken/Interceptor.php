<?php
namespace Magento\User\Controller\Adminhtml\User\InvalidateToken;

/**
 * Interceptor class for @see \Magento\User\Controller\Adminhtml\User\InvalidateToken
 */
class Interceptor extends \Magento\User\Controller\Adminhtml\User\InvalidateToken implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\User\Model\UserFactory $userFactory, \Magento\Integration\Api\AdminTokenServiceInterface $tokenService, ?\Magento\User\Helper\ForceSignIn $forceSignIn = null)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $userFactory, $tokenService, $forceSignIn);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
