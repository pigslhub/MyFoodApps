@extends('layouts.admin.master')
@section('breadcrumb-title', 'Create Admin')
@section('content')
<div class="content">
    <div class="container-fluid">
        @include("flashMessages")
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Admin Management</h4>
                        <p class="card-category">Admin Names</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="{{route('admin.update', $admin->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="admin_id" class="bmd-label-floating">Admin ID (disabled)</label>
                                            <input type="text" class="form-control" name="admin_id" id="admin_id" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="admin_name" class="bmd-label-floating">Enter Admin Name</label>
                                            <input type="text" class="form-control" name="admin_name" value="{{$admin->name}}" id="admin_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="admin_email" class="bmd-label-floating">Enter Admin Email </label>
                                            <input type="text" class="form-control" name="admin_email" value="{{$admin->email}}" id="admin_email" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="row py-2">

                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="admin_password" class="bmd-label-floating">Enter Password</label>
                                            <input type="text" class="form-control" name="admin_password" id="admin_password">
                                        </div>
                                    </div>


                                </div>

                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Update Admin" class="btn btn-block btn-primary">
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
