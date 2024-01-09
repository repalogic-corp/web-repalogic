{{-- class button =
     {type button} btn-primary btn-secondary btn-default btn-success btn-warning btn-info btn-danger btn-dark
     {size button} btn-lg btn-sm btn-xs
     rounded-circle
     btn-icon
--}}

@switch($button_type)
    @case('linkbutton')
        <a href="{{ $link }}" class="btn {{ $classbutton }}">
            @isset($icon)
                <i class="fal fa-{{ $icon }}"></i>
            @endisset
            {{ $slot }}
        </a>
    @break

    @case('button')
        <button type="button" class="btn {{ $classbutton }}">
            @isset($icon)
                <span class="fal fa-{{ $icon }} mr-1"></span>
            @endisset
            {{ $slot }}
        </button>
    @break

@endswitch
