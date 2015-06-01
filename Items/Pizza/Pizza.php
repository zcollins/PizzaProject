<?php

namespace Items\Pizza;

use Items;

class Pizza extends Items\AbstractItem implements Items\ItemInterface {
    private $size = 'mini';

    /**
     * @var Topping[]
     */
    private $toppings = array();

    public function setToppings(Topping $topping) {
        $this->toppings[] = $topping;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function getPrice() {
        $pricing = array(
            $toppingCost = array(
                "pepperoni" => 2,
                "bacon"     => 3,
                "extra cheese" => 2.50,
                "cicillian" => 3.00
            ),
            $sizeCost = array(
                "mini" => 6,
                "small" => 10.50,
                "medium" => 8
            ),
        );
        $addedPrice = $pricing[$toppingCost[$this->$topping] + $sizeCost[$this->size]];

        return $addedPrice;
    }
}


/**
 * Set is the information we have.  We pass in a parameter of size.  Price is what we need to get.
 */