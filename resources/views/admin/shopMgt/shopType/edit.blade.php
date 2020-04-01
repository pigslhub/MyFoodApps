@extends('layouts.app-admin', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('pageName', 'Shop Types')
@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Shop Type</h4>

                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <form action="{{route('admin.shopType.update', $shop_type->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_type_id" class="bmd-label-floating">Shop Type ID (disabl)</label>
                                            <input type="text" class="form-control" name="shop_type_id" value="{{$shop_type->id}}" id="shop_type_id" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_type_name" class="bmd-label-floating">Enter Shop Type</label>
                                            <input type="text" class="form-control" name="shop_type_name" value="{{$shop_type->type}}" id="shop_type_name">

                                        </div>
                                    </div>

                                </div>

                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Update Shop Type" class="btn btn-block btn-warning">
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
