@extends('layouts.app-admin', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('pageName', 'Services')
@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Service</h4>

                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <form action="{{route('admin.service.update', $service->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="service_id" class="bmd-label-floating">Service ID (disabled)</label>
                                            <input type="text" class="form-control" name="service_id" value="{{$service->id}}" id="service_id" disabled>
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
