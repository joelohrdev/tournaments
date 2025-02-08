<div>
    <div class="flex justify-center">
        <flux:tabs variant="segmented">
            <flux:tab>Upcoming</flux:tab>
            <flux:tab>Past</flux:tab>
            <flux:tab>Archived</flux:tab>
        </flux:tabs>
    </div>
    @foreach ($tournaments as $tournament)
        <p>{{ $tournament->name }}</p>
    @endforeach
</div>
