<flux:navbar class="-mb-px max-lg:hidden">
    <flux:navbar.item wire:navigate icon="home" href="{{ route('dashboard') }}">Home</flux:navbar.item>
    <flux:navbar.item wire:navigate icon="inbox" href="{{ route('tournament.index') }}">Tournaments</flux:navbar.item>
    <flux:navbar.item wire:navigate icon="document-text" href="#">Documents</flux:navbar.item>
    <flux:navbar.item wire:navigate icon="calendar" href="#">Calendar</flux:navbar.item>

    <flux:separator vertical variant="subtle" class="my-2" />

    <flux:dropdown class="max-lg:hidden">
        <flux:navbar.item icon-trailing="chevron-down">Favorites</flux:navbar.item>

        <flux:navmenu>
            <flux:navmenu.item href="#">Marketing site</flux:navmenu.item>
            <flux:navmenu.item href="#">Android app</flux:navmenu.item>
            <flux:navmenu.item href="#">Brand guidelines</flux:navmenu.item>
        </flux:navmenu>
    </flux:dropdown>
</flux:navbar>
