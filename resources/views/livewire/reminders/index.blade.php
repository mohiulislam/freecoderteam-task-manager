<div>
    <x-slot name="header">
       Reminder
    </x-slot>
    <x-primary-button onclick="Livewire.dispatch('openModal', { component: 'reminders.create' })"
    class="flex mb-10 justify-right">
       Create Reminder
    </x-primary-button>
    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            {{-- table  --}}
            <livewire:reminders.table />
        </div>
    </div>
</div>
