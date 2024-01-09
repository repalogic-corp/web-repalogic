@switch($alert)
    @case('alert_1')
        <div class="alert border-{{ $type }} bg-transparent text-secondary fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times text-{{ $type }}"></i></span>
            </button>
            <div class="d-flex align-items-center">
                <div class="alert-icon">
                    <i class="fal fa-{{ $icon }}-circle color-{{ $type }}-600"></i>
                </div>
                <div class="flex-1">
                    <span class="h5 color-{{ $type }}-600">{{ $pesan }}</span>
                    <br>
                    @isset($minipesan)
                        {{ $minipesan }}
                    @endisset
                </div>
                @isset($link)
                    {{ $link }}
                @endisset
            </div>
        </div>
    @break

    @case('alert_2')
        <div class="alert alert-{{ $type }} alert-dismissible">
            @isset($true)
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="{{ $true }}"><i class="fal fa-times"></i></span>
                </button>
            @endisset
            <div class="d-flex flex-start w-100">
                <div class="mr-2 d-sm-none d-md-block">
                    <span class='icon-stack icon-stack-lg'>
                        <i class="base base-7 icon-stack-3x opacity-100 color-{{ $color }}-500"></i>
                        <i class="fal fa-{{ $icon }} icon-stack-2x opacity-100 color-white"></i>
                    </span>
                </div>
                <div class="d-flex flex-fill">
                    <div class="flex-fill">
                        <span class="h5">{{ $judul }}</span>
                        @isset($pesan)
                            {{ $pesan }}
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    @break

    @case('alert_3')
        <div class="alert alert-{{ $type }}">
            <strong>
                {{ $judul }}
            </strong>
            <p class="m-0">
                {{ $pesan }}
            </p>
        </div>
    @break

    @case('alert_4')
        <div class="alert alert-{{ $type }} alert-dismissible fade show border-faded border-left-0 border-right-0 border-top-0 rounded-0 m-0"
            role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button>
            <strong>Last update was on <span class="js-get-date"></span></strong> - Your logs are all
            up to date.
        </div>
    @break

    @case('alert_5')
        <div class="alert alert-{{ $type }}">
            <span class="h5">{{ $judul }}</span>
            <div class="row">
                <div class="col-sm-12 col-md">
                    {{ $isi }}
                </div>
                <div class="col-auto mt-3 mt-sm-0">
                    <a href="{{ $linkna }}" class="btn btn-warning" target="blank_">{{ $judulna }}</a>
                </div>
            </div>
        </div>
    @break

@endswitch
{{-- @switch($alert)
    @case('info')
        <div class="alert border-info bg-transparent text-secondary fade show" role="alert">
            <div class="d-flex align-items-center">
                <div class="alert-icon">
                    <i class="fal fa-exclamation-circle fa-9x color-info-600"></i>
                </div>
                <div class="flex-1">
                    <span class="h5 color-info-600">{{ $keterangan }}</span>
                    {{ $miniketerangan }}
                </div>
                {{ $link }}
            </div>
        </div>
        {{ $slot }}
    @break

    @case('warning')
        <div class="alert border-danger bg-transparent text-secondary fade show" role="alert">
            <div class="d-flex align-items-center">
                <div class="alert-icon">
                    <i class="fal fa-fa-times-circle fa-9x color-danger-600"></i>
                </div>
                <div class="flex-1">
                    <span class="h5 color-danger-600">{{ $keterangan }}</span>
                    {{ $miniketerangan }}
                </div>
                {{ $link }}
            </div>
        </div>
        {{ $slot }}
    @break

    @case('success')
        <div class="alert border-success bg-transparent text-secondary fade show" role="alert">
            <div class="d-flex align-items-center">
                <div class="alert-icon">
                    <i class="fal fa-fa-check-circle fa-9x color-success-600"></i>
                </div>
                <div class="flex-1">
                    <span class="h5 color-success-600">{{ $keterangan }}</span>
                    {{ $miniketerangan }}
                </div>
                {{ $link }}
            </div>
        </div>
        {{ $slot }}
    @break
@endswitch
 --}}
