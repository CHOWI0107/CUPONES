<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserStore;

class UserStoreController extends Controller
{
    public function index()
    {
        return UserStore::all();
    }

    public function show(UserStore $user_store)
    {
        return $user_store;
    }
}
