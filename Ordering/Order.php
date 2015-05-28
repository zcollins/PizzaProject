<?php

namespace Ordering;


class Order {

    /**
     * @var \Customers\Customer
     */
    private $customer;

    /**
     * @var \Items\ItemInterface[]
     */
    private $items = array();

    private $price = 0;

    public function __construct(\Customers\Customer $customer) {
        $this->customer = $customer;
    }

    public function getDeliveryEmail() {
        return $this->customer->getEmail();
    }

    public function addItem(\Items\ItemInterface $item) {
        $this->items[] = $item;
    }

    private function renderPrice() {
        foreach($this->items as $item) {
            $this->price += $item->getPrice();
        }
    }
}
