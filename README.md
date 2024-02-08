Demo seeking to understand https://github.com/WordPress/gutenberg/issues/58467#issuecomment-1929390175

Requires Docker

To run:

```sh
./run-test.sh
```

This will run the same code (`php a.php`) in different PHP versions.

You'll see them log something like the following:

```
Running test from: 7.0.33
Called /a.php
Ran to completion, created class instance: A
---
Running test from: 7.4.33
Called /a.php
Ran to completion, created class instance: A
---
Running test from: 8.3.2
Called /a.php
Ran to completion, created class instance: A
```

If the `A` class is removed from `a.php` (e.g. rename `A` to `A_`), we'll see:

```
Running test from: 7.0.33
Called /b.php
Ran to completion, created class instance: A
---
Running test from: 7.4.33
Called /b.php
Ran to completion, created class instance: A
---
Running test from: 8.3.2
Called /b.php
Ran to completion, created class instance: A
```
