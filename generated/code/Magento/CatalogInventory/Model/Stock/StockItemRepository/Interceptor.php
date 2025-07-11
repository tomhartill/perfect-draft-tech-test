<?php
namespace Magento\CatalogInventory\Model\Stock\StockItemRepository;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\Stock\StockItemRepository
 */
class Interceptor extends \Magento\CatalogInventory\Model\Stock\StockItemRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\CatalogInventory\Model\Spi\StockStateProviderInterface $stockStateProvider, \Magento\CatalogInventory\Model\ResourceModel\Stock\Item $resource, \Magento\CatalogInventory\Api\Data\StockItemInterfaceFactory $stockItemFactory, \Magento\CatalogInventory\Api\Data\StockItemCollectionInterfaceFactory $stockItemCollectionFactory, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Framework\DB\QueryBuilderFactory $queryBuilderFactory, \Magento\Framework\DB\MapperFactory $mapperFactory, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\CatalogInventory\Model\Indexer\Stock\Processor $indexProcessor, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime, ?\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory = null, ?\Psr\Log\LoggerInterface $psrLogger = null, ?\Magento\CatalogInventory\Model\StockRegistryStorage $stockRegistryStorage = null)
    {
        $this->___init();
        parent::__construct($stockConfiguration, $stockStateProvider, $resource, $stockItemFactory, $stockItemCollectionFactory, $productFactory, $queryBuilderFactory, $mapperFactory, $localeDate, $indexProcessor, $dateTime, $productCollectionFactory, $psrLogger, $stockRegistryStorage);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\CatalogInventory\Api\Data\StockItemInterface $stockItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($stockItem);
    }
}
