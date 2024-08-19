<div>
    <x-slot name="header">
       File
    </x-slot>
    <x-primary-button onclick="Livewire.dispatch('openModal', { component: 'files.create' })"
    class="flex mb-10 justify-right">
       Create File
    </x-primary-button>
    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            {{-- table  --}}
            <livewire:files.table />
        </div>
    </div>
</div>
