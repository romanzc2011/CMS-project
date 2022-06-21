<?php

class Product {
    private $price;
    private $weight;
    private $freeShipping = false;

    public function __construct($price, $weight){
        $this->weight = $weight;
        $this->price = $price;
    }

    function getWeight(){
        return $this->weight;
    }

    function setFreeShipping(){
        $this->freeShipping = true;
    }
}

class Shipping {
    private $totalShipping;
    private $products;
    private $pricePerKilogram;
    private $shippingProvider;

    public function __construct($pricePerKilogram, $shippingProvider){
        $this->pricePerKilogram = $pricePerKilogram;
        $this->shippingProvider = $shippingProvider;
    }

    public function addProducts(Product $product){
        $this->products[] = $product;
    }

    public function calculateTotalShipping(){
        foreach($this->products as $product){
            if(!$product->getFfreeShipping()) {
                $this->totalShipping += $product->getWeight() * $this->pricePerKilogram;
            }
        }
    }

    public function getTotalShippingPrice(){
        return $this->totalShipping;
    }
}

$product = new Product(5, 1);

$pricePerKilogram = 5;

$shipping = new Shipping($pricePerKilogram);

$shipping->addProducts($product);
$shipping->calculateTotalShipping();
$totalShippingPrice = $shipping->calculateTotalShipping();
var_dump($totalShippingPrice);

