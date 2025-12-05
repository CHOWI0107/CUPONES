<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeCupon;

class TypeCuponesController extends Controller
{
    public function index()
    {
        return TypeCupon::all();
    }

    public function show(TypeCupon $type_cupon)
    {
        return $type_cupon;
    }
}
