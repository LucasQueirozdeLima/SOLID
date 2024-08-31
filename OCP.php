<?php

// Open-Closed Principle - Princípio aberto-fechado

interface Area 
{
    public function area();
}

class Circle implements Area
{
    public function area() 
    {
        $area = 0;
        $area += pi() * pow($this->getRadius(), 2);
    }
    public function getRadius() 
    {
        return 0;
    }
}

class Rectangle implements Area
{
    public function area() 
    {
        $area = 0;
        $area += $this->getWidth() * $this->getHeight();
    }

    public function getWidth() 
    {
        return 0;
    }
    public function getHeight() 
    {
        return 0;
    }
}

class Square implements Area
{
    public function area() 
    {
        $area = 0;
        $area += pow($this->getBase(), 2);
    }

    public function getBase() 
    {
        return 0;
    }
}

class AreaCalculator 
{
    public function calculate(Area $area) 
    {   
        return $area->area();
    }
}

