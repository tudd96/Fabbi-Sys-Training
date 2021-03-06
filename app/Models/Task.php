<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    function userTask(){
        return $this->belongsToMany(User::class, 'user_task','task_id','user_id');
    }
    function subjectTask(){
        return $this->belongsToMany(Subject::class, 'subject_task','task_id','subject_id');
    }
}
