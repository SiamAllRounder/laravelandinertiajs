# Build First Vue Js Application

Step 1 Take A New Page On Pages Directory

`Home.vue → resources\js\Pages\Home.vue`

```jsx
<template>
    <h1> Salamoon Alaikoom From Laravel 10 & Inertia Js</h1>
</template>
```

Step 2 Place These Codes On Home Controller → `app\Http\Controllers\HomeController.php`

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function HomePage() {
        return Inertia::render('Home');
    }
}
```

![Untitled](Build%20First%20Vue%20Js%20Application%209b8e270e3f4e43d8a729ed39eb225af0/Untitled.png)

![Untitled](Build%20First%20Vue%20Js%20Application%209b8e270e3f4e43d8a729ed39eb225af0/Untitled%201.png)

Step 3 Define Route web

```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/well', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'HomePage']);
```

Step 4 `npm` run dev

![Untitled](Build%20First%20Vue%20Js%20Application%209b8e270e3f4e43d8a729ed39eb225af0/Untitled%202.png)

There is an error

Go To → resources\views\`index.blade.php`

Rename it `app.blade.php`  Now Works Just Fine

![Untitled](Build%20First%20Vue%20Js%20Application%209b8e270e3f4e43d8a729ed39eb225af0/Untitled%203.png)