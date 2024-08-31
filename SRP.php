<?php

// Single Responsability Principle - Princípio da resposabilidade única

class Item 
{
    private $itens = [];
    private $totalAmount = 0.0;
}

class Order extends Item
{
    public function printOrder(Item $itens, Item $totalAmount) 
    {
        echo "Order Summary:\n";
        foreach ($itens as $item) {
            echo $item->getName() . " - " . $item->getPrice() . "\n";
        }
        echo "Total: " . $totalAmount . "\n";
    }
}

class ItemController extends Item
{
    public function addItem(Item $itens,$item) 
    {
        $this->itens[] = $item;
        $this->calculateTotal();
    }

    public function createInvoice($itens) 
    {
        $this->itens;
        $total = $this->calculateTotal();

        Invoice::create([$itens, $total]);
    }

    private function calculateTotal(Item $itens) 
    {
        $this->totalAmount = 0.0;
        foreach ($this->itens as $item) {
            $this->totalAmount += $item->getPrice();
        }
    }
}
