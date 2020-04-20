<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contact;

class PhoneNumber extends Model
{
    protected $fillable = [
        'id', 'contact_id', 'phone_number', 'created_at', 'updated_at'
    ];

    protected $hidden = [
        '_token',
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
