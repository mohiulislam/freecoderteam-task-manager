<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'tasks';

    protected $fillable = ['user_id','project_id','title','description','due_date','priority','status'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function checklistItems()
    {
        return $this->hasMany('App\Models\ChecklistItem', 'task_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function project()
    {
        return $this->hasOne('App\Models\Project', 'id', 'project_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    
}
