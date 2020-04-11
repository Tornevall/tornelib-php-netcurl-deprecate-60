# Helper library for deprecations

During development of netcurl-6.1 I realize how damaged v6.0 and how much non-PSR4 it actually is, I decided to push all prior abstractions in a deprecation library instead of destroying v6.1 with a bunch of disturbing files in its root path.

So here it is! The deprecation library for netcurl-6.0

## Usage:

To make v6.1 work in an environment that is based on the old abstract classes, add this to your composer package:

    "tornevall/tornevall/tornelib-php-netcurl-deprecate-60": "^6.0",

Good luck!
