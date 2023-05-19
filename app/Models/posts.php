<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\comments;

class posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','title','content'
    ];
    public function comments()
    {
        return $this->hasMany(comments::class);
    }
 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
