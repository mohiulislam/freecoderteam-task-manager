<div>
    <x-slot name="header">
       Project Team
    </x-slot>
    <x-primary-button onclick="Livewire.dispatch('openModal', { component: 'projectTeams.create' })"
    class="flex mb-10 justify-right">
       Create Project Team
    </x-primary-button>
    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            {{-- table  --}}
            <livewire:projectTeams.table />
        </div>
    </div>
</div>
