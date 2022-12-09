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
    protected $fillable = [
        'project_id', 'platform_id', 'form_id', 'epic', 'userStory', 'estimatedTime', 'startTime', 'endTime', 'progress', 'images', 'status','comment'
    ];  
}
