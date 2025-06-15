<?php

namespace App\Livewire;

use App\Models\People;
use Native\Mobile\Facades\Dialog;
use Livewire\Attributes\{Title, Url};
use Livewire\Component;

#[Title('People details')]
class PeopleView extends Component
{
    #[Url]
    public $id;
    public $data;

    public function mount(): void
    {
        $this->data = People::with(['payments', 'room'])->whereId($this->id)->latest()->first();
//        dd($this->data);
        if (!$this->data) {
            Dialog::toast('No data found');
            redirect()->route('peoples');
        }
    }

    public function render()
    {
        return view('livewire.people-view');
    }
}
