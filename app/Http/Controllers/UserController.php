<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{
    public function index() {
        $data = UserModel::with('level')->get();
        return view('user', ['data' => $data]);
    }
}

