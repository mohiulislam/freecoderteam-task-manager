<?php

namespace App\Livewire\Tasks;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Task;

class Create extends ModalComponent
{

    use LivewireAlert;

    public $user_id, $project_id, $title, $description, $due_date, $priority, $status;


    public function render()
    {
        return view('livewire.tasks.create');
    }





    public function store()
    {
        $this->validate([
           
		'user_id' => 'required',
		'project_id' => 'required',
		'title' => 'required',
		'priority' => 'required',
		'status' => 'required',
        ]);

        Task::create([
            
			'user_id' => $this-> user_id,
			'project_id' => $this-> project_id,
			'title' => $this-> title,
			'description' => $this-> description,
			'due_date' => $this-> due_date,
			'priority' => $this-> priority,
			'status' => $this-> status
        ]);

        $this->alert('success', 'Task Created Successfully', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false
        ]);

        $this->closeModalWithEvents(['tasksCreated']);
    }
}
