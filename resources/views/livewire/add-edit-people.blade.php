<div>
    <div class="flex justify-end my-3">
        <flux:button wire:click="backToPeoples">{{ __('app.back', ['name' => __('app.person')]) }}</flux:button>
    </div>
    <div class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl p-4 md:p-5 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
        <div class="flex flex-col gap-5">
            <flux:field>
                <flux:label>{{ __('app.people_name') }}</flux:label>
                <flux:input wire:model="name"/>
                <flux:error name="name"/>
            </flux:field>

            <flux:field>
                <flux:label>{{ __('app.people_mobile_no') }}</flux:label>
                <flux:input wire:model="mobile_number" maxlength="10"/>
                <flux:error name="mobile_number"/>
            </flux:field>

            <flux:field>
                <flux:label>{{ __('app.people_address') }}</flux:label>
                <flux:textarea wire:model="address"/>
                <flux:error name="address"/>
            </flux:field>

            <flux:field>
                <flux:label>{{ ucfirst(__('app.room')) }}</flux:label>
                <flux:select wire:model="room">
                    <option value="">Select Room</option>
                    @forelse($rooms as $room)
                        @if($room->available_rooms > 0)
                            <flux:select.option value="{{ $room->id }}" wire:key="{{ $room->id }}">
                                {{ $room->room_name }}
                            </flux:select.option>
                        @else
                            <flux:select.option disabled wire:key="{{ $room->id }}">
                                {{ $room->room_name }} ({{ __('app.people_room_not_available') }})
                            </flux:select.option>
                        @endif

                    @empty
                        <flux:select.option disabled>{{ __('app.room_table_empty') }}</flux:select.option>
                    @endforelse
                </flux:select>
                <flux:error name="room"/>
            </flux:field>

            <flux:field>
                <flux:label>{{ __('app.people_room_price') }}</flux:label>
                <flux:input wire:model="room_price" type="number"/>
                <flux:error name="room_price"/>
            </flux:field>

            <flux:field>
                <flux:label>{{ __('app.people_joining_date') }}</flux:label>
                <flux:input wire:model="joining_date" type="date" max="{{ today()->toDateString() }}" :disabled="$id"/>
                <flux:error name="joining_date"/>
            </flux:field>

            <flux:field @class(['hidden' => !$id])>
                <flux:label>{{ __('app.people_leave_date') }}</flux:label>
                <flux:input wire:model="leave_date" type="date" max="{{ today()->toDateString() }}"/>
                <flux:error name="leave_date"/>
            </flux:field>
            @php
                $action = "addPeople";
                if ($id) {
                    $action = "editPeople";
                }
            @endphp
            <flux:button variant="primary" wire:click="{{ $action }}">{{ __('app.save') }}</flux:button>
        </div>
    </div>
</div>
