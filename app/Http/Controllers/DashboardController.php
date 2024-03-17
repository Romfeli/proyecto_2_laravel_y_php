<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request) {
        $title = $request->query('title', 'valor default');
        return view('test', ['title'=>$title]);
    }
}
