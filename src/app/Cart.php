<?php

namespace App;

class Cart
{
	private $products;

	/**
	*@param Product
	*@param amount
	*/
	public function add(Product $product, int $amount): array
	{	
		$product_id = $product->getId();

		if (!isset($this->products[$product_id]['amount'])) {
			$this->products[$product_id]['amount'] = 0;
		}

		$this->products[$product_id]['product'] = $product;
		$this->products[$product_id]['amount'] += $amount;

		return $this->products;
	}
	
	public function getProducts()
	{
		return $this->products;
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
