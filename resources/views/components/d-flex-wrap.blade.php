<div
    class="rounded-plus bg-info-900 shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
    <img src="{{ $photo }}" class="img-thumbnail img-responsive rounded-circle" style="width:8rem; height: 8rem;">
    <div class="ml-2 mr-3">
        <h5 class="m-0">
            {{ $slot }}
            <small class="m-0 fw-300">
                @if ($keterangan)
                    {{ $keterangan }}
                @endif
            </small>
        </h5>
    </div>
</div>
