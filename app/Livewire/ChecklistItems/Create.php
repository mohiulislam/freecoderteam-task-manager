<?php

namespace App\Livewire\ChecklistItems;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\ChecklistItem;

class Create extends ModalComponent
{

    use LivewireAlert;

    public $task_id, $name, $completed;


    public function render()
    {
        return view('livewire.checklist-items.create');
    }





    public function store()
    {
        $this->validate([
           
		'task_id' => 'required',
		'name' => 'required',
		'completed' => 'required',
        ]);

        ChecklistItem::create([
            
			'task_id' => $this-> task_id,
			'name' => $this-> name,
			'completed' => $this-> completed
        ]);

        $this->alert('success', 'ChecklistItem Created Successfully', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false
        ]);

        $this->closeModalWithEvents(['checklistItemsCreated']);
    }
}
