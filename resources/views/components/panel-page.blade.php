<div id="panel-id" class="panel" data-panel-collapsed data-panel-fullscreen data-panel-close data-panel-locked
    data-panel-refresh data-panel-reset data-panel-color data-panel-custombutton>
    <div class="panel-hdr">
        <h2>
            @isset($icon)
                <i class="fal fa-{{ $icon }} text-primary mr-2"></i>
            @endisset
            {{ $title }}
        </h2>
        @isset($paneltoolbar)
            {{ $paneltoolbar }}
        @endisset
    </div>
    <div class="panel-container show">
        <div class="panel-content">
            {{ $slot }}
        </div>
        @isset($panelfooter)
            {{ $panelfooter }}
        @endisset
    </div>
</div>
