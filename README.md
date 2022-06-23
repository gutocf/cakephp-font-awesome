#  FontAwesome for CakePHP

[![Build Status](https://img.shields.io/github/workflow/status/gutocf/cakephp-font-awesome/CI/master?style=flat-square)](https://github.com/gutocf/cakephp-font-awesome/actions?query=workflow%3ACI+branch%3Amaster)
[![Coverage Status](https://img.shields.io/codecov/c/github/gutocf/cakephp-font-awesome.svg?style=flat-square)](https://codecov.io/github/gutocf/cakephp-font-awesome)
[![Latest Stable Version](https://poser.pugx.org/gutocf/cakephp-font-awesome/v/stable.svg)](https://packagist.org/packages/gutocf/cakephp-font-awesome)
[![Total Downloads](https://img.shields.io/packagist/dt/gutocf/cakephp-font-awesome.svg?style=flat-square)](https://packagist.org/packages/gutocf/cakephp-font-awesome)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://packagist.org/packages/gutocf/cakephp-font-awesome)
[![PHPStan](https://img.shields.io/badge/PHPStan-Level%207-brightgreen.svg?style=flat-square&logo=php)](https://shields.io/#/)
[![Packagist Version](https://img.shields.io/packagist/v/gutocf/cakephp-font-awesome?style=flat-square)](https://packagist.org/packages/gutocf/cakephp-font-awesome)

##  Requirements

- PHP ^8.0
- CakePHP ^4

##  Installation

Install the plugin with composer

`composer require gutocf/cakephp-font-awesome`

###  Load helper

Load the helper at `Application.php` file

```php
public function initialize(): void
{
  //...
  $this->loadHelper('Gutocf/FontAwesome.FontAwesome');
}
```

Use it at your views

```php
echo $this->FontAwesome->icon('check');
```
