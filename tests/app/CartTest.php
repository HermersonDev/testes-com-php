<?php

namespace Test\App;

use App\Cart;
use App\Product;
use \PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
	/**
	*@test
	*/
	public function addProductInTheCart()
	{
		$product = new Product(1, "BikeSpeed", "Bike Speed Soul", 2500);
		$cart = new Cart();
		$this->assertEquals(2, $cart->add($product, 2)[1]['amount']);
		$this->assertEquals(4, $cart->add($product, 2)[1]['amount']);
	}
	
			
}
