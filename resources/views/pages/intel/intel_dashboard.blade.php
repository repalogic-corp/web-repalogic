@extends('inc.layout')
@section('title', 'Dashboard')
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
        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
            <h3 class="mb-g">
                Hi Everyone,
            </h3>
        </div>
    </main>
@endsection
@section('plugin')

@endsection
