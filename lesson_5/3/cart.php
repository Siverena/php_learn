<?php

require_once 'product.php';
class Cart{
    private array $products = [];

    public function addProduct(Product $product ): void{
        $this->products[] = $product;
    }

    public function removeProduct(Product $product): void{
        unset($this->products[$product->getTitle()]);
    }

    public function getProducts(): array{
        return $this->products;
    }

    public function getFullPrice(): int{
        $fullPrice = 0;
        foreach ($this->products as $product){
            $fullPrice += $product->getPrice();
        }
        return $fullPrice;
    }
}