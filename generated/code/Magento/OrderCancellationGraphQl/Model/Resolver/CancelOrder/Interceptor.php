<?php
namespace Magento\OrderCancellationGraphQl\Model\Resolver\CancelOrder;

/**
 * Interceptor class for @see \Magento\OrderCancellationGraphQl\Model\Resolver\CancelOrder
 */
class Interceptor extends \Magento\OrderCancellationGraphQl\Model\Resolver\CancelOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\OrderCancellationGraphQl\Model\Validator\ValidateRequest $validateRequest, \Magento\SalesGraphQl\Model\Formatter\Order $orderFormatter, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\OrderCancellation\Model\CancelOrder $cancelOrderAction, \Magento\OrderCancellationGraphQl\Model\Validator\ValidateOrder $validateOrder, \Magento\Framework\GraphQl\Query\Uid $idEncoder)
    {
        $this->___init();
        parent::__construct($validateRequest, $orderFormatter, $orderRepository, $cancelOrderAction, $validateOrder, $idEncoder);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
