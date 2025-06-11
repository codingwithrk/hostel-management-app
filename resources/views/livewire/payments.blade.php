<div>
    <!-- Add Room -->
    <div class="flex justify-end my-3">
        <flux:modal.trigger name="add-payment">
            <flux:button>{{ __('app.add', ['name' => __('app.payments')]) }}</flux:button>
        </flux:modal.trigger>
        <flux:modal name="add-payment" class="md:w-96" :dismissible="false" @close="clearModalForm">
            <x-payment-form
                    :action="'addPayment'"
                    :mainTitle="__('app.add', ['name' => __('app.payments')])"
                    :buttonLabel="__('app.save')"
                    :person_id="$person_id"
                    :peoples="$peoples"
                    :amount="$amount"
                    :date_of_pay="$date_of_pay"
            />
        </flux:modal>
    </div>

    <!-- Table -->
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-2">
            <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-3">{{ __('app.people_name') }}</th>
                <th class="px-6 py-3">{{ __('app.payment_amount') }}</th>
                <th class="px-6 py-3">{{ __('app.payment_date') }}</th>
                <th class="px-6 py-3">{{ __('app.action') }}</th>
            </tr>
            </thead>
            <tbody>
            @forelse($payments as $payment)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <td class="pl-6 py-4">{{ $payment->person->person_name }}</td>
                    <td class="px-6 py-4">{{ $payment->amount }}</td>
                    <td class="px-6 py-4">{{ \Carbon\Carbon::parse($payment->date_of_pay)->format('d-M-Y') }}</td>
                    <td class="px-6 py-4 flex gap-2">
                        <flux:modal.trigger name="edit-room">
                            <flux:button icon="pencil-square" wire:click="editPayment({{ $payment->id }})"/>
                        </flux:modal.trigger>
                    </td>
                </tr>
            @empty
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <td colspan="4" class="text-center py-4">{{ __('app.payments_table_empty') }}</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <!-- Edit Modal -->
    <flux:modal name="edit-room" class="md:w-96" :dismissible="false" @close="clearModalForm">
        <x-payment-form
                :action="'updatePayment'"
                :mainTitle="__('app.update')"
                :buttonLabel="__('app.save')"
                :person_id="$person_id"
                :peoples="$peoples"
                :amount="$amount"
                :date_of_pay="$date_of_pay"
        />
    </flux:modal>
</div>
