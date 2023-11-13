# First Setup Server Side Setup

First install `laravel` 10 then from here [https://laravel.com/docs/10.x/installation](https://laravel.com/docs/10.x/installation)

with this command

```bash
composer create-project laravel/laravel ./
```

Then Now

Step 1 Go in here [https://laravel.com/docs/10.x/frontend#inertia](https://laravel.com/docs/10.x/frontend#inertia)

Step 2 Go in There [https://inertiajs.com/](https://inertiajs.com/)

Step 3 Go To Here [https://inertiajs.com/server-side-setup](https://inertiajs.com/server-side-setup)

Step 4 Give This Command To The Terminal

```bash

composer require inertiajs/inertia-laravel
```

Following This → ****Install dependencies****

Step 5 Make A New Controller `HomeController` 

```bash
php artisan make:controller HomeController
```

Step 6 Make A new View Name `index.blade.php`

```bash
php artisan make:view index
```

Step 7 Copy Paste This Code On To Index Blade View File

```php
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>
```

Following This [https://inertiajs.com/server-side-setup](https://inertiajs.com/server-side-setup) → ****Root template****

Then

Step 8 Make A Middle Ware

```php
php artisan inertia:middleware
```

Following This → ****Middleware**** `HandleInertiaRequests`

Look At this Carefully This is `inertia:middleware` not `make:middleware` 

Step 9 Register `HandleInertiaRequests` ****Middleware On To Kernel On Web Group****

app\Http\`Kernel`.php

```php
'web' => [
    // ...
    \App\Http\Middleware\HandleInertiaRequests::class,
],
```

Move On To Client Side Setup