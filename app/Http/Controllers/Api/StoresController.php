<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\TypeStore;

class StoresController extends Controller
{
    public function index()
    {
        return Store::all();
    }

    public function show(Store $store)
    {
        return $store;
    }

    public function getparticipa()
    {
        return Store::where('store_type', 1)->get();
    }

    public function getcanjea()
    {
        return Store::where('store_type', 3)->get();
    }

    public function Body(Request $request){
        $stores = Store::with([
            'typeStore'])->whereIn('id', $request->stores)->get();

        return response()->json($stores);
    }
}

