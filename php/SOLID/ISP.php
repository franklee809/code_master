<!-- Interface Segregation Principle

A client should never be forced to implement an interface that it doesn’t use or clients shouldn’t be forced to depend on methods they do not use. -->

<?php

// TODO: WITHOUT Interface Segregation Principle
interface VehicleInterface
{
    public function drive();

    public function fly();
}

class FutureCar implements CarInterface
{
    public function drive()
    {
        echo 'Future Car is driving';
    }

    public function fly()
    {
        echo 'Future Car is flying';
    }
}

class Airplane implements VehicleInterface
{
    public function drive()
    {
        throw new Exception('Not implementated methods');
    }

    public function fly()
    {
        echo 'Flying an Aeroplane';
    }
}

// TODO: WITH Interface Segregation Principle

interface CarInterface2
{
    public function drive();
}

interface AirplaneInterface2
{
    public function fly();
}

class FutureCar2 implements CarInterface2, AirplanceInterface2
{
    public function drive()
    {
        echo 'Future Car 2 driving';
    }

    public function fly()
    {
        echo 'Flying a Future Car 2 ';
    }
}

class Airplane2 implements AirplanceInterface2
{
    public function fly()
    {
        echo 'Flying an Aeroplane';
    }
}
