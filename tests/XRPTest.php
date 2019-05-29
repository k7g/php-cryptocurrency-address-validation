<?php

use Murich\PhpCryptocurrencyAddressValidation\Validation\XRP;

class XRPTest extends \PHPUnit\Framework\TestCase
{

    public function testValidator()
    {
        $testData = [
            ['rCoinaUERUrXb1aA7dJu8qRcmvPNiKS3d', true],
            ['r9hEDb4xBGRfBCcX3E4FirDWQBAYtpxC8K', true],
            ['r9hEDb4xBGRfBCcX3E4FirDWQBAYtpxC8KeK', false],
        ];

        foreach ($testData as $row) {
            $validator = new XRP($row[0]);
            $this->assertEquals($row[1], $validator->validate());
        }

    }
}