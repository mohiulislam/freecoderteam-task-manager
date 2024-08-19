<?php
namespace App\Livewire\ProjectTeams;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\ProjectTeam;

class Edit extends ModalComponent
{
    use LivewireAlert;

    public $project_id, $user_id, $role;
    public $id;

    public function mount($id)
    {
        $this->id = $id;
        $record = ProjectTeam::find($id);
        
		$this->project_id = $record->project_id;
		$this->user_id = $record->user_id;
		$this->role = $record->role;

    }

    public function render()
    {
        return view('livewire.project-teams.edit');
    }




    //update
    public function update()
    {

        $this->validate([
           
		'project_id' => 'required',
		'user_id' => 'required',
		'role' => 'required',
        ]);

        $record = ProjectTeam::find($this->id);
        $record->update([
            
			'project_id' => $this-> project_id,
			'user_id' => $this-> user_id,
			'role' => $this-> role
        ]);

        $this->closeModalWithEvents(['projectTeamsUpdated']);
       // $this->reset();
    }
}
