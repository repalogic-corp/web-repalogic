    <ol class="breadcrumb page-breadcrumb">
        @switch($bcrumb)
            @case('bc_level_satu')
                <li class="breadcrumb-item"><a href="\">SmartAdmin</a></li>
                <li class="breadcrumb-item
                        active">@yield('title', 'My App')</li>
            @break

            @case('bc_level_dua')
                <li class="breadcrumb-item"><a
                        href="\">SmartAdmin</a></li>
                <li class="breadcrumb-item">{{ $bc_1 }}</li>
                <li class="breadcrumb-item active">@yield('title', 'My App')</li>
            @break

            @case('bc_level_tiga')
                <li class="breadcrumb-item"><a
                        href="\">SmartAdmin</a></li>
                <li class="breadcrumb-item">{{ $bc_1 }}</li>
                <li class="breadcrumb-item">{{ $bc_2 }}</li>
                <li class="breadcrumb-item active">@yield('title', 'My App')</li>
            @break
        @endswitch
        <li class="position-absolute pos-top pos-right d-none d-sm-block">
            <span>
                <script src="/js/tanggal.js"></script>
                [
                @php
                    echo toHijriah(now());
                @endphp
                ]
            </span>
        </li>
    </ol>
