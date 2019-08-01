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
	
	/**
	*@test
	*/
	public function ifTheCartContainsProducts()
	{
		$product_1 = new Product(1, "Product 1", "Description 1", 2500);
		$product_2 = new Product(2, "Product 2", "Description 2", 2500);
		$cart = new Cart();
		
		$cart->add($product_1, 1);
		$this->assertEquals(1, sizeof($cart->getProducts()));

		$cart->add($product_2, 1);
		$this->assertEquals(2, sizeof($cart->getProducts()));
		
	}

	/**
	*@test
	*/
	public function totalPrice()
	{
		$product_1 = new Product(1, "Product 1", "Description 1", 2500);
		$product_2 = new Product(2, "Product 2", "Description 2", 1000);
		$cart = new Cart();

		$cart->add($product_1, 2);
		$this->assertEquals(5000, $cart->getTotal());

		$cart->add($product_2, 3);
		$this->assertEquals(8000, $cart->getTotal());
		
	}
	
	
			
}
