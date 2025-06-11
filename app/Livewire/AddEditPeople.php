<?php

namespace App\Livewire;

use App\Enums\PeopleStatus;
use App\Models\People;
use App\Models\Room;
use Livewire\Attributes\Url;
use Livewire\Component;
use Native\Mobile\Facades\Dialog;

class AddEditPeople extends Component
{
    #[Url]
    public $id;
    public $rooms;

    public $name, $mobile_number, $address, $room, $room_price = 0, $joining_date, $leave_date;

    public function mount(): void
    {
        if ($this->id) {
            $this->rooms = Room::latest()->get();
            $peoples = People::with('room')->where('id', $this->id)->first();
            $this->name = $peoples->person_name;
            $this->mobile_number = $peoples->person_mobile_number;
            $this->address = $peoples->address;
            $this->room = $peoples->room->id;
            $this->room_price = $peoples->room_price;
            $this->joining_date = $peoples->joining_date;
            $this->leave_date = $peoples->leaving_date;
        } else {
            $this->rooms = Room::where('available_rooms', '>', 0)->latest()->get();
        }
    }

    protected function rules(): array
    {
        $rules = [
            'name' => 'required',
            'mobile_number' => 'required',
            'address' => 'nullable',
            'room' => 'required',
            'room_price' => 'required|min:0|numeric',
        ];

        if ($this->id) {
            $rules['leave_date'] = 'nullable';
        } else {
            $rules['joining_date'] = 'required';
        }

        return $rules;
    }

    public function addPeople()
    {
        $this->validate();

        People::create([
            'person_name' => $this->name,
            'person_mobile_number' => $this->mobile_number,
            'address' => $this->address,
            'room_id' => $this->room,
            'room_price' => $this->room_price,
            'joining_date' => $this->joining_date,
        ]);

        Room::whereId($this->room)->decrement('available_rooms');
        $message = $this->name . ' added successfully';
        $this->reset(['name', 'mobile_number', 'address', 'room', 'room_price', 'joining_date']);
        Dialog::toast($message);
        return redirect()->route('peoples');
    }

    public function editPeople()
    {
        $this->validate();
        $person = People::find($this->id);

        $updatedFields = [];

        if ($person->person_name !== $this->name) {
            $updatedFields['person_name'] = $this->name;
        }

        if ($person->person_mobile_number !== $this->mobile_number) {
            $updatedFields['person_mobile_number'] = $this->mobile_number;
        }

        if ($person->address !== $this->address) {
            $updatedFields['address'] = $this->address;
        }

        if ($person->room_id !== $this->room) {
            incrementRoom($person->room_id);
            $updatedFields['room_id'] = $this->room;
            Room::whereId($this->room)->decrement('available_rooms');
        }

        if ((float)$person->room_price !== (float)$this->room_price) {
            $updatedFields['room_price'] = $this->room_price;
        }

        if ($person->leaving_date !== $this->leave_date) {
            incrementRoom($person->room_id);
            $updatedFields['leaving_date'] = $this->leave_date;
            $updatedFields['status'] = PeopleStatus::NOT_HOSTEL;
        }

        if (!empty($updatedFields)) {
            $person->update($updatedFields);
        }

        $message = $this->name . ' updated successfully';
        $this->reset(['name', 'mobile_number', 'address', 'room', 'room_price', 'joining_date']);
        Dialog::toast($message);
        return redirect()->route('peoples');
    }

    public function backToPeoples()
    {
        return redirect()->route('peoples');
    }

    public function render()
    {
        $title = 'Add Person';
        if ($this->id) {
            $title = 'Edit Person';
        }
        return view('livewire.add-edit-people')->title($title);
    }
}
