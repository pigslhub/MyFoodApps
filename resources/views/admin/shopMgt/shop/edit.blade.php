@extends('layouts.admin.master')
@section('breadcrumb-title', 'All Customers')
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
                            <form action="{{route('admin.shop.update', $shop->id)}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_id" class="bmd-label-floating">Shop ID (disabled)</label>
                                            <input type="text" class="form-control" name="shop_id" value="{{$shop->id}}" id="shop_id" disabled required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_name" class="bmd-label-floating">Enter Shop Name</label>
                                            <input type="text" class="form-control" name="shop_name" value="{{$shop->name}}" id="shop_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_owner_name" class="bmd-label-floating">Enter Owner Name</label>
                                            <input type="text" class="form-control" name="shop_owner_name" value="{{$shop->owner_name}}" id="shop_owner_name" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_email" class="bmd-label-floating">Enter Email </label>
                                            <input type="text" class="form-control" name="shop_email" value="{{$shop->email}}" id="shop_email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_password" class="bmd-label-floating">Enter New Password</label>
                                            <input type="password" class="form-control" name="shop_password" id="shop_password">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_address" class="bmd-label-floating">Enter Shop Address</label>
                                            <input type="text" class="form-control" name="shop_address" value="{{$shop->address}}" id="shop_address" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_phone" class="bmd-label-floating">Enter Shop Phone </label>
                                            <input type="text" class="form-control" name="shop_phone" value="{{$shop->phone}}" id="shop_phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_area_code" class="bmd-label-floating">Enter Shop Area code</label>
                                            <input type="text" class="form-control" name="shop_area_code" value="{{$shop->area_code}}" id="shop_area_code" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_commision" class="bmd-label-floating">Enter Shop Commission</label>
                                            <input type="number" step="0.01" class="form-control" name="shop_commision" value="{{$shop->commision}}" id="shop_commision" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_type_id" class="bmd-label-floating">Select Shop Type </label>
                                            <input type="text" list="shopTypes" class="form-control" name="shop_type_id" id="shop_type_id" required>
                                            <datalist id="shopTypes">
                                                <option value="{{$shop->shop_type_id}}">{{$shop->shop_type_name}}</option>
                                                <option>---------------------------</option>
                                                @foreach($allShopTypes as $allShopType)
                                                <option value="{{$allShopType->id}}">{{$allShopType->type}}</option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                    </div>

                                </div>

                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Update Shop" class="btn btn-block btn-warning">
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
