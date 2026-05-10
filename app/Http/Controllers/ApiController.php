<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class ApiController extends Controller
{
    public function getInventory()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Data Inventory berhasil diambil',
            'data' => [
                ['id' => 1, 'nama_barang' => 'Laptop Asus', 'stok' => 10],
                ['id' => 2, 'nama_barang' => 'Mouse Logitech', 'stok' => 50]
            ]
        ], 200);
    }
}