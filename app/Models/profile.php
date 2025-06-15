<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    /** @use HasFactory<\Database\Factories\ProfileFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $dates = ["created_at"];
    protected $fillable = ['name', 'email', 'password', 'image', 'bio'];
    public function getImageAttribute($value)
    {
        return $value ?? 'images/vector.jpg';
    }
}
