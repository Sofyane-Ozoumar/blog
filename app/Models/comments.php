<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\posts;

class comments extends Model
{
    use HasFactory;
    protected $fillable = [
        'content','posts_id'
    ];
    public function post()
    {
        return $this->belongsTo(posts::class);
    }
}
