<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
class Form extends Model
{
    use HasFactory;
    public $table = 'forms';
    public function user(){
        return $this->belongsTo(User::class, 'user');
    }
    protected $fillable = [
        'date', 'entryTime', 'departureTime'
    ];  

}
