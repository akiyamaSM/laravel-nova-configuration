# laravel-nova-configuration

Use Configuration inputs instead of the env/config files. Good news for the clients!

## Requirements

Laravel Nova.

# Installation

First install the  [Nova](https://nova.laravel.com) package via composer:

```bash
composer require inani/laravel-nova-configuration
```

Next up, you must register the tool via the `tools` method of the `NovaServiceProvider`.

```php
// inside app/Providers/NovaServiceProvder.php

// ...

public function tools()
{
    return [
        // ...
        new \Inani\LaravelNovaConfiguration\LaravelNovaConfiguration()
    ];
}
```

Publish the config file:

``` bash
php artisan vendor:publish --provider="Inani\LaravelNovaConfiguration\ToolServiceProvider"
```

Then run the migration

``` bash
php artisan migrate
```

# Usage

## In the back office

After installing the tool, you should see the new sidebar navigation item for `Packages Configuration`.
And then just you have to manipulate the settings.

## In the code


```php

// Get the value of the API_GOOGLE key, null if it doesn't exist

use Inani\LaravelNovaConfiguration\Helpers\Configuration;

$value = Configuration::get('API_GOOGLE');

```

Enjoy coding.
