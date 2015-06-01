<?php

namespace Items\Pizza;

class Topping {

    /**
     * @var float
     */
    private $quantity;

    private $name;

    private $side;

    public $basePrice = 0;

    public function setQuantity($quantity) {
        $this->$quantity = $quantity;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setSide($side) {
        $this->side = $side;
    }

    public function getPrice() {
        $price = ($this->quantity*$this->basePrice);

        return $price;
    }
}