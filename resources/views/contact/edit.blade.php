@extends('master')
@section('title','Edit  Contact')
@section('content')

    <div class="thumbnail">
        <div class="caption">
            <h3 class="text-center"> {{ __ ('Edit  Contact') }} </h3>
        </div>
        <form action="{{route ('contact.update', $contact)}}" method="post"
              enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                           name="name" value="{{ $contact->name }}" minlength="5" maxlength="50"
                           placeholder="name" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('surname') }}</label>
                <div class="col-md-6">
                    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror"
                           name="surname" value="{{  $contact->surname}}" minlength="5" maxlength="50"
                           placeholder="surname" required autocomplete="surname" autofocus>
                    @error('surname')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Edit Contact</button>
                <a href="{{ url()->previous() }}"
                   class="btn btn-sm btn btn-success">{{ __('Back') }}</a>
            </div>
        </form>
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
    </div>


@endsection
