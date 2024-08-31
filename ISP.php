<?php

// Interface Segregation Principle - Princípio da segregação de interfaces

interface Worker 
{
    public function work();
}

interface HumanWorkerInterface extends Worker 
{
    public function eat();
}

class HumanWorker implements HumanWorkerInterface 
{
    public function work() 
    {
        echo "Human working";
    }

    public function eat() 
    {
        echo "Human eating";
    }
}

class RobotWorker implements Worker 
{
    public function work() 
    {
        echo "Robot working";
    }
}

