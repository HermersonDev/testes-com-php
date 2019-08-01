<?php

namespace Test\App;

use App\Product;
use App\Order;
use \PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
	/**
	*@test
	*/
	public function totalPrice()
	{
		// Mocks da classe Produto.
		$product_1 = $this->getMockBuilder(Product::class)
			->setMethods(['getId', 'getPrice'])->getMock();
		$product_1->expects($this->any())
			->method('getId')->will($this->returnValue(1));
		$product_1->expects($this->any())
			->method('getPrice')->will($this->returnValue(2000));

		$product_2 = $this->getMockBuilder(Product::class)
			->setMethods(['getId', 'getPrice'])->getMock();
		$product_2->expects($this->any())
			->method('getId')->will($this->returnValue(2));
		$product_2->expects($this->any())
			->method('getPrice')->will($this->returnValue(1500));

		$products = array();
		$products[$product_1->getId()]['product'] = $product_1;
		$products[$product_1->getId()]['amount'] = 2;
		$products[$product_2->getId()]['product'] = $product_2;
		$products[$product_2->getId()]['amount'] = 1;

		$order = new Order();
		$order->setProducts($products);

		$this->assertEquals(5500, $order->getTotal());
	}
	
}
