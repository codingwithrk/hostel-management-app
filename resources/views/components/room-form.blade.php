<div class="space-y-6">
    <flux:heading size="lg">{{ $mainTitle }}</flux:heading>
    <flux:input label="{{ __('app.room_modal_label1') }}" wire:model="room_name"/>
    <flux:input type="number" label="{{ __('app.room_modal_label2') }}" wire:model="capacity"/>
    @if($action == 'updateRoom')
        <flux:input type="number" label="{{ __('app.room_modal_label3') }}" wire:model="available_rooms"/>
    @endif
    <div class="flex">
        <flux:spacer/>
        <flux:button type="submit" variant="primary" wire:click="{{ $action }}">{{ $buttonLabel }}</flux:button>
    </div>
</div>
