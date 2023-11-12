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
