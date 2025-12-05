<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeStore;


class Store extends Model
{
    use HasFactory;
    protected $table = 'stores';

    public function typeStore() {
        return $this->belongsTo(TypeStore::class, 'store_type', 'id');
    }
}
