<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'email',
        'number',
        'address',
        'created_at',
        'updated_at',
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Contact::class);
        //Or: return $this->hasMany(Post::class, 'foreign_key');
    }
}