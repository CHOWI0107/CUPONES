<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\typeCupon;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    public function typeCupon() {
        return $this->belongsTo(TypeCupon::class, 'type_cupon', 'id');
    }
}
