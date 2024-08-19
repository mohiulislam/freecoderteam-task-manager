<?php

namespace App\Livewire\Files;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\File;

class Create extends ModalComponent
{

    use LivewireAlert;

    public $user_id, $name, $path, $type;


    public function render()
    {
        return view('livewire.files.create');
    }





    public function store()
    {
        $this->validate([
           
		'user_id' => 'required',
		'name' => 'required',
		'path' => 'required',
		'type' => 'required',
        ]);

        File::create([
            
			'user_id' => $this-> user_id,
			'name' => $this-> name,
			'path' => $this-> path,
			'type' => $this-> type
        ]);

        $this->alert('success', 'File Created Successfully', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false
        ]);

        $this->closeModalWithEvents(['filesCreated']);
    }
}
