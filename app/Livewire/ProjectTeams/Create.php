<?php

namespace App\Livewire\ProjectTeams;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\ProjectTeam;

class Create extends ModalComponent
{

    use LivewireAlert;

    public $project_id, $user_id, $role;


    public function render()
    {
        return view('livewire.project-teams.create');
    }





    public function store()
    {
        $this->validate([
           
		'project_id' => 'required',
		'user_id' => 'required',
		'role' => 'required',
        ]);

        ProjectTeam::create([
            
			'project_id' => $this-> project_id,
			'user_id' => $this-> user_id,
			'role' => $this-> role
        ]);

        $this->alert('success', 'ProjectTeam Created Successfully', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false
        ]);

        $this->closeModalWithEvents(['projectTeamsCreated']);
    }
}
