<div>
    <x-slot name="header">
       Project
    </x-slot>
    <x-primary-button onclick="Livewire.dispatch('openModal', { component: 'projects.create' })"
    class="flex mb-10 justify-right">
       Create Project
    </x-primary-button>
    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            {{-- table  --}}
            <livewire:projects.table />
        </div>
    </div>
</div>
