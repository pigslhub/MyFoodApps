@extends('layouts.app-admin', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('pageName', 'Product Binding')
@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Service Category</h4>

                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <form action="{{route('admin.serviceAndCategory.update', $service_categories->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="service_categories_id" class="bmd-label-floating">Service Category ID (disabled)</label>
                                            <input type="text" class="form-control" name="service_categories_id" value="{{$service_categories->id}}" id="service_categories_id" disabled>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="service_id" class="bmd-label-floating">Service Name</label>
                                            <input type="text" list="services" class="form-control" name="service_id" value="{{$service_categories->servname}}" id="service_id" disabled>
                                            <datalist id="services">
                                                <option value="">-------------</option>
                                                @foreach($services as $service)
                                                <option value="{{$service->id}}">{{$service->name}}</option>
                                                @endforeach
                                            </datalist>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="service_name" class="bmd-label-floating">Enter Service Name</label>
                                            <input type="text" class="form-control" name="service_name" value="{{$service->name}}" id="service_name">

                                        </div>
                                    </div>

                                </div>

                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Update Service" class="btn btn-block btn-warning">
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
