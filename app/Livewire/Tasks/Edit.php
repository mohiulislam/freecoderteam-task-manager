<?php
namespace App\Livewire\Tasks;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Task;

class Edit extends ModalComponent
{
    use LivewireAlert;

    public $user_id, $project_id, $title, $description, $due_date, $priority, $status;
    public $id;

    public function mount($id)
    {
        $this->id = $id;
        $record = Task::find($id);
        
		$this->user_id = $record->user_id;
		$this->project_id = $record->project_id;
		$this->title = $record->title;
		$this->description = $record->description;
		$this->due_date = $record->due_date;
		$this->priority = $record->priority;
		$this->status = $record->status;

    }

    public function render()
    {
        return view('livewire.tasks.edit');
    }




    //update
    public function update()
    {

        $this->validate([
           
		'user_id' => 'required',
		'project_id' => 'required',
		'title' => 'required',
		'priority' => 'required',
		'status' => 'required',
        ]);

        $record = Task::find($this->id);
        $record->update([
            
			'user_id' => $this-> user_id,
			'project_id' => $this-> project_id,
			'title' => $this-> title,
			'description' => $this-> description,
			'due_date' => $this-> due_date,
			'priority' => $this-> priority,
			'status' => $this-> status
        ]);

        $this->closeModalWithEvents(['tasksUpdated']);
       // $this->reset();
    }
}
