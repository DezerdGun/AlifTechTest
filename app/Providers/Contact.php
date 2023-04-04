<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
    public function contact(): HasOne
    {
        return $this->hasOne(Contact::class,'user_id');
    }

}
