<?php

namespace Items;

abstract class AbstractItem implements ItemInterface {

    protected $name;

    public function getName() {
        return $this->name;
    }
}

//extends is under implements is using an interface

//add two more items, order to be able to be calculated for price, soda etc.

//create an order with several items on it, and print out order price and the customer info