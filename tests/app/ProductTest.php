<?php

namespace Tests\App;

use App\Product;
use \PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
	/**
	  *@test
	  *@dataProvider getSetProviderProduct
	  */
	public function GetterAndSetterOfProduct($name, $description, $price)
	{
		$product = new Product();

		$product->setName($name);
		$this->assertEquals($name, $product->getName());

		$product->setDescription($description);
		$this->assertEquals($description, $product->getDescription());
		
		$product->setPrice($price);
		$this->assertEquals($price, $product->getPrice());

	}

	public function getSetProviderProduct()
	{
		return [
			["Product 1", "Description 1", 10],
			["Product 2", "Description 2", 20],
			["Product 3", "Description 3", 30],
		];
	}
	
}