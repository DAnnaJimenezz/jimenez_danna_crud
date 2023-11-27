<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'profession',
        'speciality',
        'user_id'
    ];

    
    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
