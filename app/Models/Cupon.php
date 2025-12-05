<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use App\Models\typeCupon;



class Cupon extends Model
{
    use HasFactory;

    protected $table = 'cupones';

    protected $fillable = ['product','store','monto','ticket','cupon','type_cupon','user','store_from'];

    public function product() {
        return $this->belongsTo(Product::class, 'product', 'id');
    }

    public function store() {
        return $this->belongsTo(Store::class, 'store', 'id');
    }

    public function storeFrom() {
        return $this->belongsTo(Store::class, 'store_from', 'id');
    }

    public function typeCupon() {
        return $this->belongsTo(TypeCupon::class, 'type_cupon', 'id');
    }

    public function creadoPor() {
        return $this->belongsTo(User::class, 'user', 'id');
    }
}


