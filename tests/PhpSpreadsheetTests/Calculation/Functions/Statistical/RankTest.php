<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\Statistical;

use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\Statistical\Percentiles;
use PHPUnit\Framework\TestCase;

class RankTest extends TestCase
{
    protected function setUp(): void
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
    }

    /**
     * @dataProvider providerRANK
     *
     * @param mixed $expectedResult
     * @param mixed $value
     * @param mixed[] $valueSet
     * @param mixed $order
     */
    public function testRANK($expectedResult, $value, $valueSet, $order = 0): void
    {
        $result = Percentiles::RANK($value, $valueSet, $order);
        self::assertEqualsWithDelta($expectedResult, $result, 1E-12);
    }

    public function providerRANK(): array
    {
        return require 'tests/data/Calculation/Statistical/RANK.php';
    }
}