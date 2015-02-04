# Counties

[![Build Status](https://travis-ci.org/StudioForty9/Counties.svg?branch=master)](https://travis-ci.org/StudioForty9/Counties)

## Installation

### Composer

Add the package to your require list:

```json
"require": {
    "studioforty9/counties": "dev-master"
}
```

Add the repository to your project composer.json file:

```json
"repositories": [
    {"type": "composer", "url": "http://packages.firegento.com"},
    {"type": "vcs", "url": "git@github.com/studioForty9/counties.git"}
],
```

The module will run some database queries which insert Irish counties into the `directory_country_region` table and will automatically show in your checkout and shipping estimate forms and any other forms that use the `directory_country_region` table data.


## Contributing

[see CONTRIBUTING file](https://github.com/studioforty9/counties/blob/master/CONTRIBUTING.md)

## Licence

BSD 3 Clause [see LICENCE file](https://github.com/studioforty9/counties/blob/master/LICENCE)
