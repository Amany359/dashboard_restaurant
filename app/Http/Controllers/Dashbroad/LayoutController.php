<?php

namespace App\Http\Controllers\Dashbroad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index(){
        return view('dashboard.layout');

    }
}
