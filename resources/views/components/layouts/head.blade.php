@php
    $finalTitle = config('app.name');
@endphp

<flux:sidebar sticky stashable class="bg-zinc-50 dark:bg-zinc-900 border-r rtl:border-r-0 rtl:border-l border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark"/>
    <flux:brand href="{{ route('home') }}" :name="$finalTitle" class="px-2 dark:hidden"/>
    <flux:brand href="{{ route('home') }}" :name="$finalTitle" class="px-2 hidden dark:flex"/>
    <x-nav-list/>
</flux:sidebar>
<flux:header class="lg:hidden">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left"/>
    <flux:brand href="{{ route('home') }}" :name="$finalTitle" class="px-2 dark:hidden"/>
    <flux:brand href="{{ route('home') }}" :name="$finalTitle" class="px-2 hidden dark:flex"/>
    <flux:spacer/>
    <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle" aria-label="Toggle dark mode"/>
</flux:header>