[![Build Status](https://travis-ci.org/toniperic/oib.svg?branch=master)](https://travis-ci.org/toniperic/oib)

## Introduction
Personal Identification Number _(Croatian: Osobni identifikacijski broj or OIB)_ is a permanent national identification number of every Croatian citizen and legal persons domiciled in the Republic of Croatia.

## Installation
Just pull the package via Composer
```js
"require": {
    "toniperic/oib": "~1.3"
}
```

## Usage
You can check whether an OIB is valid likewise
```php
Oib::check('foo'); // false
Oib::check(71481280786); // true
```

You could also specify an array as first parameter, likewise
```php
Oib::check(array(71481280786, 64217529143, 'foo'));
```
and the returned result would be 
```php
array(
	71481280786 => true,
	64217529143 => true,
	'foo' => false
)
```

Feel free to check the tests if you still can't understand how the package works.