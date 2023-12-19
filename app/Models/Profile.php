<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'user_id',
        'avatar',
    ];
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
