<div>
    Because she competes with no one, no one can compete with her.

    <input type="text" placeholder="Search Place" wire:model="search">

    @foreach ($internationals as $international)

    <h3>{{ $international->place }}</h3>

    @endforeach
</div>
