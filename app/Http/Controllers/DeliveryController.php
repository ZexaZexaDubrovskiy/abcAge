<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Product;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function __invoke()
    {
        $deliveries = Delivery::all();
        $products = Product::all();
        return view('infoprice', compact('deliveries'), compact('products'));
    }

    public function store()
    {
        $deliveries = Delivery::all();
        $products = Product::all();

        return view('infoprice', compact('deliveries'), compact('products'));
    }


}
