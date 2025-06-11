<div class="space-y-6">
    <flux:heading size="lg">{{ $mainTitle }}</flux:heading>
    <flux:select wire:model="person_id" label="{{ ucfirst(__('app.person')) }}">
        <option value="">Select Person</option>
        @forelse($peoples as $people)
            <flux:select.option value="{{ $people->id }}" wire:key="{{ $people->id }}">
                {{ $people->person_name }} ({{ $people->room->room_name }})
            </flux:select.option>
        @empty
            <flux:select.option disabled>{{ __('app.people_table_empty') }}</flux:select.option>
        @endforelse
    </flux:select>
    <flux:input type="number" label="{{ __('app.payment_amount') }}" wire:model="amount"/>
    <flux:input wire:model="date_of_pay" type="date" label="{{ __('app.payment_date') }}" max="{{ today()->toDateString() }}"/>
    <div class="flex">
        <flux:spacer/>
        <flux:button type="submit" variant="primary" wire:click="{{ $action }}">{{ $buttonLabel }}</flux:button>
    </div>
</div>
