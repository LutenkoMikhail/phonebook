<?php

namespace App\Http\Controllers;


use App\Contact;
use App\Http\Requests\PhoneNumberCreateUpdateRequest;
use App\PhoneNumber;
use Illuminate\Http\Request;


class PhoneNumberController extends Controller
{

    public function create()
    {
        return view('phonenumber.create');
    }

    public function store(PhoneNumberCreateUpdateRequest $request, int $id)
    {

        $phoneNumber = new PhoneNumber($request->except('_token'));
        $phoneNumber->contact_id = $id;
        $phoneNumber->save();

        $contact = Contact::find($id);

        return redirect()->route('contact.show', ['contact' => $contact]);
    }

    public function edit(int $phoneNumberId)
    {
        $phoneNumber = PhoneNumber::find($phoneNumberId);

        return view('phonenumber.edit',
            [
                'phoneNumber' => $phoneNumber
            ]
        );
    }

    public function update(PhoneNumberCreateUpdateRequest $request, int $phoneNumber)
    {

        $phoneNumber = PhoneNumber::find($phoneNumber);
        $phoneNumber->phone_number = $request->phone_number;
        $phoneNumber->save();

        $contact = Contact::find($phoneNumber->contact_id)->first();
        return redirect()->route('contact.show', ['contact' => $contact]);
    }

    public function delete(int $id)
    {
        PhoneNumber::destroy($id);
        return redirect()->back();
    }
}
