<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Project;
use App\Models\Platform;
use App\Models\Form;

class Detail extends Model
{
    use HasFactory;

    public $table = 'details';
    public function form(){
        return $this->belongsTo(Form::class, 'form');
    }

    public function project(){
        return $this->belongsTo(Project::class, 'project');
    }

    public function platform(){
        return $this->belongsTo(Platform::class, 'platform');
    }

    protected $fillable = [
        'epic', 'userStory', 'estimatedTime', 'startTime', 'endTime', 'progress', 'images', 'comment', 'status' 
    ];  
}
