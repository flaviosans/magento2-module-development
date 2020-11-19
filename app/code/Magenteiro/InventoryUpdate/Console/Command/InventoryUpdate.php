<?php


namespace Magenteiro\InventoryUpdate\Console\Command;


use Magento\Catalog\Model\ResourceModel\Product\Collection;
use Magento\CatalogInventory\Api\StockRegistryInterface;
use Magento\Framework\Model\ResourceModel\Iterator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class InventoryUpdate extends Command
{
    /**
     * @var ProductCollectionFactory
     */
    private $productCollectionFactory;
    /**
     * @var Iterator
     */
    private $iterator;
    /**
     * @var StockRegistryInterface
     */
    private $stockRegistry;
    /**
     * @var Magento\Catalog\Model\ResourceModel\Product\Collection
     */
    private $productCollection;

    private $number = 0;

    public function __construct(
        Collection $productCollection,
        Iterator $iterator
    )
    {
        $this->iterator = $iterator;
        $this->productCollection = $productCollection;
        parent::__construct();
    }

    protected function configure(){
        $this->setName('mag:iu')
            ->setDescription("Contar o estoque");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Começando");
        $this->output = $output;

        $this->iterator->walk($this->productCollection->getSelect(), [[$this, 'updateItems']]);
        $this->output->writeln("Items: $this->number");
    }

    public function updateItems($args)
    {
        $sku = $args['row']['sku'];
        $this->output->writeln($sku);
        $this->number++;
    }
}