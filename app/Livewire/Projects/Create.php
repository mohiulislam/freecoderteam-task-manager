<?php

namespace App\Livewire\Projects;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Project;

class Create extends ModalComponent
{

    use LivewireAlert;

    public $user_id, $name, $description, $start_date, $end_date, $status, $budget;


    public function render()
    {
        return view('livewire.projects.create');
    }





    public function store()
    {
        $this->validate([
           
		'user_id' => 'required',
		'name' => 'required',
		'status' => 'required',
        ]);

        Project::create([
            
			'user_id' => $this-> user_id,
			'name' => $this-> name,
			'description' => $this-> description,
			'start_date' => $this-> start_date,
			'end_date' => $this-> end_date,
			'status' => $this-> status,
			'budget' => $this-> budget
        ]);

        $this->alert('success', 'Project Created Successfully', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false
        ]);

        $this->closeModalWithEvents(['projectsCreated']);
    }
}
