@extends('layouts.master')

@section('main')
    <div class="page-wrapper">
        @include('layouts.shop.header')
        <div class="page-body-wrapper">
            @include('layouts.shop.sidebar')
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <div class="page-header-left">
                                    <h3>@yield('breadcrumb-title')</h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
                                        @yield('breadcrumb-items')
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')

            </div>
            @include('layouts.shop.footer')

        </div>
    </div>

@endsection
