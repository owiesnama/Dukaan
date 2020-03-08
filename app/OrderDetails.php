<?php

namespace App;

use Illuminate\Contracts\Support\Arrayable;

class OrderDetails implements Arrayable
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $city;
    /**
     * @var string
     */
    public $address;
    /**
     * @var string
     */
    public $phone;
    /**
     * @var string|json
     */
    public $details;

    /**
     * OrderDetails constructor.
     * @param array $details
     */
    public function __construct(array $details)
    {
        $this->name = $details['name'];
        $this->city = $details['city'];
        $this->address = $details['address'];
        $this->phone = $details['phone'];
        $this->description = $details['details'];
    }

    /**
     * get the name of the buyer
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * set the name of the buyer
     *
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * get the city of the buyer
     *
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * set the city of the buyer
     *
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * get the address of the buyer
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * set the address of the buyer
     *
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * get the buyer phone
     *
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * set buyer of the order phone
     *
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * get the description of the order
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * set the description of the order
     *
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * specify what to return when serialize to object
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'name' => $this->name,
            'city' => $this->city,
            'address' => $this->address,
            'phone' => $this->phone,
            'details' => $this->details,
        ];
    }
}
