<?php
namespace App\Livewire\Routines;

use LivewireUI\Modal\ModalComponent;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Routine;

class Edit extends ModalComponent
{
    use LivewireAlert;

    public $user_id, $title, $description, $frequency, $days, $weeks, $months, $start_time, $end_time;
    public $id;

    public function mount($id)
    {
        $this->id = $id;
        $record = Routine::find($id);
        
		$this->user_id = $record->user_id;
		$this->title = $record->title;
		$this->description = $record->description;
		$this->frequency = $record->frequency;
		$this->days = $record->days;
		$this->weeks = $record->weeks;
		$this->months = $record->months;
		$this->start_time = $record->start_time;
		$this->end_time = $record->end_time;

    }

    public function render()
    {
        return view('livewire.routines.edit');
    }




    //update
    public function update()
    {

        $this->validate([
           
		'user_id' => 'required',
		'title' => 'required',
		'frequency' => 'required',
		'start_time' => 'required',
		'end_time' => 'required',
        ]);

        $record = Routine::find($this->id);
        $record->update([
            
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

        $this->closeModalWithEvents(['routinesUpdated']);
       // $this->reset();
    }
}
