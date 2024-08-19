<?php
namespace App\Livewire\Notes;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Note;

class Edit extends ModalComponent
{
    use LivewireAlert;

    public $user_id, $title, $content, $date, $time;
    public $id;

    public function mount($id)
    {
        $this->id = $id;
        $record = Note::find($id);
        
		$this->user_id = $record->user_id;
		$this->title = $record->title;
		$this->content = $record->content;
		$this->date = $record->date;
		$this->time = $record->time;

    }

    public function render()
    {
        return view('livewire.notes.edit');
    }




    //update
    public function update()
    {

        $this->validate([
           
		'user_id' => 'required',
		'title' => 'required',
        ]);

        $record = Note::find($this->id);
        $record->update([
            
			'user_id' => $this-> user_id,
			'title' => $this-> title,
			'content' => $this-> content,
			'date' => $this-> date,
			'time' => $this-> time
        ]);

        $this->closeModalWithEvents(['notesUpdated']);
       // $this->reset();
    }
}
