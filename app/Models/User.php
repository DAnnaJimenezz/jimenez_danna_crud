<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use App\Models\Candidate;
use App\Models\Recruiter;
use App\Models\Instructor;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'doc_type',
        'doc_num',
        'name',
        'last_name',
        'phone',
        'user_name',
        'email',
        'password',
        'role_id',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function instructors(){
        return $this->hasMany(Instructor::class, 'user_id', 'id');
    }

    public function recruiters(){
        return $this->hasMany(Recruiter::class, 'user_id', 'id');
    }

    public function candidates(){
        return $this->hasMany(Candidate::class, 'user_id', 'id');
    }

    public function role(){
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

}
