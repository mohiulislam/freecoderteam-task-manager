<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChecklistItem extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'checklist_items';

    protected $fillable = ['task_id','name','completed'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function task()
    {
        return $this->hasOne('App\Models\Task', 'id', 'task_id');
    }
    
}
