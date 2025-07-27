<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function show() {
        $data = Customer::all();

        return view('admin.data-customer', ['data' => $data]);
    }
}