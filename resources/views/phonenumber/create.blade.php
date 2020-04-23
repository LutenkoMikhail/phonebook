@extends('master')
@section('title','Create Phone Number')
@section('content')

    <div class="card">
        <div class="caption">
            <h3 class="text-center"> {{ __ ('Create Phone Number') }} </h3>
        </div>
        <form action="{{route ('phonenumber.store',request()->route()->parameters)}}" method="post"
              enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('phone number') }}</label>
                <div class="col-md-6">
                    <input id="phone_number" type="text"
                           class="form-control @error('phone_number') is-invalid @enderror"
                           name="phone_number" value="{{ old('phone_number') }}" minlength="3" maxlength="50"
                           placeholder="phone number" required autocomplete="phone number" autofocus>
                    @error('phone_number')
                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                    @enderror
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Create Phone Number</button>
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
    </div>
@endsection
