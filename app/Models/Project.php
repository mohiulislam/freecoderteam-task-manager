<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'projects';

    protected $fillable = ['user_id','name','description','start_date','end_date','status','budget'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projectTeams()
    {
        return $this->hasMany('App\Models\ProjectTeam', 'project_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany('App\Models\Task', 'project_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    
}
