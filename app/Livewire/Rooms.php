<?php

namespace App\Livewire;

use App\Models\Room;
use Livewire\Attributes\Title;
use Livewire\Component;
use Native\Mobile\Facades\Dialog;

#[Title('Rooms')]
class Rooms extends Component
{
    public $rooms, $room_name = '', $capacity = 0, $available_rooms = 0, $roomIdBeingEdited = null;

    public function mount(): void
    {
        $this->rooms = Room::latest()->get();
    }

    protected function rules(): array
    {
        $rules = [
            'room_name' => 'required|unique:rooms,room_name,' . $this->roomIdBeingEdited,
            'capacity' => 'required|integer|min:1',
        ];
        if ($this->roomIdBeingEdited !== null) {
            $rules['available_rooms'] = 'required|integer|min:1|lte:capacity';
        }
        return $rules;
    }

    public function addRoom()
    {
        $this->validate();

        Room::create([
            'room_name' => $this->room_name,
            'capacity' => $this->capacity,
            'available_rooms' => $this->capacity,
        ]);
        $message = 'Room ' . $this->room_name . ' added successfully';
        $this->clearModalForm();
        Dialog::toast($message);
        return redirect()->route('rooms');
    }

    public function editRoom(Room $room): void
    {
        $this->roomIdBeingEdited = $room->id;
        $this->room_name = $room->room_name;
        $this->capacity = $room->capacity;
        $this->available_rooms = $room->available_rooms;
    }

    public function updateRoom()
    {
        $this->validate();

        $room = Room::find($this->roomIdBeingEdited);

        $room?->update([
            'room_name' => $this->room_name,
            'capacity' => $this->capacity,
            'available_rooms' => $this->available_rooms,
        ]);

        $this->clearModalForm();
        $message = 'Room ' . $room->room_name . ' updated successfully';
        Dialog::toast($message);
        return redirect()->route('rooms');
    }


    public function deleteRoom(Room $room)
    {
        $message = 'Room ' . $room->room_name . ' deleted successfully';
        $room->delete();
        Dialog::toast($message);
        return redirect()->route('rooms');
    }

    public function clearModalForm(): void
    {
        $this->reset(['room_name', 'capacity', 'roomIdBeingEdited']);
    }

    public function render()
    {
        return view('livewire.rooms');
    }
}
