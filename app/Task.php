<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

	protected $guarded = [];
    //

    public function project()
    {
    	return $this->belongsTo(Project::class);
    }

    public function complete($completed = true) // $task->complete(false)
    {
    	$this->update(compact('completed'));
    	// $this->update(['completed' => $completed ]);
    }

    public function incomplete()
    {
    	$this->complete(false); //Called method above but passes false
    }
}
