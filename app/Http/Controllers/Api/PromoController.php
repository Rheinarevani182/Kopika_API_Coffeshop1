<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Promo;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::all();

        return response()->json([
            'success' => true,
            'message' => 'Data promo KOPIKA berhasil diambil',
            'data' => $promos,
        ], 200);
    }

    public function show($id)
    {
        $promo = Promo::find($id);

        if (!$promo) {
            return response()->json([
                'success' => false,
                'message' => 'Promo tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail promo berhasil diambil',
            'data' => $promo,
        ], 200);
    }
}