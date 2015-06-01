<?php

namespace Items;


class Chips extends AbstractItem implements ItemInterface {

    private $type = 'lays';

    public function setType($type) {
        $this->$type = $type;
    }

    public function getPrice()
    {
            $typeCost = array(
                'lays' => 1,
                'kettle' => 1,
                'nachos' => 2
        );

        return $typeCost[$this->type];
    }
}

