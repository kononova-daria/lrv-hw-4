<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    public function index()
    {
        return view('information', ['user' => Auth::user()]);
    }
}
