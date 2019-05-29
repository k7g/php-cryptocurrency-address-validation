<?php


use Murich\PhpCryptocurrencyAddressValidation\Validation\BCH;

class BCHTest extends \PHPUnit\Framework\TestCase
{

    public function testValidator()
    {
        $testData = [
            ['bitcoincash:qqq3728yw0y47sqn6l2na30mcw6zm78dzqre909m2r', true],
            ['bitcoincash:qpm2qsznhks23z7629mms6s4cwef74vcwvy22gdx6a', true],
            ['bitcoincash:qr95sy3j9xwd2ap32xkykttr4cvcu7as4y0qverfuy', true],
            ['qqq3728yw0y47sqn6l2na30mcw6zm78dzqre909m2r', true],
            ['qpm2qsznhks23z7629mms6s4cwef74vcwvy22gdx6a', true],
            ['qr95sy3j9xwd2ap32xkykttr4cvcu7as4y0qverfuy', true],
            ['ppm2qsznhks23z7629mms6s4cwef74vcwvn0h829pq', true],
            ['1BpEi6DfDAUFd7GtittLSdBeYJvcoaVggu', false],
            ['1KXrWXciRDZUpQwQmuM1DbwsKDLYAYsVLR', false],
            ['16w1D5WRVKJuZUsSRzdLp9w3YGcgoxDXb', false],
            ['3CWFddi6m4ndiGyKqzYvsFYagqDLPVMTzC', false],
        ];

        foreach ($testData as $row) {
            $validator = new BCH($row[0]);
            $this->assertEquals($row[1], $validator->validate(), $row[0]);
        }

    }
}