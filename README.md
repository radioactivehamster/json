json-file
=========
> A PHP Helper class for reading and writing JSON files.

[![GitHub license][LICENSE BADGE]][LICENSE PAGE] [![Build Status][BUILD BADGE]][BUILD PAGE]

Usage
-----

```php
<?php

use RadHam\Json;

$file = 'hello-world.json';
$json = Json::parseFile($file);
```

License
-------
The MIT License (Expat). See the [license file](LICENSE) for details.

[BUILD BADGE]:https://travis-ci.org/radioactivehamster/json-file.svg?branch=master
[BUILD PAGE]: https://travis-ci.org/radioactivehamster/json-file
[LICENSE BADGE]: https://img.shields.io/github/license/radioactivehamster/json-file.svg
[LICENSE PAGE]: https://github.com/radioactivehamster/json-file/blob/master/LICENSE
