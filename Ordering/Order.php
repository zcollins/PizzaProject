<?php

namespace Ordering;

use Items;

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

    /**
     * would need method to get customer info?  Even though passed through customer class
     * the class would not necessarily call this customer
     */


    /**
     * Do something here like grab the customer info from the prior function etc.
     */

    public function addItem(Items\ItemInterface $item) {
        $this->items[] = $item;
    }

    private function renderPrice() {
        foreach($this->items as $item) {
            $this->price += $item->getPrice();
        }
    }
}
