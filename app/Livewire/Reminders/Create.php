<?php

namespace App\Livewire\Reminders;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Reminder;

class Create extends ModalComponent
{

    use LivewireAlert;

    public $title, $description, $date, $time, $user_id;


    public function render()
    {
        return view('livewire.reminders.create');
    }





    public function store()
    {
        $this->validate([
           
		'title' => 'required',
		'description' => 'required',
		'date' => 'required',
		'time' => 'required',
		'user_id' => 'required',
        ]);

        Reminder::create([
            
			'title' => $this-> title,
			'description' => $this-> description,
			'date' => $this-> date,
			'time' => $this-> time,
			'user_id' => $this-> user_id
        ]);

        $this->alert('success', 'Reminder Created Successfully', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false
        ]);

        $this->closeModalWithEvents(['remindersCreated']);
    }
}
