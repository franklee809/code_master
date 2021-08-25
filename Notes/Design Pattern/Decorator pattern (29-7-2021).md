# My coding diary (29-7-2021)

## Design pattern (Decorator pattern (wrapper))

<br>

### <strong>This design pattern is used for implementing SOLID principles for OOP. </strong>

<br>

>
> The behaviour is similar or identical to the JavaScript chained methods.

<br>

### JavaScript snippet
`new Promise().then(callback2).then(callback2)`

<br>

### PHP snippet
<br/>

#### First, create a interface as a formatter or standard for other CarService
<br>

```
<?php

interface CarService
{
    public function getCost(): string;

    public function basicDescription(): string;
}

```
