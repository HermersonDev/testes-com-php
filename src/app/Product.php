<?php

namespace App;

class Product
{
	private $id;
	private $name;
	private $description;
	private $price;

	public function __construct($id = null, $name = null, $description = null, $price = null) 
	{
		$this->setId($id);
		$this->setName($name);
		$this->setDescription($description);
		$this->setPrice($price);
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}
	
	public function getDescription()
	{
		return $this->description;
	}

	public function setDescription($description)
	{
		$this->description = $description;
	}
	
	public function getPrice()
	{
		return $this->price;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}
	
}
