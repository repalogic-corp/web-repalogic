@switch($kolom)
    @case('kolomna_dua')
        <div class="row">
            <div class="col-xl-6">
                {{ $isipertama }}
            </div>
            <div class="col-xl-6">
                {{ $isikedua }}
            </div>
        </div>
    @break

    @case('kolomna_tiga')
        <div class="row">
            <div class="col-xl-4">
                {{ $isipertama }}
            </div>
            <div class="col-xl-4">
                {{ $isikedua }}
            </div>
            <div class="col-xl-4">
                {{ $isiketiga }}
            </div>
        </div>
    @break
@endswitch
