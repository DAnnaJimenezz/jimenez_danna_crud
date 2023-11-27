<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{
    use HasFactory;

    protected $fillable = [
        'admission_date',
        'user_id',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
