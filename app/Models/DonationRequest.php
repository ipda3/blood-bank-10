<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DonationRequest extends Model
{

    protected $table = 'donation_requests';
    public $timestamps = true;
    protected $fillable = ['patient_name', 'patient_phone', 'city_id', 'hospital_name', 'blood_type_id', 'patient_age',
        'bags_num', 'hospital_name', 'hospital_address', 'details', 'latitude', 'longitude', 'client_id'];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function bloodType(): BelongsTo
    {
        return $this->belongsTo(BloodType::class);
    }

    public function notification(): HasOne
    {
        return $this->hasOne(Notification::class);
    }

}
