<?php

namespace App\Livewire\Routines;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Routine;

class Create extends ModalComponent
{

    use LivewireAlert;

    public $user_id, $title, $description, $frequency, $days, $weeks, $months, $start_time, $end_time;


    public function render()
    {
        return view('livewire.routines.create');
    }





    public function store()
    {
        $this->validate([
           
		'user_id' => 'required',
		'title' => 'required',
		'frequency' => 'required',
		'start_time' => 'required',
		'end_time' => 'required',
        ]);

        Routine::create([
            
			'user_id' => $this-> user_id,
			'title' => $this-> title,
			'description' => $this-> description,
			'frequency' => $this-> frequency,
			'days' => $this-> days,
			'weeks' => $this-> weeks,
			'months' => $this-> months,
			'start_time' => $this-> start_time,
			'end_time' => $this-> end_time
        ]);

        $this->alert('success', 'Routine Created Successfully', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false
        ]);

        $this->closeModalWithEvents(['routinesCreated']);
    }
}
