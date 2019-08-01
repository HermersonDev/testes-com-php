<?php

namespace App;;

class Order
{
	private $id;
	private $products;
	private $name;
	private $address;
	private $city;
	private $state;
	private $zipcode;
	private $status;
	

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;	
	}
	
	public function getProducts()
	{
		return $this->products;
	}
	
	public function setProducts($products)
	{
		$this->products = $products;	
	}
	
	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;	
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function setAddress($address)
	{
		$this->address = $address;	
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setCity($city)
	{
		$this->city = $city;	
	}

	public function getState()
	{
		return $this->state;
	}

	public function setState($state)
	{
		$this->state = $state;	
	}

	public function getZipcode()
	{
		return $this->zipcode;
	}

	public function setZipcode($zipcode)
	{
		$this->zipcode = $zipcode;	
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($status)
	{
		$this->status = $status;	
	}

	public function getTotal()
	{
		if (isset($this->products)) {
			$total = 0;
			foreach ($this->products as $product) {
				$total += $product['amount'] * $product['product']->getPrice();
			}
			return $total;
		}

		return null;
	}

}
