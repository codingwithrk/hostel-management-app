@php
    use App\Enums\PeopleStatus;
@endphp

<div>
    <div class="flex justify-end my-3">
        <flux:button wire:click="addPeople">{{ __('app.add', ['name' => __('app.person')]) }}</flux:button>
    </div>

    <!-- Table -->
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-2">
            <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-3">{{ __('app.people_name') }}</th>
                <th class="px-6 py-3">{{ __('app.people_room_name') }}</th>
                <th class="px-6 py-3">{{ __('app.people_status') }}</th>
                <th class="px-6 py-3">{{ __('app.action') }}</th>
            </tr>
            </thead>
            <tbody>
            @forelse($peoples as $people)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <td class="pl-6 py-4">{{ $people->person_name }}</td>
                    <td class="pl-6 py-4">{{ $people?->room?->room_name }}</td>
                    <td class="px-6 py-4">
                        <flux:badge color="{{ $people->status === PeopleStatus::IN_HOSTEL ? __('green') : __('red') }}">
                            {{ $people->status === PeopleStatus::IN_HOSTEL ? __('app.people_in_hostel') : __('app.people_not_in_hostel') }}
                        </flux:badge>
                    </td>
                    <td class="px-6 py-4 flex gap-2">
                        <flux:button icon="eye" variant="primary" wire:click="viewPeopleDetails({{ $people->id }})"/>
                        <flux:modal.trigger name="edit-room">
                            <flux:button icon="pencil-square" wire:click="editPeople({{ $people->id }})"/>
                        </flux:modal.trigger>
                        <flux:button icon="trash" variant="danger" wire:click="deletePeople({{ $people->id }})" wire:confirm="{{ __('app.people_delete_confirm') }}"/>
                    </td>
                </tr>
            @empty
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <td colspan="4" class="text-center py-4">{{ __('app.people_table_empty') }}</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
