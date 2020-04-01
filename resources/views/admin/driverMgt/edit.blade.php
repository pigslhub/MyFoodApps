@extends('layouts.app-admin', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('pageName', 'Drivers')
@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Driver</h4>

                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <form action="{{route('admin.driver.update', $driver->id)}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_id" class="bmd-label-floating">Driver ID (disabled)</label>
                                            <input type="text" class="form-control" name="driver_id" value="{{$driver->id}}" id="driver_id" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_name" class="bmd-label-floating">Enter Driver Name</label>
                                            <input type="text" class="form-control" name="driver_name" value="{{$driver->name}}" id="driver_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_email" class="bmd-label-floating">Enter Email </label>
                                            <input type="text" class="form-control" name="driver_email" value="{{$driver->email}}" id="driver_email" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="row py-2">

                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_password" class="bmd-label-floating">Enter Password</label>
                                            <input type="text" class="form-control" name="driver_password" id="driver_password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_gender" class="bmd-label-floating">Select Gender</label>
                                            <input type="text" list="gender" class="form-control" name="driver_gender" value="{{$driver->gender}}" id="driver_gender" required>
                                            <datalist id="gender">
                                                <option value="male"></option>
                                                <option value="female"></option>
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_address" class="bmd-label-floating">Enter Driver Address</label>
                                            <input type="text" class="form-control" name="driver_address" value="{{$driver->address}}" id="driver_address" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_phone" class="bmd-label-floating">Enter Driver Phone </label>
                                            <input type="text" class="form-control" name="driver_phone" value="{{$driver->phone}}" id="driver_phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_area_code" class="bmd-label-floating">Enter Driver Area code</label>
                                            <input type="text" class="form-control" name="driver_area_code" value="{{$driver->area_code}}" id="driver_area_code" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="driver_dob" class="bmd-label-floating">Select date of birth</label>
                                            <input type="date" class="form-control" name="driver_dob" value="{{$driver->dob}}" id="driver_dob" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Update Driver" class="btn btn-block btn-warning">
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
