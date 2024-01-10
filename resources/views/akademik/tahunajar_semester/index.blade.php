@extends('inc.layout')
@section('title', 'Tahun Ajaran')
@section('css_link')
    <link rel="stylesheet" media="screen, print" href="/css/datagrid/datatables/datatables.bundle.css">
@endsection
@section('content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc.breadcrumb', ['bcrumb' => 'bc_level_dua', 'bc_1' => 'Akademik'])
        <div class="subheader">
            @component('inc.subheader', ['subheader_title' => 'st_type_2'])
                @slot('sh_icon')
                    calendar-alt
                @endslot
                @slot('sh_descipt')
                    A brief introduction to this WebApp
                @endslot
            @endcomponent
        </div>
        @component('components.column', ['kolom' => 'kolomna_dua'])
            @slot('isipertama')
                <x-panel-page>
                    <x-slot name="panel_id">input-tahun-ajar</x-slot>
                    <x-slot name="icon">plus</x-slot>
                    <x-slot name="title">Pilih <span class="fw-300"><i>Tahun Ajar dan Semester</i></span></x-slot>
                    <x-slot name="paneltoolbar">
                        <div class="panel-toolbar ml-2 mr-3">
                            <button class="btn btn-primary btn-sm" data-toggle="dropdown">Table Style</button>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right position-absolute pos-top">
                                <button class="dropdown-item active" data-action="toggle" data-class="table-bordered"
                                    data-target="#dt-basic-example"> Bordered Table </button>
                                <button class="dropdown-item" data-action="toggle" data-class="table-sm"
                                    data-target="#dt-basic-example"> Smaller Table </button>
                                <button class="dropdown-item" data-action="toggle" data-class="table-dark"
                                    data-target="#dt-basic-example"> Table Dark </button>
                                <button class="dropdown-item active" data-action="toggle" data-class="table-hover"
                                    data-target="#dt-basic-example"> Table Hover </button>
                                <button class="dropdown-item active" data-action="toggle" data-class="table-stripe"
                                    data-target="#dt-basic-example"> Table Stripped </button>
                                <div class="dropdown-divider m-0"></div>
                                <div class="dropdown-multilevel dropdown-multilevel-left">
                                    <div class="dropdown-item">
                                        tbody color
                                    </div>
                                    <div class="dropdown-menu no-transition-delay">
                                        <div class="js-tbody-colors dropdown-multilevel dropdown-multilevel-left d-flex flex-wrap"
                                            style="width: 15.9rem; padding: 0.5rem">
                                            <a href="javascript:void(0);" data-bg="bg-primary-100"
                                                class="btn d-inline-block bg-primary-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-200"
                                                class="btn d-inline-block bg-primary-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-300"
                                                class="btn d-inline-block bg-primary-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-400"
                                                class="btn d-inline-block bg-primary-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-500"
                                                class="btn d-inline-block bg-primary-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-600"
                                                class="btn d-inline-block bg-primary-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-700"
                                                class="btn d-inline-block bg-primary-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-800"
                                                class="btn d-inline-block bg-primary-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-900"
                                                class="btn d-inline-block bg-primary-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-100"
                                                class="btn d-inline-block bg-success-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-200"
                                                class="btn d-inline-block bg-success-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-300"
                                                class="btn d-inline-block bg-success-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-400"
                                                class="btn d-inline-block bg-success-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-500"
                                                class="btn d-inline-block bg-success-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-600"
                                                class="btn d-inline-block bg-success-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-700"
                                                class="btn d-inline-block bg-success-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-800"
                                                class="btn d-inline-block bg-success-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-900"
                                                class="btn d-inline-block bg-success-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-100"
                                                class="btn d-inline-block bg-info-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-200"
                                                class="btn d-inline-block bg-info-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-300"
                                                class="btn d-inline-block bg-info-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-400"
                                                class="btn d-inline-block bg-info-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-500"
                                                class="btn d-inline-block bg-info-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-600"
                                                class="btn d-inline-block bg-info-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-700"
                                                class="btn d-inline-block bg-info-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-800"
                                                class="btn d-inline-block bg-info-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-900"
                                                class="btn d-inline-block bg-info-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-100"
                                                class="btn d-inline-block bg-danger-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-200"
                                                class="btn d-inline-block bg-danger-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-300"
                                                class="btn d-inline-block bg-danger-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-400"
                                                class="btn d-inline-block bg-danger-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-500"
                                                class="btn d-inline-block bg-danger-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-600"
                                                class="btn d-inline-block bg-danger-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-700"
                                                class="btn d-inline-block bg-danger-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-800"
                                                class="btn d-inline-block bg-danger-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-900"
                                                class="btn d-inline-block bg-danger-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-100"
                                                class="btn d-inline-block bg-warning-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-200"
                                                class="btn d-inline-block bg-warning-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-300"
                                                class="btn d-inline-block bg-warning-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-400"
                                                class="btn d-inline-block bg-warning-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-500"
                                                class="btn d-inline-block bg-warning-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-600"
                                                class="btn d-inline-block bg-warning-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-700"
                                                class="btn d-inline-block bg-warning-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-800"
                                                class="btn d-inline-block bg-warning-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-900"
                                                class="btn d-inline-block bg-warning-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-100"
                                                class="btn d-inline-block bg-fusion-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-200"
                                                class="btn d-inline-block bg-fusion-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-300"
                                                class="btn d-inline-block bg-fusion-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-400"
                                                class="btn d-inline-block bg-fusion-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-500"
                                                class="btn d-inline-block bg-fusion-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-600"
                                                class="btn d-inline-block bg-fusion-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-700"
                                                class="btn d-inline-block bg-fusion-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-800"
                                                class="btn d-inline-block bg-fusion-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-900"
                                                class="btn d-inline-block bg-fusion-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg=""
                                                class="btn d-inline-block bg-white border width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-multilevel dropdown-multilevel-left">
                                    <div class="dropdown-item">
                                        thead color
                                    </div>
                                    <div class="dropdown-menu no-transition-delay">
                                        <div class="js-thead-colors dropdown-multilevel dropdown-multilevel-left d-flex flex-wrap"
                                            style="width: 15.9rem; padding: 0.5rem">
                                            <a href="javascript:void(0);" data-bg="bg-primary-100"
                                                class="btn d-inline-block bg-primary-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-200"
                                                class="btn d-inline-block bg-primary-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-300"
                                                class="btn d-inline-block bg-primary-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-400"
                                                class="btn d-inline-block bg-primary-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-500"
                                                class="btn d-inline-block bg-primary-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-600"
                                                class="btn d-inline-block bg-primary-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-700"
                                                class="btn d-inline-block bg-primary-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-800"
                                                class="btn d-inline-block bg-primary-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-primary-900"
                                                class="btn d-inline-block bg-primary-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-100"
                                                class="btn d-inline-block bg-success-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-200"
                                                class="btn d-inline-block bg-success-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-300"
                                                class="btn d-inline-block bg-success-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-400"
                                                class="btn d-inline-block bg-success-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-500"
                                                class="btn d-inline-block bg-success-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-600"
                                                class="btn d-inline-block bg-success-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-700"
                                                class="btn d-inline-block bg-success-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-800"
                                                class="btn d-inline-block bg-success-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-success-900"
                                                class="btn d-inline-block bg-success-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-100"
                                                class="btn d-inline-block bg-info-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-200"
                                                class="btn d-inline-block bg-info-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-300"
                                                class="btn d-inline-block bg-info-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-400"
                                                class="btn d-inline-block bg-info-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-500"
                                                class="btn d-inline-block bg-info-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-600"
                                                class="btn d-inline-block bg-info-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-700"
                                                class="btn d-inline-block bg-info-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-800"
                                                class="btn d-inline-block bg-info-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-info-900"
                                                class="btn d-inline-block bg-info-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-100"
                                                class="btn d-inline-block bg-danger-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-200"
                                                class="btn d-inline-block bg-danger-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-300"
                                                class="btn d-inline-block bg-danger-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-400"
                                                class="btn d-inline-block bg-danger-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-500"
                                                class="btn d-inline-block bg-danger-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-600"
                                                class="btn d-inline-block bg-danger-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-700"
                                                class="btn d-inline-block bg-danger-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-800"
                                                class="btn d-inline-block bg-danger-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-danger-900"
                                                class="btn d-inline-block bg-danger-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-100"
                                                class="btn d-inline-block bg-warning-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-200"
                                                class="btn d-inline-block bg-warning-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-300"
                                                class="btn d-inline-block bg-warning-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-400"
                                                class="btn d-inline-block bg-warning-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-500"
                                                class="btn d-inline-block bg-warning-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-600"
                                                class="btn d-inline-block bg-warning-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-700"
                                                class="btn d-inline-block bg-warning-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-800"
                                                class="btn d-inline-block bg-warning-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-warning-900"
                                                class="btn d-inline-block bg-warning-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-100"
                                                class="btn d-inline-block bg-fusion-100 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-200"
                                                class="btn d-inline-block bg-fusion-200 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-300"
                                                class="btn d-inline-block bg-fusion-300 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-400"
                                                class="btn d-inline-block bg-fusion-400 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-500"
                                                class="btn d-inline-block bg-fusion-500 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-600"
                                                class="btn d-inline-block bg-fusion-600 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-700"
                                                class="btn d-inline-block bg-fusion-700 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-800"
                                                class="btn d-inline-block bg-fusion-800 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg="bg-fusion-900"
                                                class="btn d-inline-block bg-fusion-900 width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                            <a href="javascript:void(0);" data-bg=""
                                                class="btn d-inline-block bg-white border width-2 height-2 p-0 rounded-0"
                                                style="margin:1px"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-slot>
                    <!-- datatable start -->
                    <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                        <thead>
                            <tr>
                                <th>Tahun Ajaran</th>
                                <th>Ganjil/Genap</th>
                                <th>Aktif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2020-2021</td>
                                <td>Ganjil</td>
                                <td align="center">
                                    <div class="custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="demoCheck1">
                                        <label class="custom-control-label" for="demoCheck1"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2020-2021</td>
                                <td>Genap</td>
                                <td align="center">
                                    <div class="custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="demoCheck2">
                                        <label class="custom-control-label" for="demoCheck2"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2021-2022</td>
                                <td>Ganjil</td>
                                <td align="center">
                                    <div class="custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="demoCheck3">
                                        <label class="custom-control-label" for="demoCheck3"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2021-2022</td>
                                <td>Genap</td>
                                <td align="center">
                                    <div class="custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="demoCheck4">
                                        <label class="custom-control-label" for="demoCheck4"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2022-2023</td>
                                <td>Ganjil</td>
                                <td align="center">
                                    <div class="custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="demoCheck5">
                                        <label class="custom-control-label" for="demoCheck5"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2022-2023</td>
                                <td>Genap</td>
                                <td align="center">
                                    <div class="custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="demoCheck6">
                                        <label class="custom-control-label" for="demoCheck6"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2023-2024</td>
                                <td>Ganjil</td>
                                <td align="center">
                                    <div class="custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="demoCheck7">
                                        <label class="custom-control-label" for="demoCheck7"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2023-2024</td>
                                <td>Genap</td>
                                <td align="center">
                                    <div class="custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="demoCheck8" checked>
                                        <label class="custom-control-label" for="demoCheck8"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2024-2025</td>
                                <td>Ganjil</td>
                                <td align="center">
                                    <div class="custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="demoCheck9">
                                        <label class="custom-control-label" for="demoCheck9"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2024-2025</td>
                                <td>Genap</td>
                                <td align="center">
                                    <div class="custom-control custom-checkbox mr-2">
                                        <input type="checkbox" class="custom-control-input" id="demoCheck10">
                                        <label class="custom-control-label" for="demoCheck10"></label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- datatable end -->
                </x-panel-page>
            @endslot
            @slot('isikedua')
                <x-panel-page>
                    <x-slot name="panel_id">input-tahun-ajar</x-slot>
                    <x-slot name="icon">plus</x-slot>
                    <x-slot name="title">Input Tahun Ajaran</x-slot>
                    <form action="" method="post" class="form-horizontal">
                        <div class="form-group row">
                            <label for="inputthaajar" class="col-form-label col-sm-2 text-sm-right form-label">Tahun
                                Ajar</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputthaajar" placeholder="Tahun Ajaran">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pilihsemester" class="col-form-label col-sm-2 text-sm-right form-label">Semester</label>
                            <div class="col-sm-4">
                                <select class="custom-select form-control" id="pilihsemester">
                                    <option value="">Pilih Semester</option>
                                    <option value="Ganjil">Ganjil</option>
                                    <option value="Ganjil">Genap</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pilihaktif" class="col-form-label col-sm-2 text-sm-right form-label">Aktif</label>
                            <div class="col-sm-10">
                                <div class="custom-control custom-radio custom-control-inline mt-2">
                                    <input type="radio" class="custom-control-input form-control" id="defaultInline1Radio"
                                        name="inlineDefaultRadiosExample">
                                    <label class="custom-control-label" for="defaultInline1Radio">Aktif</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input form-control" id="defaultInline2Radio"
                                        name="inlineDefaultRadiosExample" checked="">
                                    <label class="custom-control-label" for="defaultInline2Radio">Tidak Aktif</label>
                                </div>
                            </div>
                        </div>
                    </form>
                    <x-slot name="panelfooter">
                        <div
                            class="d-flex align-items-center panel-content py-2 rounded-bottom bg-faded border-faded border-left-0 border-right-0 border-bottom-0 text-muted">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm ml-auto"> <i class="fal fa-inbox-in"></i>
                                Save</a>
                        </div>
                    </x-slot>
                </x-panel-page>
            @endslot
        @endcomponent
    </main>
@endsection
@section('plugin')
    <script src="/js/datagrid/datatables/datatables.bundle.js"></script>
    <script>
        /* demo scripts for change table color */
        /* change background */


        $(document).ready(function() {
            $('#dt-basic-example').dataTable({
                responsive: true
            });

            $('.js-thead-colors a').on('click', function() {
                var theadColor = $(this).attr("data-bg");
                console.log(theadColor);
                $('#dt-basic-example thead').removeClassPrefix('bg-').addClass(theadColor);
            });

            $('.js-tbody-colors a').on('click', function() {
                var theadColor = $(this).attr("data-bg");
                console.log(theadColor);
                $('#dt-basic-example').removeClassPrefix('bg-').addClass(theadColor);
            });

        });
    </script>
@endsection
