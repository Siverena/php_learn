<?php
class Product{
    private string $title;
    private float $price;
    private ?array $components = null;

    public function __construct(string $title, float $price = 0)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function setPrice(float $price): void{
            $this->price = $price;
    }

    public function getPrice(): float{
        return $this->price;
    }

    public function setComponents(array $components): void{
        $this->components = [...$components];
        $this->calcPrice();
    }

    public function getTitle(): string{
        return $this->title;
    }

    public function getComponents(): array{
        return $this->components;
    }

    private function calcPrice():void{
        if(is_array($this->components)){
            foreach ($this->components as $component) {
                $component->calcPrice();
                $this->price += $component->getPrice();
            }
        }
    }
}
