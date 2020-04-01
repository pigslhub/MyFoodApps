@extends('layouts.app-shop', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('pageName', 'Services')
@section('content')
<div class="content">
    <div class="container-fluid">
        @include("flashMessages")
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Select Service</h4>
                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <form action="{{route('shop.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="service_id" class="bmd-label-floating">Select Service</label>
                                            <input type="text" list="services" class="form-control" name="service_id" id="service_id" required>
                                            <datalist id="services">
                                                @foreach($services as $service)
                                                    <option value="{{$service->id}}">{{$service->name}}</option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="service_rate" class="bmd-label-floating">Enter Rate </label>
                                            <input type="text" class="form-control" name="service_rate" id="service_rate" required>
                                        </div>
                                    </div>

                                </div>


                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="hidden" name="category_id" value="{{$categoryId}}">
                                        <input type="submit" value="Bind" class="btn btn-block btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
