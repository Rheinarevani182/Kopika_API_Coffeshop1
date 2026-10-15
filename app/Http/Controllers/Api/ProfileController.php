<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function show()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data profile demo berhasil diambil',
            'data' => [
                'name' => 'Rheina Revani',
                'username' => '@rhnarvn_0606',
                'membership' => 'KOPIKA Regular',
                'orders' => 12,
                'favorites' => 8,
                'points' => 320,
            ],
        ]);
    }
}