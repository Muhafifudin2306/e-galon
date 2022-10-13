<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplyController extends Controller
{
    public function index_air()
    {
        return view('supply.index_air');
    }

    public function index_tool()
    {
        return view('supply.index_tool');
    }
}
