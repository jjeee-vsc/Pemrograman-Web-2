<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class CategoryController extends BaseController
{
    public function index()
    {
        $categories = Category::all();

        return $this->success(
            $categories,
            'Data kategori berhasil ditampilkan'
        );
    }

    public function store(Request $request)
    {
        $category = Category::create(
            $request->only('name')
        );

        return $this->success(
            $category,
            'Kategori berhasil ditambahkan',
            201
        );
    }

    public function show($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return $this->error(
                'Kategori tidak ditemukan',
                404
            );
        }

        return $this->success(
            $category,
            'Detail kategori berhasil ditampilkan'
        );
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return $this->error(
                'Kategori tidak ditemukan',
                404
            );
        }

        $category->update(
            $request->only('name')
        );

        return $this->success(
            $category,
            'Kategori berhasil diperbarui'
        );
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return $this->error(
                'Kategori tidak ditemukan',
                404
            );
        }

        $category->delete();

        return $this->success(
            null,
            'Kategori berhasil dihapus'
        );
    }
}