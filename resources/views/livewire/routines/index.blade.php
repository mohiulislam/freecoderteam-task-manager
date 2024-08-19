<div>
    <x-slot name="header">
       Routine
    </x-slot>
    <x-primary-button onclick="Livewire.dispatch('openModal', { component: 'routines.create' })"
    class="flex mb-10 justify-right">
       Create Routine
    </x-primary-button>
    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            {{-- table  --}}
            <livewire:routines.table />
        </div>
    </div>
</div>
