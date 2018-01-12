ZwiftPHP
========

Zwift Mobile API client for PHP

The Zwift Mobile API is undocumented so this project is based on the work of others who've reverse-engineered it through various means.

In particular this is a PHP port of the [zwift-mobile-api Javascript library](https://github.com/Ogadai/zwift-mobile-api).

## Getting started

### Composer package
Use composer to install this ZwiftPHP package.

```
{
    "require": {
        "darenc/ZwiftPHP": "0.1.0"
    }
}
```

### ZwiftPHP usage

You autenticate against Zwift with your own email address and password. Then you can download public
data from other profiles as long as you have the profile ID. 

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

try {
    $zml = new ZwiftPHP\ZwiftAccount('your@zwift.email.address', 'YourZwiftPassword');

    $profile = $zml->getProfile('me');

    $profileData = $profile->profile();

    echo $profileData['firstName']; // 'Daren'

} catch (Exception $e) {
    echo $e->getMessage();
}
```

#### Call an API method
```php
<?php
include 'vendor/autoload.php';

```

## About ZwiftPHP
### Libraries
- [Protocol Buffers](https://github.com/google/protobuf)
- [Protobuf for PHP](https://github.com/protobuf-php/protobuf)
- [Guzzle](http://docs.guzzlephp.org/en/stable/)

### Development
ZwiftPHP was ported by Daren Chandisingh based on the [zwift-mobile-api](https://github.com/Ogadai/zwift-mobile-api) JavScript library.

### Contributing
For issues and pull requests see the darenc/ZwiftPHP repository.

### License
The ZwiftPHP library is open-source software licensed under MIT license.


