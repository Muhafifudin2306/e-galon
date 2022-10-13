<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('invoice.index');
    }
    public function create()
    {
        return view('invoice.add');
    }

    public function index_finance()
    {
        return view('finance.index');
    }
    public function create_finance()
    {
        return view('finance.create');
    }
}
