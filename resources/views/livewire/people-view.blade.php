<div>
    <flux:callout>
        <flux:callout.heading>{{ $data->person_name }}</flux:callout.heading>

        <flux:callout.text>
            <ul>
                <li>{{ __('app.people_mobile_no') }}: {{ $data->person_mobile_number }}</li>
                <li>{{ __('app.people_room_name') }}: {{ $data->room->room_name }}</li>
                <li>{{ __('app.people_room_price') }}: {{ $data->room_price }}</li>
            </ul>

            <h1 class="mt-5 mb-3 font-bold">{{ __('app.payment_history') }}</h1>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-2">
                    <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-3">{{ __('app.payment_amount') }}</th>
                        <th class="px-6 py-3">{{ __('app.payment_date') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($data->payments as $payments)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <td class="pl-6 py-4">{{ $payments->amount }}</td>
                            <td class="pl-6 py-4">{{ \Carbon\Carbon::parse($payments->date_of_pay)->format('d-M-Y') }}</td>
                        </tr>
                    @empty
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <td colspan="2" class="text-center py-4">{{ __('app.payments_table_empty') }}</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </flux:callout.text>
    </flux:callout>
</div>
