<?php
namespace App\Livewire\ChecklistItems;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\ChecklistItem;

class Edit extends ModalComponent
{
    use LivewireAlert;

    public $task_id, $name, $completed;
    public $id;

    public function mount($id)
    {
        $this->id = $id;
        $record = ChecklistItem::find($id);
        
		$this->task_id = $record->task_id;
		$this->name = $record->name;
		$this->completed = $record->completed;

    }

    public function render()
    {
        return view('livewire.checklist-items.edit');
    }




    //update
    public function update()
    {

        $this->validate([
           
		'task_id' => 'required',
		'name' => 'required',
		'completed' => 'required',
        ]);

        $record = ChecklistItem::find($this->id);
        $record->update([
            
			'task_id' => $this-> task_id,
			'name' => $this-> name,
			'completed' => $this-> completed
        ]);

        $this->closeModalWithEvents(['checklistItemsUpdated']);
       // $this->reset();
    }
}
