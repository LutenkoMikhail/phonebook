@extends('master')
@section('title','View Contact')
@section('content')

    <div class="text-center">
        <h1>
            Show contact
        </h1>
    </div>

    <div class="thumbnail">
        <div class="caption">
            <h1>
                Surname:{{$contact->surname}}
            </h1>
            <h1>
                Name:{{$contact->name}}
            </h1>
            <hr>
            <h4>
                Phone Numbers:{{$contact->phoneNumber->count()}}
            </h4>
            @if($contact->iCanAddPhoneNumber())
                <div class="btn-group">
                    <a href="{{ route('phonenumber.create',  ['contactId' =>$contact->id] ) }}"
                       class="btn btn-sm btn btn-success">{{ __('New phone number') }}</a>
                </div>
            @else
                <h4>
                    MAX Phone Numbers
                </h4>
            @endif
            @if(!$contact->phoneNumber->isEmpty())
                @foreach($contact->phoneNumber as $phoneNumber)
                    @include('phonenumber.view',$phoneNumber)
                @endforeach
            @else
                <p>No phone numbers</p>

            @endif

            <hr>
            <div class="text-center">
                <a href="{{ url()->previous() }}"
                   class="btn btn-sm btn btn-success">{{ __('Back') }}</a>
                <a href="{{ route('contact.edit', $contact->id) }}"
                   class="btn btn-sm btn-btn btn-warning">{{ __('Edit') }}</a>
                <a href="{{ route('contact.delete', $contact->id) }}"
                   class="btn btn-sm btn btn-danger">{{ __('Delete') }}</a>
            </div>
        </div>

    </div>

@endsection
