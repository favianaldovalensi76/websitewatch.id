<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'user_name' => 'required',
            'user_contact' => 'required',
            'user_address' => 'required',
        ]);

        Order::create($request->all());

        return response()->json(['message' => 'Pesanan berhasil disimpan!'], 200);
    }
}
