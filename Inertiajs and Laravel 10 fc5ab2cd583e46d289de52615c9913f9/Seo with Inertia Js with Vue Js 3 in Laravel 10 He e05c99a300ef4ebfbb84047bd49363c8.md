# Seo with Inertia Js with Vue Js 3 in Laravel 10 Head Manipulation

`withViewData(['title' => 'Home Page']);`

[Responses - Inertia.js](https://inertiajs.com/responses#root-template-data)

![Untitled](Seo%20with%20Inertia%20Js%20with%20Vue%20Js%203%20in%20Laravel%2010%20He%20e05c99a300ef4ebfbb84047bd49363c8/Untitled.png)

![Untitled](Seo%20with%20Inertia%20Js%20with%20Vue%20Js%203%20in%20Laravel%2010%20He%20e05c99a300ef4ebfbb84047bd49363c8/Untitled%201.png)

```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/well', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'HomePage']);
Route::get('/product', [HomeController::class, 'ProductPage']);
// Route::inertia('/product', 'Product');
```

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function HomePage() {
        return Inertia::render('Home')->withViewData(['title' => 'Home Page']);
    }
    public function ProductPage() {
        return Inertia::render('Product')->withViewData(['title' => 'Product Page']);
    }
}
```

```php
<!DOCTYPE html>
<html>
  <head>
    <title>{{ $title }}</title>
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

![Untitled](Seo%20with%20Inertia%20Js%20with%20Vue%20Js%203%20in%20Laravel%2010%20He%20e05c99a300ef4ebfbb84047bd49363c8/Untitled%202.png)

![Untitled](Seo%20with%20Inertia%20Js%20with%20Vue%20Js%203%20in%20Laravel%2010%20He%20e05c99a300ef4ebfbb84047bd49363c8/Untitled%203.png)

[Build Modern Laravel Apps Using Inertia.js - Ep 15, Dynamic Head and Meta Tags](https://youtu.be/x_gMHfd0qnw?si=bUzdMoVZiAVaqNkp)