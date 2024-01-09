<div class="btn-group">
    <button type="button" class="btn btn-{{ $style }} dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        {{ $label }}
    </button>
    <div class="dropdown-menu">
        {{ $slot }}
    </div>
</div>
