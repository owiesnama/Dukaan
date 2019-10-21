<?php

namespace App;

use Illuminate\Contracts\Support\Arrayable;

class OrderDetails implements Arrayable
{

    public $name;
    public $city;
    public $address;
    public $phone;
    public $description;

    public function __construct(array $details)
    {
        $this->name = $details['name'];
        $this->city = $details['city'];
        $this->address = $details['address'];
        $this->phone = $details['phone'];
        $this->description = $details['description'];
    }

    public function toArray()
    {
        return compact('name', 'city', 'address', 'phone', 'description');
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}