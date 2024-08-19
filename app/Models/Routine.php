<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'routines';

    protected $fillable = ['user_id','title','description','frequency','days','weeks','months','start_time','end_time'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    
}
