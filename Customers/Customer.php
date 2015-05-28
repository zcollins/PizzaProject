<?php

namespace Customers;

class Customer {

    private $name = array(
        'first'     => null,
        'middle'    => null,
        'last'      => null
    );

    private $email = null;

    private $address = array(
        'street' => null
    );


    public function setName($first, $middle, $last) {
        $this->name = array(
            'first'     => $first,
            'middle'    => $middle,
            'last'      => $last
        );
    }

    public function getName() {
        return $this->name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }
}

