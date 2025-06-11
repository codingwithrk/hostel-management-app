<?php

use App\Models\Room;
use Native\Mobile\Facades\Dialog;

if (!function_exists('incrementRoom')) {
    function incrementRoom($roomId): void
    {
        $prevRoom = Room::whereId($roomId)->first();
        if ($prevRoom->capacity <= $prevRoom->available_rooms + 1) {
            $prevRoom->available_rooms++;
            $prevRoom->save();
        }
    }
}

if (!function_exists('deleteRoomHelper')) {
    function deleteRoomHelper(Room $room)
    {
        $message = 'Room ' . $room->room_name . ' deleted successfully';
        $room->delete();
        Dialog::toast($message);
        return redirect()->route('rooms');
    }
}