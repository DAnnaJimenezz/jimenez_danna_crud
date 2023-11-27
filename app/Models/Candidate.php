<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'selection_status',
        'user_id',
        'points'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
