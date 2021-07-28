<!-- Open-closed Principle
Objects or entities should be open for extension but closed for modification. -->

<?php

// FALSE
class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width  = $width;
        $this->height = $height;
    }
}

class Square
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }
}

class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes)
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        $area = [];
        foreach ($this->shapes as $shape) {
            /** TODO: This part */
            if ($shape instanceof Square) {
                $area[] = pow($shape->length, 2);
            } elseif ($shape instanceof Rectangle) {
                $area[] = $shape->width * $shape->height;
            }
        }
        return array_sum($area);
    }
}

// Second way (with Open closed principle)

interface Shape
{
    public function area();
}

class Rectangle2 implements Shape
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width  = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

class Square2 implements Shape
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function area()
    {
        return pow($this->length, 2);
    }
}

// Business Logic is decoupled from the AreaCalculator
class AreaCalculator2
{
    protected $shapes;

    public function __construct($shapes)
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        $area = [];

        foreach ($this->shapes as $shapes) {
            $area[] = $shapes->area();
        }

        return array_sum($area);
    }
}
