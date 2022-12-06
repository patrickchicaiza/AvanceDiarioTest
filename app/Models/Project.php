<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Client;

class Project extends Model
{
    use HasFactory;
    public $table = 'projects';
    protected $fillable = [
        'client_id', 'project_name'
    ];

 
}
