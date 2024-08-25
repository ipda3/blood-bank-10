<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Governorate extends Model
{

    protected $table = 'governorates';
    public $timestamps = true;
    protected $fillable = ['name'];

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    public function clients(): BelongsToMany
    {
        return $this->belongsToMany(Client::class);
    }

}
