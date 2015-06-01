<?php

namespace Items;


class Soda extends AbstractItem implements ItemInterface {
    private $type = 'fountain';
    private $size = '32oz';

    function setType($type) {
        $this->type = $type;
    }

    function setPrice($size) {
        $this->size = $size;
    }

    function getPrice() {
        $pricing = array(
            $sodaType = array (
                'fountain' => 1,
                'can' => 1.25,
                'bottle' => 2
            ),

            $sodaSize = array (
                '16oz' => 1,
                '32oz' => 1.50,
                '48oz' => 2
            )
        );
        $addedPrice = $pricing[$sodaType[$this->type]*$sodaSize[$this->$size]];
        return $price;
    }
}