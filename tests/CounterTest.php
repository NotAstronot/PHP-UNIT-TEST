<?php

namespace LearningPhp\UnitTest;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{

    private Counter $counter;

    protected function setUp(): void
    {
        $this->counter = new Counter();
        echo "Membuat Counter" . PHP_EOL;
    }


    public function testIncrement()
    {
        self::assertEquals(0, $this->counter->getCounter());
        self::markTestIncomplete("unit test belum selesai");
        echo "Test Test" . PHP_EOL;
        // unit test test increment belum selesai (ujicoba)
        //cara test unit test code belum selesai
    }

    public function testCounter()
    {

        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());

        $this->counter->increment();
        $this->assertEquals(2, $this->counter->getCounter());

        $this->counter->increment();
        self::assertEquals(3, $this->counter->getCounter());
    }

    /**
     * @test
     */
    public function increment()
    {
        self::markTestSkipped("cara Skipe unit test yang diinginkan");

        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());
    }

    public function testFirst(): Counter
    {
        $this->counter->increment();
        $this::assertEquals(1, $this->counter->getCounter());

        return $this->counter;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter): void
    {
        $counter->increment();
        $this::assertEquals(2, $counter->getCounter());
    }

    protected function teardown(): void
    {
        echo "Tear down" . PHP_EOL;
    }

    /**
     * @after
     */
    protected function after(): void
    {
        echo "After" . PHP_EOL;
    }

    /**
     * @requires OSFAMILY Windows
     */
    public function testOnlyWindows()
    {
        self::assertTrue(true, "only in Windows");
        // Jika ingin skip test kondisi tertentu seperti OS Dll
    }

    /**
    Jika menggunakan Mackbook
     * @requires PHP >= 8
     * @requires OSFAMILY Darwin
     */
    public function testOnlyForMacAndPHP8()
    {
        self::assertTrue(true, "Only for Mac and PHP 8");
    }
}
