<?php

namespace App\Livewire\ProjectTeams;

use App\Models\ProjectTeam;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class Table extends DataTableComponent
{

    use LivewireAlert;

    protected $listeners = [
        'projectTeamsCreated' => '$refresh',
        'projectTeamsUpdated' => '$refresh',
        'projectTeamsDeleted' => '$refresh',
         'confirmed',
        'cancelled',
    ];

    protected $model = ProjectTeam::class;

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

            Column::make("Project Id", "project_id")->searchable()->sortable(),            Column::make("User Id", "user_id")->searchable()->sortable(),            Column::make("Role", "role")->searchable()->sortable(),
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
        $this->dispatch('openModal',  component: 'project-teams.edit', arguments: ['id' => $id]);
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
            $record = ProjectTeam::where('id', $this->deleteId);
            $record->delete();
            $this->dispatch('projectTeamsDeleted');
        }
    }

    // approve
    public function approve($id)
    {
        $record = ProjectTeam::find($id);
        $record->update([
            'is_active' => !$record->is_active,
        ]);
        $this->dispatch('projectTeamsUpdated');
    }

}
