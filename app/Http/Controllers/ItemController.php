<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class ItemController extends BaseController
{
    public function index(Request $request)
    {
        $query = Item::with('category');

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        return $this->success($query->get());
    }

    // method store, show, update, destroy biarkan seperti sebelumnya
}