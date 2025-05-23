<div>
    <div class="flex items-center gap-2">
        <h1>{{ $count }}</h1>

        <div class="flex items-center">
            <button class="border border-gray-300 rounded-md px-2 py-1 hover:bg-gray-200/20" wire:click="increment" type="button">+</button>
            <button class="border border-gray-300 rounded-md px-2 py-1 hover:bg-gray-200/20" wire:click="decrement" type="button">-</button>
        </div>
    </div>
</div>
