<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PhoneNumber;

class Contact extends Model
{
    protected $fillable = [
        'id', 'name', 'surname', 'created_at', 'updated_at'
    ];

    protected $hidden = [
        '_token',
    ];

    protected $maxPhoneNumbers = 20;

    public function phoneNumber()
    {
        return $this->hasMany(PhoneNumber::class);
    }

    /**
     * Returns true if you can add a new phone number otherwise false
     */
    public function iCanAddPhoneNumber(): bool
    {
        if ($this->phoneNumber->count() >= $this->maxPhoneNumbers) {
            return false;
        }
        return true;
    }
}
