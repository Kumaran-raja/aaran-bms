<?php

namespace Aaran\Master\Database\Factories;

use Aaran\Common\Models\City;
use Aaran\Common\Models\Country;
use Aaran\Common\Models\Pincode;
use Aaran\Common\Models\State;
use Aaran\Master\Models\Contact;
use Aaran\Master\Models\ContactDetail;
use Illuminate\Database\Eloquent\Factories\Factory;


class ContactDetailFactory extends Factory
{
    protected $model = ContactDetail::class;

    public function definition(): array
    {
        $contacts = Contact::pluck('id')->random();
        $cities = City::pluck('id')->random();
        $states = State::pluck('id')->random();
        $pincodes = Pincode::pluck('id')->random();
        $countries = Country::pluck('id')->random();
        return [
            'contact_id' =>Contact::factory(),
            'address_type' => 'Primary',
            'address_1'=> $this->faker->address(),
            'address_2'=> $this->faker->address,
            'city_id' => $cities,
            'state_id' => $states,
            'pincode_id' => $pincodes,
            'country_id' => $countries,

        ];
    }
}
