<?php
namespace App\Http\Controllers;
use App\Models\HotelRoom;
use Illuminate\Http\Request;

class HotelRoomController extends Controller
{
    public function index()
    {
        return response()->json(HotelRoom::with('roomType')->get());
    }
    public function store(Request $request)
    {
        $data = HotelRoom::create($request->only('room_number', 'floor', 'is_available', 'room_type_id'));
        return response()->json($data, 201);
    }
    public function show(HotelRoom $hotelRoom)
    {
        return response()->json($hotelRoom);
    }
    public function update(Request $request, HotelRoom $hotelRoom)
    {
        $hotelRoom->update($request->only('room_number', 'floor', 'is_available', 'room_type_id'));
        return response()->json($hotelRoom);
    }
    public function destroy(HotelRoom $hotelRoom)
    {
        $hotelRoom->delete();
        return response()->json(['message' => 'HotelRoom berhasil dihapus']);
    }
}