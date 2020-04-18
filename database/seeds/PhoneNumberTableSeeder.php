<?php

use Illuminate\Database\Seeder;
use App\PhoneNumber;

class PhoneNumberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PhoneNumber::class, 80)->create();
    }
}
