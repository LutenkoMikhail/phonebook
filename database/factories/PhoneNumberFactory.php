<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PhoneNumber;
use App\Contact;
use Faker\Generator as Faker;
use Faker\Provider\ro_RO\PhoneNumber as FakerPhone;

$factory->define(PhoneNumber::class, function (Faker $faker) {
    $contactId = Contact::all('id')->random(1)->toArray();
    return [
        'phone_number' => FakerPhone::tollFreePhoneNumber(),
        'contact_id' => $contactId[0]['id'],
    ];
});
