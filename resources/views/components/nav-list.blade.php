<flux:navlist variant="outline">
    <flux:navlist.item href="{{ route('home') }}" :current="request()->routeIs('home')">
        {{ __('app.nav_home') }}
    </flux:navlist.item>

    <flux:navlist.item href="{{ route('rooms') }}" :current="request()->routeIs('rooms')">
        {{ __('app.nav_rooms') }}
    </flux:navlist.item>

    <flux:navlist.item href="{{ route('peoples') }}" :current="request()->is('peoples*')">
        {{ __('app.nav_people') }}
    </flux:navlist.item>

    <flux:navlist.item href="{{ route('payments') }}" :current="request()->routeIs('payments')">
        {{ __('app.nav_payments') }}
    </flux:navlist.item>
</flux:navlist>