<?php

namespace Items\Pizza;

use Items;

class Pizza extends Items\AbstractItem implements Items\ItemInterface {

    private static $sizes = array(
        'mini',
        'small',
        'medium',
        'large'
    );

    /**
     * @var null|string
     */
    private $size = null;
// is and has a, dependency is a has a
    /**
     * @var Topping[]
     */
    private $toppings = array();

    public function addTopping(Topping $topping) {
        $this->toppings[] = $topping;
    }

    public function setSize($size) {
        if(!in_array($size, self::$sizes)) {
            throw new Items\Exception\InvalidSizeException("Invalid size of pizza selected.");
        }

        $this->size = $size;
    }

    public function getPrice() {
        $price = 0;

        $pricing = array(
            'sizes' => array(
                'mini'      => 6,
                'small'     => 7,
                'medium'    => 8,
                'large'     => 9
            )
        );

        if(!is_null($this->size)) {
            $price += $pricing['sizes'][$this->size];
        }

        foreach($this->toppings as $topping) {
            $price += $topping->getPrice();
        }

        return $price;
    }
}


/**
 * Set is the information we have.  We pass in a parameter of size.  Price is what we need to get.
 */