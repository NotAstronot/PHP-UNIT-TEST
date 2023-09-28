<?php

namespace LearningPhp\UnitTest;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    // Jika lakukan test Manual 
    public function testManual()
    {
        Assert::assertEquals(10, Math::sum([5, 5]));
        Assert::assertEquals(20, Math::sum([4, 4, 4, 4, 4]));
        Assert::assertEquals(9, Math::sum([3, 3, 3]));
        Assert::assertEquals(0, Math::sum([]));
        Assert::assertEquals(2, Math::sum([2]));
        Assert::assertEquals(4, Math::sum([2, 2]));
    }

    /**
     * @dataProvider mathSumData
     */
    public function testDataProvider(array $values, int $expected)
    {
        Assert::assertEquals($expected, Math::sum($values));
    }

    public function mathSumData(): array
    {
        return [
            [[5, 5], 10],
            [[4, 4, 4, 4, 4], 20],
            [[3, 3, 3], 9],
            [[], 0],
            [[2], 2],
        ];
    }

    /**
     * @testWith [[5,5], 10]
     *           [[4,4,4,4,4], 20]
     *           [[3,3,3], 9]
     *           [[], 0]
     *           [[2], 2]
     */
    public function testWith(array $values, int $expected)
    {
        Assert::assertEquals($expected, Math::sum($values));
    }
}
