<?php

use Murich\PhpCryptocurrencyAddressValidation\Validation\NEO;
use PHPUnit\Framework\TestCase;

class NEOTest extends TestCase
{

    public function testValidator()
    {
        $testData = [
            ['AawEKF2V9EC22AyyNxj9YyFnkoj7iQZ9EN', true],
            ['3QJmV3qfvL9SuYo34YihAf3sRCW3qSinyC', false],
        ];

        foreach ($testData as $row) {
            $validator = new NEO($row[0]);
            $this->assertEquals($row[1], $validator->validate());
        }

    }
}