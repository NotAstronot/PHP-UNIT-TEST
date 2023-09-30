<?php

namespace LearningPhp\UnitTest;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    private Person $person;

    protected function setUp(): void
    {
    }

    /**
     * @before
     */
    public function createPerson()
    {
        $this->person = new Person("Astronot");
    }

    public function testSucces()
    {
        self::assertEquals("Hello Boys, my name is Astronot", $this->person->sayHello("Boys"));
    }

    public function testException()
    {
        $this->expectException(\Exception::class);
        $this->person->sayHello(null);
    }

    public function testGoodByeSuccess()
    {
        $this->expectOutputString("Good Bye Boys" . PHP_EOL);
        $this->person->sayGoodBye("Boys");
    }
}
