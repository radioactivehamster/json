JSON
====
> A PHP Helper class for reading and writing JSON files.

[![Packagist Version][PACKAGIST VERSION BADGE]][PACKAGIST PAGE] [![GitHub license][LICENSE BADGE]][LICENSE PAGE] [![Build Status][BUILD BADGE]][BUILD PAGE]

Usage
-----

```php
<?php

use RadHam\Json;

$file = 'hello-world.json';
$json = Json::parseFile($file);

Json::writeFile('my-hello-world.json', $json);
```

License
-------
The MIT License (Expat). See the [license file](LICENSE) for details.

[BUILD BADGE]:https://travis-ci.org/radioactivehamster/json.svg?branch=master
[BUILD PAGE]: https://travis-ci.org/radioactivehamster/json
[LICENSE BADGE]: https://img.shields.io/github/license/radioactivehamster/json.svg
[LICENSE PAGE]: https://github.com/radioactivehamster/json/blob/master/LICENSE
[PACKAGIST PAGE]: https://packagist.org/packages/radioactivehamster/json
[PACKAGIST VERSION BADGE]: https://img.shields.io/packagist/v/radioactivehamster/json.svg
