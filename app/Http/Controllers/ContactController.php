<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Contact;

class ContactController extends Controller
{
    protected $maxPaginate;

    public function __construct()
    {
        $this->maxPaginate = Config::get('constants.paginate.maxPaginate');
    }

    public function index()
    {
        $contacts = Contact::paginate($this->maxPaginate);

        return view('index', [
            'contacts' => $contacts
        ]);

    }

    public function show(Contact $contact)
    {
        return view('contact.view',
            [
                'contact' => $contact
            ]
        );
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:5 | max:50'],
            'surname' => ['required', 'string', 'min:5 | max:50'],
        ]);

        $contact = new Contact($request->except('_token'));
        $contact->save();

        return redirect()->route('index');
    }

    public function edit(Contact $contact)
    {
        return view('contact.edit',
            [
                'contact' => $contact
            ]
        );
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:5 | max:50'],
            'surname' => ['required', 'string', 'min:5 | max:50'],
        ]);
        $contact->name = $request->name;
        $contact->surname = $request->surname;
        $contact->save();
        return redirect()->route('index');
    }

    public function delete(int $id)
    {
        Contact::destroy($id);
        return redirect()->route('index');
    }
}
