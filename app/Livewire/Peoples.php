<?php

namespace App\Livewire;

use App\Enums\PeopleStatus;
use App\Models\People;
use Livewire\Attributes\Title;
use Livewire\Component;
use Native\Mobile\Facades\Dialog;

#[Title('Peoples')]
class Peoples extends Component
{
    public $peoples;

    public function mount(): void
    {
        $this->peoples = People::with('room')->latest()->get();
    }

    public function addPeople()
    {
        return redirect()->route('add-people');
    }

    public function editPeople($id)
    {
        return redirect()->route('edit-people', $id);
    }

    public function deletePeople(People $people)
    {
        $message = $people->person_name . ' deleted successfully';
        if ($people->status === PeopleStatus::IN_HOSTEL) {
            incrementRoom($people->room_id);
        }
        $people->delete();
        Dialog::toast($message);
        return redirect()->route('peoples');
    }

    public function render()
    {
        return view('livewire.peoples');
    }
}
