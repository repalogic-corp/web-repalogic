@extends('inc.layout')
@section('title', 'Dashboard')
@section('css_link')
    <link rel="stylesheet" media="screen, print" href="/css/notifications/toastr/toastr.css">
    <link rel="stylesheet" media="screen, print" href="/css/theme-demo.css">
@endsection
@section('content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc.breadcrumb', ['bcrumb' => 'bc_level_satu'])
        <div class="subheader">
            @component('inc.subheader', ['subheader_title' => 'st_type_2', 'sh_icon' => 'home'])
                @slot('sh_descipt')
                    Your first page for content division
                @endslot
            @endcomponent
        </div>
        <x-panel-page>
            <x-slot name="icon">book</x-slot>
            <x-slot name="title">Data Guru dan Staf Tatusaha</x-slot>
            <x-slot name="paneltoolbar">
                <div class="panel-toolbar">
                    <select class="custom-select custom-select-sm">
                        <option selected="">Select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="panel-toolbar ml-2">
                    <div class="d-flex position-relative ml-auto" style="max-width: 8rem;">
                        <i class="fal fa-search position-absolute pos-left fs-lg px-2 py-1 mt-1 fs-xs"></i>
                        <input type="text" class="form-control form-control-sm pl-5" placeholder="Search">
                    </div>
                </div>
                <div class="panel-toolbar ml-2">
                    <a href="javascript:void(0);" title="Cetak" class="btn btn-primary btn-sm btn-icon">
                        <i class="fal fa-print"></i>
                    </a>
                </div>
                <div class="panel-toolbar ml-2 mr-3">
                    <a href="javascript:void(0);" title="Kembali" class="btn btn-primary btn-sm btn-icon">
                        <i class="fal fa-reply"></i>
                    </a>
                </div>
            </x-slot>
            ini content
            <x-slot name="panelfooter">
                <div
                    class="d-flex align-items-center panel-content py-2 rounded-bottom bg-faded border-faded border-left-0 border-right-0 border-bottom-0 text-muted">
                    <div class="custom-control custom-checkbox mr-2">
                        <input type="checkbox" class="custom-control-input" id="demoCheck">
                        <label class="custom-control-label" for="demoCheck">Checkbox</label>
                    </div>
                    <span class="badge badge-info fw-400 mr-2">
                        Footer badge
                    </span>
                    <span class="badge badge-pill badge-success fw-400">
                        Pill badge
                    </span>
                    {{--
                        <span class="badge badge-pill rounded-circle badge-secondary fw-400 ml-auto mr-2">1</span>
                        <span class="badge badge-warning fw-400 px-1 mr-2">22</span>
                    --}}
                    <a href="javascript:void(0);" class="btn btn-primary btn-sm ml-auto"> <i class="fal fa-inbox-in"></i>
                        Save</a>
                    <a href="javascript:void(0);" class="btn btn-danger btn-sm ml-1"> <i class="fal fa-times"></i>
                        Cancel</a>
                </div>
            </x-slot>
        </x-panel-page>

        {{-- Pill Vertikal --}}

        <x-panel-page>
            <x-slot name="title">Pill <span class="fw-300"><i>vertical</i></span></x-slot>
            <x-slot name="paneltoolbar">
                <div class="panel-toolbar ml-2 mr-3">
                    <a href="javascript:void(0);" title="Kembali" class="btn btn-primary btn-sm btn-icon">
                        <i class="fal fa-reply"></i>
                    </a>
                </div>
            </x-slot>
            <div class="row">
                <div class="col-auto">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                            role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <i class="fal fa-home"></i>
                            <span class="hidden-sm-down ml-1"> Home</span>
                        </a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                            role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <i class="fal fa-user"></i>
                            <span class="hidden-sm-down ml-1"> Profile</span>
                        </a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                            role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <i class="fal fa-envelope"></i>
                            <span class="hidden-sm-down ml-1"> Messages</span>
                        </a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                            role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="fal fa-cog"></i>
                            <span class="hidden-sm-down ml-1"> Settings</span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <h3>
                                Home
                            </h3>
                            <p> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt
                                tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor,
                                williamsburg carles vegan helvetica. </p>
                            <p> Organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag
                                gentrify pitchfork tattooed craft beer, iphone skateboard locavore.</p>
                            <span class="fs-sm d-flex align-items-center mt-3 flex-wrap">
                                <a href="#" class="mr-1 mt-1" title="Cell A-0012">
                                    <img src="/img/thumbs/pic-7.png" class="img-share" alt="pic-7" style="">
                                </a>
                                <a href="#" class="mr-1 mt-1" title="Patient A-473 saliva">
                                    <img src="/img/thumbs/pic-8.png" class="img-share" alt="pic-8" style="">
                                </a>
                                <a href="#" class="mr-1 mt-1" title="Patient A-473 blood cells">
                                    <img src="/img/thumbs/pic-11.png" class="img-share" alt="pic-11" style="">
                                </a>
                                <a href="#" class="mr-1 mt-1" title="Patient A-473 Membrane O.C">
                                    <img src="/img/thumbs/pic-12.png" class="img-share" alt="pic-12" style="">
                                </a>
                            </span>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <h3>
                                Profile
                            </h3>
                            <div class="d-flex flex-row rounded-top mb-3">
                                <div class="d-flex flex-row align-items-center mt-1 mb-1">
                                    <span class="mr-2">
                                        <img src="/img/demo/avatars/avatar-admin.png" class="rounded-circle profile-image"
                                            alt="Dr. Codex Lantern">
                                    </span>
                                    <div class="info-card-text">
                                        <div class="fs-lg text-truncate text-truncate-lg">Dr. Codex Lantern
                                        </div>
                                        <span
                                            class="text-truncate text-truncate-md opacity-80">drlantern@gotbootstrap.com</span>
                                    </div>
                                </div>
                            </div>
                            <p>
                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin
                                coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next
                                level wes anderson artisan four loko farm-to-table craft beer twee.
                            </p>
                            <p>
                                Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean
                                shorts ullamco ad vinyl cillum PBR. Homo nostrud organic.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <h3>
                                Messages
                            </h3>
                            <ul class="notification">
                                <li>
                                    <a href="#" class="d-flex align-items-center py-2 px-0">
                                        <span class="d-flex flex-column flex-1">
                                            <span class="name">Melissa Ayre</span>
                                            <span class="msg-a fs-sm">Re: New security codes</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center py-2 px-0">
                                        <span class="d-flex flex-column flex-1">
                                            <span class="name">Adison Lee</span>
                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center py-2 px-0">
                                        <span class="d-flex flex-column flex-1">
                                            <span class="name">Oliver Kopyuv</span>
                                            <span class="msg-a fs-sm">Msed quia non numquam eius</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <h3>Settings</h3>
                            @component('components.alert', [
                                'alert' => 'alert_3',
                                'type' => 'danger',
                                'judul' => 'Settings saved',
                            ])
                                @slot('pesan')
                                    All your settings changes have been saved!
                                @endslot
                            @endcomponent
                            <div class="alert alert-success">
                                <strong>
                                    Settings saved
                                </strong>
                                <p class="m-0">
                                    All your settings changes have been saved!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-panel-page>

        {{-- ALERT --}}
        <x-panel-page>
            <x-slot name="title">Alert <span class="fw-300"><i>Show</i></span></x-slot>
            <x-slot name="paneltoolbar">
                <div class="panel-toolbar ml-2 mr-3">
                    <a href="javascript:void(0);" title="Kembali" class="btn btn-primary btn-sm btn-icon">
                        <i class="fal fa-reply"></i>
                    </a>
                </div>
            </x-slot>
            @component('components.alert', [
                'alert' => 'alert_3',
                'type' => 'danger',
                'judul' => 'Settings saved',
            ])
                @slot('pesan')
                    All your settings changes have been saved!
                @endslot
            @endcomponent
            @component('components.alert', [
                'alert' => 'alert_1',
                'type' => 'info',
                'icon' => 'exclamation',
                'pesan' => 'Mohon diperhatikan untuk beberapa hal',
            ])
                @slot('minipesan')
                    2 successful checks
                @endslot
                @slot('link')
                    {{-- <a href="#" class="btn btn-outline-danger btn-sm btn-w-m r-20">Report</a> --}}
                @endslot
            @endcomponent
            @component('components.alert', [
                'alert' => 'alert_1',
                'type' => 'danger',
                'icon' => 'times',
                'pesan' => 'Data masih bermasalah',
            ])
            @endcomponent
            @component('components.alert', [
                'alert' => 'alert_1',
                'type' => 'success',
                'icon' => 'check',
                'pesan' => 'Data sukses di tambahkan',
            ])
            @endcomponent
            @component('components.alert', [
                'alert' => 'alert_2',
                /* 'true' => 'true', */
                'type' => 'primary',
                'icon' => 'times',
                'color' => 'danger',
            ])
                @slot('judul')
                    Peringatan
                @endslot
                @slot('pesan')
                    <p>Cards are built with as little markup and styles as possible, but still manage to deliver a
                        ton
                        of control and customization. Built with flexbox, they offer easy alignment and mix well
                        with
                        other Bootstrap components. They have no <code>margin</code> by default, so use spacing
                        utilities as needed. Although cards are a lightweight solution for 'widget' or 'panel', we
                        recommend you check out SmartAdmin's <a href="/ui_panels" title="Components Panels"
                            target="_blank">panels page</a> for further flexible and an alternative option.</p>
                    <p class="mb-0">While we displayed some examples of cards here, you can learn more details of
                        its
                        usage at the official <a href="https://getbootstrap.com/docs/4.3/components/card/"
                            target="_blank">bootstrap documentation</a>.</p>
                @endslot
            @endcomponent
            @component('components.alert', [
                'alert' => 'alert_5',
                'type' => 'warning',
                'judul' => 'Wrapbootstrap License',
                'linkna' => 'http://support.wrapbootstrap.com/help/usage-licenses',
                'judulna' => 'License Page',
            ])
                @slot('isi')
                    The licenses cannot be upgraded, however you may own more than one license types (for instance,
                    you may purchase the Single App. License for evaluation purpose and later purchase the Extended
                    licenses when your end-product is getting ready to be published).
                @endslot
            @endcomponent
        </x-panel-page>

        <x-panel-page>
            <x-slot name="icon">book</x-slot>
            <x-slot name="title">Button <span class="fw-300"><i>Dropdown</i></span></x-slot>
            <x-slot name="paneltoolbar">
                <div class="panel-toolbar ml-2 mr-3">
                    <a href="javascript:void(0);" title="Kembali" class="btn btn-primary btn-sm btn-icon">
                        <i class="fal fa-reply"></i>
                    </a>
                </div>
            </x-slot>
            <x-button-dropdown>
                <x-slot name="style">outline-primary</x-slot>
                <x-slot name="label">Toast Notification</x-slot>
                <button class="dropdown-item" type="button" id="success">Toast Success</button>
                <button class="dropdown-item" type="button" id="info">Toast Info</button>
                <button class="dropdown-item" type="button" id="error">Toast Error</button>
                <button class="dropdown-item" type="button" id="warning">Toast Warning</button>
            </x-button-dropdown>
            @component('components.button-dropdown', ['style' => 'warning', 'label' => 'Pilihan'])
                <div class="dropdown-header bg-trans-gradient d-flex flex-row px-4 py-4 rounded-top text-white">
                    <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                        <span class="mr-2">
                            <img src="/img/demo/avatars/avatar-admin.png" class="rounded-circle profile-image"
                                alt="Dr. Codex Lantern">
                        </span>
                        <div class="info-card-text">
                            <div class="fs-lg text-truncate text-truncate-lg">Dr. Codex Lantern
                            </div>
                            <span class="text-truncate text-truncate-md opacity-80">drlantern@gotbootstrap.com</span>
                        </div>
                    </div>
                </div>
                <button class="dropdown-item" type="button">Action</button>
                <button class="dropdown-item" type="button">Another action</button>
                <button class="dropdown-item" type="button">Something else</button>
            @endcomponent
        </x-panel-page>
        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
            <h3 class="mb-g">
                Hi Everyone,
            </h3>
            <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                <x-d-flex-wrap>
                    <x-slot name="photo">/guru/16. ABDUL MADJID, S.Pd, M.Pd..jpg</x-slot>
                    Abdul Madjid, S.Pd., M.Pd.
                    <x-slot name="keterangan">Rekayasa Perangkat Lunak</x-slot>
                </x-d-flex-wrap>
                <x-d-flex-wrap>
                    <x-slot name="photo">/guru/77.-FEBBY-MUCHAMAD-DARMADI,-ST.jpg</x-slot>
                    Febby Muchamad Darmadi, S.T.
                    <x-slot name="keterangan">Teknik Komputer dan Jaringan</x-slot>
                </x-d-flex-wrap>
                <x-d-flex-wrap>
                    @slot('photo')
                        /guru/49.-TABIIN,-SE.jpg
                    @endslot
                    Tabiin, SE
                    @slot('keterangan')
                        Rekayasa Perangkat Lunak
                    @endslot
                </x-d-flex-wrap>
            </div>
            <p> </p>
            <div class="row">
                @component('components.card', [
                    'class' => 'col-sm-6 col-xl-3',
                    'type' => 'primary',
                    'isi' => '24.5k',
                    'keterangan' => 'users signep up',
                    'icon' => 'user',
                ])
                @endcomponent
                @component('components.card', [
                    'class' => 'col-sm-6 col-xl-3',
                    'type' => 'warning',
                    'isi' => '$10,203',
                    'keterangan' => 'Visual Index Figure',
                    'icon' => 'gem',
                ])
                @endcomponent
                @component('components.card', [
                    'class' => 'col-sm-6 col-xl-3',
                    'type' => 'success',
                    'isi' => '- 103.72',
                    'keterangan' => 'Offset Balance Ratio',
                    'icon' => 'lightbulb',
                ])
                @endcomponent
                @component('components.card', [
                    'class' => 'col-sm-6 col-xl-3',
                    'type' => 'info',
                    'isi' => '+40%',
                    'keterangan' => 'Product level increase',
                    'icon' => 'globe',
                ])
                @endcomponent
            </div>
            <p></p>

            <p></p>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <a href="javascript:void(0);" class="card-title" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Collapsible Group Item #1
                            <span class="ml-auto">
                                <span class="collapsed-reveal">
                                    <i class="fal fa-minus-circle text-danger"></i>
                                </span>
                                <span class="collapsed-hidden">
                                    <i class="fal fa-plus-circle text-success"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                            synth nesciunt you probably haven't heard of them accusamus labore
                            sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Collapsible Group Item #2
                            <span class="ml-auto">
                                <span class="collapsed-reveal">
                                    <i class="fal fa-minus-circle text-danger"></i>
                                </span>
                                <span class="collapsed-hidden">
                                    <i class="fal fa-plus-circle text-success"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                            synth nesciunt you probably haven't heard of them accusamus labore
                            sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Collapsible Group Item #3
                            <span class="ml-auto">
                                <span class="collapsed-reveal">
                                    <i class="fal fa-minus-circle text-danger"></i>
                                </span>
                                <span class="collapsed-hidden">
                                    <i class="fal fa-plus-circle text-success"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                            synth nesciunt you probably haven't heard of them accusamus labore
                            sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse"
                            data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Collapsible Group Item #4
                            <span class="ml-auto">
                                <span class="collapsed-reveal">
                                    <i class="fal fa-minus-circle text-danger"></i>
                                </span>
                                <span class="collapsed-hidden">
                                    <i class="fal fa-plus-circle text-success"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                            synth nesciunt you probably haven't heard of them accusamus labore
                            sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
            <h3 class="mb-g">
                Hi Everyone,
            </h3>
            <div class='row mb-3'>
                <div class="col-xl-6">
                    <div class="border px-3 pt-3 pb-0 rounded">
                        <h2>Judul</h2>
                        <div class="panel-tag">
                            <p>Additionally, Bootstrap also includes an <code>.mx-auto</code> class for horizontally
                                centering fixed-width block level content—that is, content that has <code>display:
                                    block</code> and a <code>width</code> set—by setting the horizontal margins to
                                <code>auto</code>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="border px-3 pt-3 pb-0 rounded">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                    href="#js_pill_border_icon-1"><i class="fal fa-home mr-1"></i>Home</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#js_pill_border_icon-2"><i
                                        class="fal fa-user mr-1"></i>Profile</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#js_pill_border_icon-3"><i
                                        class="fal fa-clock mr-1"></i>Time</a></li>
                        </ul>
                        <div class="tab-content py-3">
                            <div class="tab-pane fade show active" id="js_pill_border_icon-1" role="tabpanel">
                                Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                                stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg
                                carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat
                                salvia cillum iphone.
                            </div>
                            <div class="tab-pane fade" id="js_pill_border_icon-2" role="tabpanel">
                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                                squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                                anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                                letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                                cillum PBR. Homo nostrud organic.
                            </div>
                            <div class="tab-pane fade" id="js_pill_border_icon-3" role="tabpanel">
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's
                                organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify
                                pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
                                hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                                pitchfork.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class="col-xl-6">
                    <div class="border px-3 pt-3 pb-3 rounded">
                        <button type="button" class="btn btn-default" data-toggle="modal"
                            data-target="#default-example-modal-sm">Default Modal Small</button>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-default" data-toggle="modal"
                            data-target="#default-example-modal">Default Modal</button>
                        <!-- Large modal -->
                        <button type="button" class="btn btn-default" data-toggle="modal"
                            data-target="#default-example-modal-lg">Default Modal Large</button>
                    </div>
                    @component('components.modal', [
                        'id_modal' => 'default-example-modal',
                        'size_modal' => '',
                        'title_modal' => 'Input Data',
                    ])
                        <div class="alert alert-info mb-0 mt-0">
                            Modals are built with HTML, CSS, and JavaScript. They’re positioned over everything else in the
                            document
                            and remove scroll from the body so that modal content scrolls instead. Bootstrap only supports one
                            modal
                            window at a time. Nested modals aren’t supported as it is believed to be poor user experiences.
                            Modals
                            use position: fixed, which can sometimes be a bit particular about its rendering. Whenever possible,
                            place your modal HTML in a top-level position to avoid potential interference from other elements.
                            You’ll likely run into issues when nesting a .modal within another fixed element
                        </div>
                        @slot('footer_modal')
                            @component('components.button', [
                                'button_type' => 'linkbutton',
                                'link' => '/ak-tahunajar',
                                'classbutton' => 'btn-success btn-sm',
                                'icon' => 'calendar',
                            ])
                                Tahun ajaran
                            @endcomponent
                        @endslot
                    @endcomponent




                </div>
                <div class="col-xl-6">
                    <div class="border px-3 pt-3 pb-3 rounded">
                        <div class="row">
                            <div class="col-xl-6">
                                <h5 class="mb-3">Button dengan tag <code>button</code></h5>
                                @component('components.button', ['button_type' => 'button', 'classbutton' => 'btn-primary btn-sm'])
                                    Simpan
                                @endcomponent
                                @component('components.button', [
                                    'button_type' => 'button',
                                    'classbutton' => 'btn-primary btn-sm',
                                    'icon' => 'save',
                                ])
                                    Simpan
                                @endcomponent
                            </div>
                            <div class="col-xl-6">
                                <h5 class="mb-1">Button dengan tag <code>a href</code></h5>
                                @component('components.button', [
                                    'button_type' => 'linkbutton',
                                    'link' => 'javascript:void(0);',
                                    'classbutton' => 'btn-primary btn-lg rounded-circle btn-icon',
                                    'icon' => 'save',
                                ])
                                @endcomponent
                                @component('components.button', [
                                    'button_type' => 'linkbutton',
                                    'link' => 'javascript:void(0);',
                                    'classbutton' => 'btn-danger btn-lg btn-icon',
                                    'icon' => 'print',
                                ])
                                @endcomponent
                                @component('components.button', [
                                    'button_type' => 'linkbutton',
                                    'link' => '/ak-tahunajar',
                                    'classbutton' => 'btn-success btn-sm',
                                    'icon' => 'calendar',
                                ])
                                    Tahun ajaran
                                @endcomponent
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('plugin')
    <script src="/js/notifications/toastr/toastr.js"></script>
    <script>
        $(document).ready(function() {

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": 300,
                "hideDuration": 100,
                "timeOut": 5000,
                "extendedTimeOut": 1000,
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            $('#success').click(function(event) {
                toastr.success('You clicked Success toast', "Sukses!!");
            });
            $('#info').click(function(event) {
                toastr.info('You clicked Info toast', "Informasi!")
            });
            $('#error').click(function(event) {
                toastr.error('You clicked Error Toast', "Error...!!!")
            });
            $('#warning').click(function(event) {
                toastr.warning('You clicked Warning Toast', "Peringatan!")
            });

        });
    </script>
@endsection
