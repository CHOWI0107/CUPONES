<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeStore;

class TypeStoreController extends Controller
{
    public function index()
    {
        return TypeStore::all();
    }

    public function show(TypeStore $type_store)
    {
        return $type_store;
    }
}
