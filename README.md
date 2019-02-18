# PHP Library Registry

The Registry provides a safe implementation of an a registry store for variables, that can be used anywhere in the app.

It is a safe alternative of the $GLOBALS variable. 

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


### 1. Setting, retrieving, removing ###
```php
\Sinevia\Registry::set('admin_email','admin@domain.com');

if (\Sinevia\Registry::has('admin_email')) { 
    echo \Sinevia\Registry::get('admin_email');
}

\Sinevia\Registry::remove('admin_email');

```

### 2. Default value ###
```php
$title = \Sinevia\Registry::get('title', 'Undefined');
```
