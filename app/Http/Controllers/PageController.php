<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Welcome';
    }

    public function about() {
        return "2241720145 - Muhammad Baihaqi Aulia Asy'ari";
    }

    public function articles($id) {
        return 'Article Page with ID ' . $id;
    }
}
