<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\User;

class UserController extends Controller
{
    /**
     * Get all user
     */
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

}
