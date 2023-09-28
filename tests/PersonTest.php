<?php

namespace LearningPhp\UnitTest;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{

    // private Person $person;

    // protected function setUp(): void
    // {

    // }

    // /**
    //  * @before
    //  */

    public function testSucces()
    {
        $person = new Person("Astronot");
        self::assertEquals("Hello Boys, my name is Astronot", $person->sayHello("Boys"));
    }

    public function testException()
    {
        $person = new Person("Astronot");
        $this->expectException(\Exception::class);
        $person->sayHello(null);
    }

    public function testGoodByeSuccess()
    {
        $person = new Person("Astronot");
        $this->expectOutputString("Good Bye Boys" . PHP_EOL);
        $person->sayGoodBye("Boys");
    }
}
