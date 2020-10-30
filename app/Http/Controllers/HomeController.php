<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Foundation\Console\StorageLinkCommand;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    public function index()
    {
        $products = Product::latest()->paginate(10);

        return view('home', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
