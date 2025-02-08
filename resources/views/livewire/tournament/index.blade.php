<div>
    <div class="flex items-end justify-between">
        <flux:heading size="lg">Tournaments</flux:heading>
        <flux:button variant="primary">Create</flux:button>
    </div>
    <flux:separator class="my-5" variant="subtle" />
    @foreach ($tournaments as $tournament)
        <p>{{ $tournament->name }}</p>
    @endforeach
</div>
