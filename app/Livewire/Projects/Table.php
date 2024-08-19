<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class Table extends DataTableComponent
{

    use LivewireAlert;

    protected $listeners = [
        'projectsCreated' => '$refresh',
        'projectsUpdated' => '$refresh',
        'projectsDeleted' => '$refresh',
         'confirmed',
        'cancelled',
    ];

    protected $model = Project::class;

    public $deleteId = null;

    public function configure(): void
    {
        $this->setSearchLazy();
        $this->setPrimaryKey('id');
        $this->setDefaultSort('id', 'desc');
    }

       public function columns(): array
            {
                return [
                    Column::make("Id", "id")
                        ->sortable(),

            Column::make("User Id", "user_id")->searchable()->sortable(),            Column::make("Name", "name")->searchable()->sortable(),            Column::make("Description", "description")->searchable()->sortable(),            Column::make("Start Date", "start_date")->searchable()->sortable(),            Column::make("End Date", "end_date")->searchable()->sortable(),            Column::make("Status", "status")->searchable()->sortable(),            Column::make("Budget", "budget")->searchable()->sortable(),
                    Column::make("Updated at", "updated_at")
                        ->format(function ($value, $row, Column $column) {
                            return Carbon::parse($value)->diffForHumans();
                        })
                        ->sortable(),

                    Column::make("Actions")
                        ->label(
                            function ($row, Column $column) {
                                $delete = "<button class=\"rounded-lg bg-red-500 px-4 py-2 text-white mr-2\" wire:click=\"triggerConfirm(" . $row->id . ")\">Delete</button>";
                                $edit = "<button class=\"rounded-lg bg-blue-500 px-4 py-2 text-white mr-2\" wire:click=\"edit(" . $row->id . ")\">Edit</button>";
                                if (!$row->is_active) {
                                    $is_active = "<button class=\"rounded-lg bg-green-500 px-4 py-2 text-white mr-2\" wire:click=\"approve(" . $row->id . ")\">Active</button>";
                                } else {
                                    $is_active = "<button class=\"rounded-lg bg-red-500 px-4 py-2 text-white mr-2\" wire:click=\"approve(" . $row->id . ")\">Deactive</button>";
                                }
                                // return  $delete;
                                return $edit . $delete . $is_active;
                            }
                        )->html(),

                ];
            }



    // edit
    public function edit($id)
    {
        $this->dispatch('openModal',  component: 'projects.edit', arguments: ['id' => $id]);
    }

    public function triggerConfirm($id)
    {
        $this->deleteId = $id;
        $this->confirm('Do you want to delete?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Cancel',
            'onConfirmed' => 'confirmed',
            'onCancelled' => 'cancelled',
        ]);
    }

    public function confirmed()
    {
        $this->destroy();
        $this->alert( 'success', 'Deleted successfully.');
    }

    public function cancelled()
    {
        $this->alert('info', 'Understood');
    }

    public function destroy()
    {
        if ($this->deleteId) {
            $record = Project::where('id', $this->deleteId);
            $record->delete();
            $this->dispatch('projectsDeleted');
        }
    }

    // approve
    public function approve($id)
    {
        $record = Project::find($id);
        $record->update([
            'is_active' => !$record->is_active,
        ]);
        $this->dispatch('projectsUpdated');
    }

}
