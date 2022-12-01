<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Client;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public $table = 'projects';
    public function client(){
        return $this->belongsTo(Client::class, 'client_name');
    }
}
