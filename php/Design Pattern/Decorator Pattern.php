<?php

interface CarService
{
    public function getCost(): string;

    public function basicDescription(): string;
}

class BasicInspection implements CarService
{
    public function getCost(): string
    {
        return '$19';
    }

    public function basicDescription(): string
    {
        return 'Basic Inspection';
    }
}

class ChangeOil implements CarService
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost(): string
    {
        return '$6' . ' + ' . $this->carService->getCost();
    }

    public function basicDescription(): string
    {
        return $this->carService->basicDescription() . ' and Basic Inspection and change oil';
    }

}

class TireRotation implements CarService {

    protected $carService;

    public function __construct(CarService $carService) {
        $this->carService = $carService;
    }

    public function getCost(): string {
        return '$15' . ' + ' . $this->carService->getCost();
    }

    public function basicDescription(): string
    {
        return $this->carService->basicDescription() . ' and rotate tire';
    }
}

echo ( new TireRotation(new ChangeOil(new BasicInspection)))->getCost() . PHP_EOL;
echo ( new TireRotation(new ChangeOil(new BasicInspection)))->basicDescription();
