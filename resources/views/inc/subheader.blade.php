<h1 class="subheader-title">
    @switch($subheader_title)
        @case('st_type_1')
            <i class='subheader-icon fal fa-{{ $sh_icon }}'></i> {{ $sh_titile_main }} <span
                class='fw-300'>{{ $sh_titile_sub }}</span>
            <small>
            </small>
        @break

        @case('st_type_2')
            <i class='subheader-icon fal fa-{{ $sh_icon }}'></i> @yield('title', 'My App')
            <small>
                {{ $sh_descipt }}
            </small>
        @break

        @case('st_type_3')
            @yield('title', 'My App')
            <small>
                {{ $sh_descipt }}
            </small>
        @break

        @case('st_type_4')
            {{ $sh_titile_main }} <span class='fw-300'>{{ $sh_titile_sub }}</span>
            <small>
                {{ $sh_descipt }}
            </small>
        @break

        @case('st_type_5')
            <i class='subheader-icon fal fa-{{ $sh_icon }}'></i> {{ $sh_titile_main }}
            <small>
                {{ $sh_descipt }}
            </small>
        @break
    @endswitch
</h1>
{{ $slot }}
