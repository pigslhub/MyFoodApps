@extends('layouts.app-shop', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('pageName', 'Advertisement')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Advertisement</h4>

                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <form action="{{route('shop.advertisement.update', $advertisement->id)}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="advertisement_id" class="bmd-label-floating">Advertisement ID (disabled)</label>
                                            <input type="text" class="form-control" name="advertisement_id" value="{{$advertisement->id}}" id="advertisement_id" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="title" class="bmd-label-floating">Enter Title</label>
                                            <input type="text" class="form-control" name="title" value="{{$advertisement->title}}" id="title" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="advertisement_description" class="bmd-label-floating">Enter Description</label>
                                            <input type="text" class="form-control" name="advertisement_description" value="{{$advertisement->description}}" id="advertisement_description" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="advertisement_due_date" class="bmd-label-floating">Validity</label>
                                            <input type="date" class="form-control" name="advertisement_due_date" value="{{$advertisement->due_date}}" id="advertisement_due_date" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <label for="banner" class="bmd-label-floating">Upload Advertisement Banner</label>
                                            <input type="file" class="form-control" name="banner" id="banner">
                                        </div>
                                    </div>
                                </div>


                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Update" class="btn btn-block btn-warning">
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
