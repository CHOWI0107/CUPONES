<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cupon;
use Illuminate\Support\Facades\DB;

class CuponesController extends Controller
{

    public function index(){
        return Cupon::all();
    }



    public function show(Cupon $cupon){
        return $cupon;
    }

     public function Body(Request $request){
        $cupon = Cupon::with([
            'product',
            'store',
            'storeFrom',
            'typeCupon',
            'user'])->whereIn('id', $request->cupones)->get();

        return response()->json($cupon);
    }

     public function createdcupons(Request $request)
     {
    $cupon = Cupon::create([
        'product' => $request->product,
        'store' => $request->store,
        'monto' => $request->monto,
        'ticket' => $request->ticket,
        'cupon' => $request->cupon,
        'type_cupon' => $request->type_cupon,
        'user' => $request->user,
        'store_from' => $request->store_from
    ]);

     $cupon->load(['product','store','storeFrom','typeCupon','creadoPor']);
    return response()->json([
        'message' => 'Cupón creado correctamente',
        'cupon' => $cupon
    ]);
}



    public function createdcuponsmasive(Request $request)
    {
    $cuponesCreados = [];

    foreach ($request->cupones as $data) {
        $cupon = Cupon::create([
            'product' => $data['product'],
            'store' => $data['store'],
            'monto' => $data['monto'],
            'ticket' => $data['ticket'],
            'cupon' => $data['cupon'],
            'type_cupon' => $data['type_cupon'],
            'user' => $data['user'],
            'store_from' => $data['store_from']
        ]);

        $cupon->load(['product','store','storeFrom','typeCupon','user']);

        $cuponesCreados[] = $cupon;
    }

    return response()->json([
        'message' => 'Cupones creados correctamente',
        'cupones' => $cuponesCreados
    ]);
}
}
