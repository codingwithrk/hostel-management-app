<?php

namespace App\Livewire;

use App\Enums\PeopleStatus;
use App\Models\People;
use App\Models\Room;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]
class Home extends Component
{
    public int $total_rooms = 0, $available_rooms = 0, $total_peoples = 0, $in_hostel_peoples = 0, $not_in_hostel_peoples = 0;

    public function mount(): void
    {
        $rooms = Room::select(['available_rooms'])->get();
        $peoples = People::select(['status'])->get();

        $this->total_rooms = count($rooms);
        $this->available_rooms = $rooms->sum('available_rooms');

        $this->total_peoples = count($peoples);
        $this->in_hostel_peoples = $peoples->where('status', PeopleStatus::IN_HOSTEL)->count();
        $this->not_in_hostel_peoples = $peoples->where('status', PeopleStatus::NOT_HOSTEL)->count();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
