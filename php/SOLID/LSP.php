<!-- Liskov Substitution Principle

Let q(x) be a property provable about objects of x of type T. Then q(y) should be provable for objects y of type S where S is a subtype of T. -->

<?php

// WITH (Liskov Substitution Principle)

interface CoffeeMachineInterface
{
    public function brewCoffee(string $selections);
}

class BasicCoffeeMachine implements CoffeeMachineInterface
{
    public function brewCoffee(string $selections)
    {
        switch ($selections) {
            case 'ESPRESSO':
                return $this->brewEspresso();
            default:
                throw new CoffeeException('Selection not supported');
        }
    }

    protected function brewEspresso()
    {
        return 'Brew an Espresso';
    }
}

class PremiumCoffeeMachine extends BasicCoffeeMachine
{
    public function brewCoffee($selections)
    {
        switch ($selections) {
            case 'ESPRESSO':
                return $this->brewEspresso();
            case 'VANILLA':
                return $this->brewVanillaCoffee();
            default:
                throw new CoffeeException('Selection not supported');
        }
    }

    protected function brewVanillaCoffee()
    {
        return 'Brew a Vanilla coffee';
    }
}

function getCoffeeMachine(User $user)
{
    switch ($user->getPlan()) {
        case 'PREMIUM':
            return new PremiumCoffeeMachine();
        case 'BASIC':
        default:
            return new BasicCoffeeMachine();
    }
}

function prepareCoffee(User $user, $selections)
{
    $coffeeMachine = getCoffeeMachine($user);
    return $coffeeMachine->brewCoffee($selections);
}
