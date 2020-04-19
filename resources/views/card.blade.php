<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="caption">
            <h3>{{$contact->surname}}</h3>
            <p>{{$contact->name}}</p>
            <h6>
                Phone Numbers:
                @if ($contact->phoneNumber->count()===0)
                    No
                @else
                    {{$contact->phoneNumber->count()}}
                @endif
            </h6>
            <div class="center">
                <div class="btn-group">
                    <a href="{{ route('contact.show', $contact->id) }}"
                       class="btn btn-sm btn btn-success">{{ __('Show') }}</a>
                    <a href="{{ route('contact.edit', $contact->id) }}"
                       class="btn btn-sm btn-btn btn-warning">{{ __('Edit') }}</a>
                    <a href="{{ route('contact.delete', $contact->id) }}"
                       class="btn btn-sm btn btn-danger">{{ __('Delete') }}</a>
                </div>
            </div>

        </div>
    </div>
</div>
