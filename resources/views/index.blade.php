@extends('master')
@section('title','All phonebook ')
@section('content')
    <div class="starter-template">

        @if(!$contacts->isEmpty())
            <h1>All phonebook entries  [{{$allContacts}}]</h1>
            <div class="row">
                @foreach($contacts as $contact)
                    @include('card',$contact)
                @endforeach
            </div>
            {{$contacts->links()}}
    </div>
    @else
        <h1>Phone book entries are missing</h1>
    @endif

@endsection
