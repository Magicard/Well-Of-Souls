<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $hidden = ['content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pats(){
        return $this->morphMany(Pat::class, 'target');
    }
}
