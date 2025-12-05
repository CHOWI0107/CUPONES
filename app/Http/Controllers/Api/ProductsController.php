<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        return product::all();
    }

    public function show(product $product)
    {
        return $product;
    }

    public function Body(Request $request){
        $product = Product::with([
            'typeCupon'])->whereIn('id', $request->products)->get();

        return response()->json($product);
    }
}
