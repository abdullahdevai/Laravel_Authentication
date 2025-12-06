<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'full_name',
        'email',
        'phone',
        'address',
        'bio',
        'profile_image',
        'hobbies',
        'date_of_birth'
    ];
     protected $casts = [
        'date_of_birth' => 'date',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getImageUrlAttribute()
    {
        return $this->profile_image ? asset('storage/' . $this->profile_image) : null;
    }
}
