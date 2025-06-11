<?php

namespace App\Livewire;

use App\Enums\PeopleStatus;
use App\Models\Payment;
use App\Models\People;
use Livewire\Attributes\Title;
use Livewire\Component;
use Native\Mobile\Facades\Dialog;

#[Title('Payments')]
class Payments extends Component
{
    public $payments;
    public $peoples;

    public $person_id;
    public int $amount = 0;
    public $date_of_pay;
    public $paymentIdBeingEdited;

    public int $maxAmount = 1;

    public function mount()
    {
        $this->payments = Payment::with('person')->latest()->get();
        $this->peoples = People::with('room')->whereStatus(PeopleStatus::IN_HOSTEL)->latest()->get();
    }

    protected function rules(): array
    {
        return [
            'person_id' => 'required',
            'amount' => 'required|numeric|min:1|max:' . $this->maxAmount,
            'date_of_pay' => 'required|date',
        ];
    }

    protected function messages(): array
    {
        return [
            'person_id.required' => 'Please select a person',
            'date_of_pay.required' => 'Payment date is required',
            'amount.max' => 'Amount should be less than ' . $this->maxAmount . '.',
        ];
    }

    public function addPayment()
    {
        $this->validate();

        Payment::create([
            'person_id' => $this->person_id,
            'amount' => $this->amount,
            'date_of_pay' => $this->date_of_pay,
        ]);
        $message = "Amount of $this->amount added successfully";
        $this->clearModalForm();
        Dialog::toast($message);
        return redirect()->route('payments');
    }

    public function editPayment(Payment $payment): void
    {
        $this->paymentIdBeingEdited = $payment->id;
        $this->person_id = $payment->person_id;
        $this->amount = $payment->amount;
        $this->date_of_pay = $payment->date_of_pay;
        $this->maxAmount = (int)People::whereId($payment->person_id)->first()->room_price;
    }

    public function updatePayment()
    {
        $this->validate();

        $room = Payment::find($this->paymentIdBeingEdited);

        $room?->update([
            'person_id' => $this->person_id,
            'amount' => $this->amount,
            'date_of_pay' => $this->date_of_pay,
        ]);

        $this->clearModalForm();
        $message = 'Updated successfully';
        Dialog::toast($message);
        return redirect()->route('payments');
    }

    public function getMaxAmount(): void
    {
        $this->maxAmount = (int)People::whereId($this->person_id)->first()->room_price;
    }

    public function clearModalForm(): void
    {
        $this->reset(['person_id', 'amount', 'date_of_pay', 'paymentIdBeingEdited']);
    }

    public function render()
    {
        return view('livewire.payments');
    }
}
