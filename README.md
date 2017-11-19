# PHP Library Registry

The Registry provides a safe implementation of an a registry store for variables, that can be used anywhere in the app.

Its a safe alternative of the $GLOBALS variable. 

## Background ##

## Installation ##

Add the following to your composer file:

```json
   "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/sinevia/php-library-registry.git"
        }
    ],
    "require": {
        "sinevia/php-library-registry": "dev-master"
    },
```

## Usage ##


```php
Registry::set('admin_email','admin@domain.com');

if (Registry::has('admin_email')) { 
    echo Registry::get('admin_email');
}

Registry::remove('admin_email');

```
