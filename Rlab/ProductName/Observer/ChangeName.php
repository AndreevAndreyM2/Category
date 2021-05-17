<?php

namespace Rlab\ProductName\Observer;

use Magento\Framework\Event\ObserverInterface;

class ChangeName implements ObserverInterface
{


    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $product = $observer->getEvent()->getProduct();
        $product->setData('name', $product->getData('name') . $product->getData('store_id'));

        return $this;
    }
}
