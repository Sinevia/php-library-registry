# PHP Library Registry

The Registry provides a safe implementation of an a registry store for variables, that can be used anywhere in the app.

It is a safe alternative of the $GLOBALS variable. 

## Background ##

## Installation ##

### 1. Via Composer ###

```
composer require sinevia/php-library-registry
```

### 2. Manually ###

Download from https://github.com/Sinevia/php-library-registry 

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
