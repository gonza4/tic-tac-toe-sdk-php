# Tic Tac Toe SDK PHP

A PHP library to play Tic Tac Toe through the Tic Tac Toe API.

## Requirements

PHP 5.6 and later.

## Composer

You can install the SDK via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require gonza4/tic-tac-toe-sdk-php
```

To use the SDK, use Composer's [autoload](https://getcomposer.org/doc/01-basic-usage.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## Dependencies

The SDK require the following extensions in order to work properly:

- [`curl`](https://secure.php.net/manual/en/book.curl.php), although you can use your own non-cURL client if you prefer
- [`json`](https://secure.php.net/manual/en/book.json.php)

If you use Composer, these dependencies should be handled automatically. If you install manually, you'll want to make sure that these extensions are available.

## Getting Started

Simple usage looks like:

* Create a instance of the TicTacToe Client

```php
    $tictactoe = new \Gonza4\TicTacToe();
```

* Generate empty board

```php
    $result = $tictactoe->getEmptyBoard();
    var_dump($result);
```

* Make a move

```php
    $result = $tictactoe->postPlayGame(1);
    var_dump($result);
```
