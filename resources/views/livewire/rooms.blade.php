<div>
    <!-- Add Room -->
    <div class="flex justify-end my-3">
        <flux:modal.trigger name="add-room">
            <flux:button>{{ __('app.add', ['name' => __('app.room')]) }}</flux:button>
        </flux:modal.trigger>
        <flux:modal name="add-room" class="md:w-96" :dismissible="false" @close="clearModalForm">
            <x-room-form :action="'addRoom'" :mainTitle="__('app.add', ['name' => __('app.room')])" :buttonLabel="__('app.save')" :roomName="$room_name" :capacity="$capacity"/>
        </flux:modal>
    </div>

    <!-- Table -->
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-2">
            <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-3">{{ __('app.room_name') }}</th>
                <th class="px-6 py-3">{{ __('app.room_capacity') }}</th>
                <th class="px-6 py-3">{{ __('app.room_available') }}</th>
                <th class="px-6 py-3">{{ __('app.action') }}</th>
            </tr>
            </thead>
            <tbody>
            @forelse($rooms as $room)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <td class="pl-6 py-4">{{ $room->room_name }}</td>
                    <td class="px-6 py-4">{{ $room->capacity }}</td>
                    <td class="px-6 py-4">
                        @if($room->available_rooms == 0)
                            <flux:badge color="red">
                                {{ $room->available_rooms }}
                            </flux:badge>
                        @else
                            {{ $room->available_rooms }}
                        @endif
                    </td>
                    <td class="px-6 py-4 flex gap-2">
                        <flux:modal.trigger name="edit-room">
                            <flux:button icon="pencil-square" wire:click="editRoom({{ $room->id }})"/>
                        </flux:modal.trigger>
                        <flux:button icon="trash" disabled="{{ $room->available_rooms < $room->capacity  }}" variant="danger" wire:click="deleteRoom({{ $room->id }})" wire:confirm="{{ __('app.room_delete_confirm') }}"/>
                    </td>
                </tr>
            @empty
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <td colspan="4" class="text-center py-4">{{ __('app.room_table_empty') }}</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <!-- Edit Modal -->
    <flux:modal name="edit-room" class="md:w-96" :dismissible="false" @close="clearModalForm">
        <x-room-form :action="'updateRoom'" :mainTitle="__('app.update')" :buttonLabel="__('app.update')" :roomName="$room_name" :capacity="$capacity"/>
    </flux:modal>
</div>
