<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\Web;

use PhpOffice\PhpSpreadsheet\Calculation\Web\Service as WebService;
use PHPUnit\Framework\TestCase;

class UrlEncodeTest extends TestCase
{
    /**
     * @dataProvider providerURLENCODE
     *
     * @param string $expectedResult
     * @param mixed $text
     */
    public function testURLENCODE($expectedResult, $text): void
    {
        $result = WebService::urlEncode($text);
        self::assertSame($expectedResult, $result);
    }

    public function providerURLENCODE(): array
    {
        return require 'tests/data/Calculation/Web/URLENCODE.php';
    }
}