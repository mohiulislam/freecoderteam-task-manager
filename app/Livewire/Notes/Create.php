<?php

namespace App\Livewire\Notes;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Note;

class Create extends ModalComponent
{

    use LivewireAlert;

    public $user_id, $title, $content, $date, $time;


    public function render()
    {
        return view('livewire.notes.create');
    }





    public function store()
    {
        $this->validate([
           
		'user_id' => 'required',
		'title' => 'required',
        ]);

        Note::create([
            
			'user_id' => $this-> user_id,
			'title' => $this-> title,
			'content' => $this-> content,
			'date' => $this-> date,
			'time' => $this-> time
        ]);

        $this->alert('success', 'Note Created Successfully', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false
        ]);

        $this->closeModalWithEvents(['notesCreated']);
    }
}
