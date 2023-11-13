# Direct Routing With Vue File On Web Route wit inertia js

```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/well', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'HomePage']);
Route::inertia('/product', 'Product');
```

`resources\js\Pages\Product.vue`

```php
<template>
    <h1>Salam From Product Page</h1>
</template>
```