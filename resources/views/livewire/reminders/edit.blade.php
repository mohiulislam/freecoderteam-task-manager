
<div>
    <div class='flex items-center justify-center'>
        <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
            <h3>
                <div class='flex items-center justify-between'>
                    <span class='text-2xl font-bold text-gray-900'>Edit Reminder</span>
                    <button wire:click="$dispatch('closeModal')" class='text-gray-400 hover:text-gray-500'>
                        <svg class='w-6 h-6 fill-current' viewBox='0 0 24 24'>
                            <path
                                d='M19.41 7.41L18 6l-6 6-6-6L4.59 7.41 12
                             15.01l7.41-7.42z' />
                        </svg>
                    </button>
                </div>
            </h3>
            <div class='max-w-md mx-auto space-y-6'>
                <form method="post" class="mt-6 space-y-6" wire:submit="update">


                    


            <div>
                <x-input label="{{__('Title')}}" name="title" type="text" wire:model="title"
                    placeholder="{{__('Title')}}" />
            </div>

            <div>
                <x-textarea label="{{__('Description')}}" name="description" placeholder="{{__('Description')}}" wire:model="description" />
            </div>



            <div>
                <x-input label="{{__('Date')}}" name="date" type="text" wire:model="date"
                    placeholder="{{__('Date')}}" />
            </div>



            <div>
                <x-input label="{{__('Time')}}" name="time" type="text" wire:model="time"
                    placeholder="{{__('Time')}}" />
            </div>



            <div>
                <x-input label="{{__('User Id')}}" name="user_id" type="text" wire:model="user_id"
                    placeholder="{{__('User Id')}}" />
            </div>




                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Update') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

