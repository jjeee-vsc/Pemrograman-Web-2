<?php
namespace App\Http\Controllers;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    public function index()
    {
        return response()->json(RoomType::all());
    }
    public function store(Request $request)
    {
        $data = RoomType::create($request->only('name', 'description', 'base_price'));
        return response()->json($data, 201);
    }
    public function show(RoomType $roomType)
    {
        return response()->json($roomType);
    }
    public function update(Request $request, RoomType $roomType)
    {
        $roomType->update($request->only('name', 'description', 'base_price'));
        return response()->json($roomType);
    }
    public function destroy(RoomType $roomType)
    {
        $roomType->delete();
        return response()->json(['message' => 'RoomType berhasil dihapus']);
    }
}