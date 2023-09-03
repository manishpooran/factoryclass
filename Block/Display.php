<?php

namespace Manish\FactoryClass\Block;

class Display extends \Magento\Framework\View\Element\Template

{
	 /**
     * @var \Magento\Catalog\Model\ResourceModel\Product
     */
    private $productResource;
    /**
     * @var \Magento\Catalog\Model\ProductFactory
     */
    private $productFactory;

public function __construct(
\Magento\Framework\View\Element\Template\Context $context,
\Magento\Catalog\Model\ResourceModel\Product $productResource,
 \Magento\Catalog\Model\ProductFactory $productFactory
 )

{

parent::__construct($context);
 $this->productResource = $productResource;
        $this->productFactory = $productFactory;

}




public function sayWelcome($productid)
{

        /** @var  $product \Magento\Catalog\Model\Product */
        $product = $this->productFactory->create()->load($productid);
      
        
        return $product;
		
		


}

}