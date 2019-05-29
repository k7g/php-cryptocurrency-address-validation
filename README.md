# php-cryptocurrency-address-validation

Easy to use PHP cryptocurrency address validation lib.

Forked from https://github.com/murich/php-cryptocurrency-address-validation.

Provides address validations for the following cryptocurrencies:

- BTC
- DASH
- DGB
- ETH
- LTC
- ZEC

Added in this fork:

- BCH (Bitcoin Cash)
- NEO
- XRP (Ripple)

## Usage


```php
use Murich\PhpCryptocurrencyAddressValidation\Validation\BTC as BTCValidator;

$validator = new BTCValidator('1QLbGuc3WGKKKpLs4pBp9H6jiQ2MgPkXRp');
var_dump($validator->validate());

```
