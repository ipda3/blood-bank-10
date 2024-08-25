<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Client extends Model
{

    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = ['phone', 'email', 'password', 'name', 'd_o_b', 'blood_type_id', 'last_donation_date',
        'city_id', 'pin_code'];

    public function bloodType(): BelongsTo
    {
        return $this->belongsTo(BloodType::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function bloodTypes(): BelongsToMany
    {
        return $this->belongsToMany(BloodType::class);
    }

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }

    public function notifications(): BelongsToMany
    {
        return $this->belongsToMany(Notification::class);
    }

    public function governorates(): BelongsToMany
    {
        return $this->belongsToMany(Governorate::class);
    }

}
