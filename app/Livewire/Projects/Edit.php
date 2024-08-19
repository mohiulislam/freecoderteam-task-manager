<?php
namespace App\Livewire\Projects;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Project;

class Edit extends ModalComponent
{
    use LivewireAlert;

    public $user_id, $name, $description, $start_date, $end_date, $status, $budget;
    public $id;

    public function mount($id)
    {
        $this->id = $id;
        $record = Project::find($id);
        
		$this->user_id = $record->user_id;
		$this->name = $record->name;
		$this->description = $record->description;
		$this->start_date = $record->start_date;
		$this->end_date = $record->end_date;
		$this->status = $record->status;
		$this->budget = $record->budget;

    }

    public function render()
    {
        return view('livewire.projects.edit');
    }




    //update
    public function update()
    {

        $this->validate([
           
		'user_id' => 'required',
		'name' => 'required',
		'status' => 'required',
        ]);

        $record = Project::find($this->id);
        $record->update([
            
			'user_id' => $this-> user_id,
			'name' => $this-> name,
			'description' => $this-> description,
			'start_date' => $this-> start_date,
			'end_date' => $this-> end_date,
			'status' => $this-> status,
			'budget' => $this-> budget
        ]);

        $this->closeModalWithEvents(['projectsUpdated']);
       // $this->reset();
    }
}
