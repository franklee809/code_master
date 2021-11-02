<?php

class Person {
    const CAT = 'cat';
    const DOG = 'dog';

    private $petPreference;
    private $pet;

    public function isCatLover(): bool {
        return $this->petPreference == self::CAT;
    }
    public function isDogLover(): bool {
        return $this->petPreference == self::DOG;
    }
    public function setPet(Animal $pet) {
        $this->pet = $pet;
    }
    public function getPet(): Animal {
        return $this->pet;
    }
}
?>