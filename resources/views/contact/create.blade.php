@extends('master')
@section('title','Create Contact')
@section('content')


    <div class="caption">
        <h3 class="text-center"> {{ __ ('Create Contact') }} </h3>
    </div>
    <form action="{{route ('contact.store')}}" method="post"
          enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>
            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                       name="name" value="{{ old('name') }}" minlength="5" maxlength="50"
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
                       name="surname" value="{{ old('surname') }}" minlength="5" maxlength="50"
                       placeholder="surname" required autocomplete="surname" autofocus>
                @error('surname')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Create Contact</button>
            <a href="{{ url()->previous() }}"
               class="btn btn-primary">{{ __('Back') }}</a>
        </div>
    </form>
    <div class="col-md-12">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>

@endsection
