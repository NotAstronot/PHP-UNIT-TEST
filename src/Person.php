<?php

namespace LearningPhp\UnitTest;

class Person
{

    public function __construct(private string $name)
    {
    }

    public function sayHello(?string $name)
    {
        if ($name == null) throw new \Exception("Name is null");

        return "Hello $name, my name is $this->name";
    }

    public function sayGoodBye(?string $name)
    {
        echo "Good Bye $name" . PHP_EOL;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
