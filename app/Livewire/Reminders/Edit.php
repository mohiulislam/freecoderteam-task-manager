<?php
namespace App\Livewire\Reminders;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Reminder;

class Edit extends ModalComponent
{
    use LivewireAlert;

    public $title, $description, $date, $time, $user_id;
    public $id;

    public function mount($id)
    {
        $this->id = $id;
        $record = Reminder::find($id);
        
		$this->title = $record->title;
		$this->description = $record->description;
		$this->date = $record->date;
		$this->time = $record->time;
		$this->user_id = $record->user_id;

    }

    public function render()
    {
        return view('livewire.reminders.edit');
    }




    //update
    public function update()
    {

        $this->validate([
           
		'title' => 'required',
		'description' => 'required',
		'date' => 'required',
		'time' => 'required',
		'user_id' => 'required',
        ]);

        $record = Reminder::find($this->id);
        $record->update([
            
			'title' => $this-> title,
			'description' => $this-> description,
			'date' => $this-> date,
			'time' => $this-> time,
			'user_id' => $this-> user_id
        ]);

        $this->closeModalWithEvents(['remindersUpdated']);
       // $this->reset();
    }
}
