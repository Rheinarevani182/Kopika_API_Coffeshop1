<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Store;

class StoreController extends Controller
{
    public function index()
    {
        return response()->json(Store::all());
    }

    public function show($id)
    {
        $store = Store::find($id);

        if (!$store) {
            return response()->json([
                'message' => 'Store tidak ditemukan'
            ], 404);
        }

        return response()->json($store);
    }
}