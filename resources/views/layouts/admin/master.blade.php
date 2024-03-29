@extends('layouts.master')

@section('main')
    <div class="page-wrapper">
    @include('layouts.admin.header')
        <div class="page-body-wrapper">
            @include('layouts.admin.sidebar')
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <div class="page-header-left">
                                    <h3>@yield('breadcrumb-title')</h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                                        @yield('breadcrumb-item')
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')

            </div>
            @include('layouts.admin.footer')

        </div>
    </div>

@endsection
