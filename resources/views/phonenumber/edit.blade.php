@extends('master')
@section('title','Edit Phone Number')
@section('content')

    <div class="thumbnail">
        <div class="caption">
            <h3 class="text-center"> {{ __ ('Edit Phone Number') }} </h3>
        </div>
{{--        {{dd($phoneNumber->phone_number)}}--}}
        <form action="{{route ('phonenumber.update',$phoneNumber->id)}}" method="post"
              enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('phone number') }}</label>
                <div class="col-md-6">
                    <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror"
                           name="phone_number" value="{{ $phoneNumber->phone_number }}" minlength="3" maxlength="50"
                           placeholder="phone number" required autocomplete="phone number" autofocus>
                    @error('phone_number')
                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                    @enderror
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Save Phone Number</button>
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
