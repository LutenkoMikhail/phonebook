<div class="thumbnail">
    <div class="caption">
        <h3>{{$phoneNumber->phone_number}}
            <a href="{{ route('phonenumber.edit', $phoneNumber->id) }}"
               class="btn btn-sm btn-btn btn-warning">{{ __('Edit') }}</a>
            <a href="{{ route('phonenumber.delete', $phoneNumber->id) }}"
               class="btn btn-sm btn btn-danger">{{ __('Delete') }}</a>
{{--            <a href="{{ route('phonenumber.create', $phoneNumber->id) }}"--}}
{{--               class="btn btn-sm btn btn-success">{{ __('New') }}</a>--}}
        </h3>
    </div>

</div>

