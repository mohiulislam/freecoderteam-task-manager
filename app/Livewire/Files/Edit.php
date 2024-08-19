<?php
namespace App\Livewire\Files;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\File;

class Edit extends ModalComponent
{
    use LivewireAlert;

    public $user_id, $name, $path, $type;
    public $id;

    public function mount($id)
    {
        $this->id = $id;
        $record = File::find($id);
        
		$this->user_id = $record->user_id;
		$this->name = $record->name;
		$this->path = $record->path;
		$this->type = $record->type;

    }

    public function render()
    {
        return view('livewire.files.edit');
    }




    //update
    public function update()
    {

        $this->validate([
           
		'user_id' => 'required',
		'name' => 'required',
		'path' => 'required',
		'type' => 'required',
        ]);

        $record = File::find($this->id);
        $record->update([
            
			'user_id' => $this-> user_id,
			'name' => $this-> name,
			'path' => $this-> path,
			'type' => $this-> type
        ]);

        $this->closeModalWithEvents(['filesUpdated']);
       // $this->reset();
    }
}
