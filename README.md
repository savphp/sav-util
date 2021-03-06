# sav-util
sav util for php

![Build Status](https://img.shields.io/badge/branch-master-blue.svg) [![Build Status](https://travis-ci.org/savphp/sav-util.svg?branch=master)](https://travis-ci.org/savphp/sav-util) [![License](https://poser.pugx.org/savphp/sav-util/license.svg)](https://packagist.org/packages/savphp/sav-util)
[![Latest Stable Version](https://img.shields.io/packagist/v/savphp/sav-util.svg)](https://packagist.org/packages/savphp/sav-util)
[![Code Climate Coverage Status](https://codeclimate.com/github/savphp/sav-util/badges/coverage.svg)](https://codeclimate.com/github/savphp/sav-util)
[![Coveralls Coverage Status](https://coveralls.io/repos/savphp/sav-util/badge.svg?branch=master)](https://coveralls.io/r/savphp/sav-util?branch=master)

### CaseConvert

```php

use SavUtil\CaseConvert;

CaseConvert::convert('camel', 'HelloWorld'); // helloWorld
CaseConvert::convert('pascal', 'Hello-World'); // HelloWorld
CaseConvert::convert('snake', 'HelloWorld'); // hello_world
CaseConvert::convert('hyphen', 'HelloWorld'); // hello-world

// same as above
CaseConvert::pascalCase('HelloWorld');
CaseConvert::pascalCase('Hello-World');
CaseConvert::snakeCase('HelloWorld');
CaseConvert::hyphenCase('HelloWorld');

```

### DateTime

```php

use SavUtil\DateTime;

DateTime::localTime();
DateTime::utcTime();
DateTime::localToUtc();
DateTime::utcToLocal();

```

### Request

```php

use SavUtil\Request;

$res = Request::fetch('http://example.com');
$res->status == 200;
is_array($res->headers);
is_string($res->response);

Request::fetch(array(
    'url' => 'http://example.com',
    'data' => array(),
    'headers' => array(),
    'options' => array(
        // default Options
        'timeout' => 10,
        'connect_timeout' => 10,
        'useragent' => 'curl', // ua
        'type' => 'GET', // method
        'dataType' => '', // empty|json
        'assoc' => true,  // json assoc array
        'filename' => false, // save file
        'verify' => false, // ssl verify
        'verifyname' => false, // ssl verifyname
    ),
));

Request::fetchAll(array(
    "requestA" => array(
        "url" => 'http://example.com',
        "headers" => array(),
        "data" => array(),
        "options" => array(),
    ),
    "requestB" => array(
        "url" => 'http://example.com',
        "headers" => array(),
        "data" => array(),
        "options" => array(),
    ),
), array(
    "timeout" => 20,
));

```
