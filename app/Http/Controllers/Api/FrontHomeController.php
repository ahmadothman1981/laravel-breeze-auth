<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class FrontHomeController extends Controller
{
    public function all()
    {
        $users = User::all();
        
        return response()->json(compact('users'));
    }


}
