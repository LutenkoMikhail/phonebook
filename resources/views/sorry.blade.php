@extends('master')
@section('title','Master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="text-center"> {{ __ ('Sorry, this feature is not implemented.') }} </h1>
                <h4 class="text-center"> {{ __ ('Class worked: '.$nameClass) }} </h4>
                <h5 class="text-center"> {{ __ ('Method invoked: '.$nameMethod) }} </h5>
                <div class="text-center">
                    <a href="{{ url()->previous() }}"
                       class="btn btn-sm btn btn-success">{{ __('Back') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection


{{--public function update(Author $author)--}}
{{--{--}}
{{--return view('sorry',--}}
{{--[--}}
{{--'nameClass' => __CLASS__,--}}
{{--'nameMethod' => __METHOD__--}}
{{--]--}}
{{--);--}}
{{--}--}}















