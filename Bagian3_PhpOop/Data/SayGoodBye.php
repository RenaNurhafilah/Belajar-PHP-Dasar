<?php

namespace Data\Traits;

trait sayGoodBye {

    public function goodBye(?string $name): void {
        if(is_null($name)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait sayHello {

    public function hello(?string $name): void {
        if(is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName {
    public string $name;
}

trait CanRun {
    public abstract function run(): void;
}

class Person {
    use sayGoodBye, sayHello, HasName, canRun;

    public function run(): void {
        echo "Person $this->name is running" .PHP_EOL;
    }
}
