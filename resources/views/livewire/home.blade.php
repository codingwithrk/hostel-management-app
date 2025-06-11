<div>
    <div class="flex flex-col gap-8">
        <flux:callout icon="home">
            <flux:callout.heading>Rooms</flux:callout.heading>

            <flux:callout.text @class(['flex flex-wrap justify-center lg:justify-start gap-2'])>
                <flux:badge color="lime">{{ __('app.home_total_rooms') }}: {{ $total_rooms }}</flux:badge>
                <flux:badge color="green">{{ __('app.home_available_beds') }}: {{ $available_rooms }}</flux:badge>
            </flux:callout.text>
        </flux:callout>

        <flux:callout icon="user">
            <flux:callout.heading>Peoples</flux:callout.heading>

            <flux:callout.text @class(['flex flex-wrap justify-center lg:justify-start gap-2'])>
                <flux:badge color="lime">{{ __('app.home_total_peoples') }}: {{ $total_peoples }}</flux:badge>
                <flux:badge color="green">{{ __('app.home_in_hostel_peoples') }}: {{ $in_hostel_peoples }}</flux:badge>
                <flux:badge color="red">{{ __('app.home_not_in_hostel_peoples') }}: {{ $not_in_hostel_peoples }}</flux:badge>
            </flux:callout.text>
        </flux:callout>
    </div>
</div>
