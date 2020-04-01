@extends('layouts.app-shop', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('pageName', 'Shop Profile')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Profile</h4>

                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <form action="{{route('shop.profile.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" id="id" value="{{$shop->id}}">
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_name" class="bmd-label-floating">Shop Name</label>
                                            <input type="text" class="form-control" name="shop_name" value="{{$shop->name}}" id="shop_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_owner_name" class="bmd-label-floating">Owner Name</label>
                                            <input type="text" class="form-control" name="shop_owner_name" value="{{$shop->owner_name}}" id="shop_owner_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_email" class="bmd-label-floating">E-mail</label>
                                            <input type="email" class="form-control" name="shop_email" value="{{$shop->email}}" id="shop_email" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_password" class="bmd-label-floating">Password</label>
                                            <input type="password" class="form-control" name="shop_password" id="shop_password">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_address" class="bmd-label-floating">Address</label>
                                            <input type="text" class="form-control" name="shop_address" value="{{$shop->address}}" id="shop_address" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_phone" class="bmd-label-floating">Phone</label>
                                            <input type="text" class="form-control" name="shop_phone" value="{{$shop->phone}}" id="shop_phone" required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_area_code" class="bmd-label-floating">Area Code</label>
                                            <input type="text" class="form-control" value="{{$shop->area_code}}" name="shop_area_code" id="shop_area_code" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_type" class="bmd-label-floating">Shop Type</label>
                                            <input type="text" list="shopTypes" class="form-control" name="shop_type" id="shop_type">
                                            <datalist id="shopTypes">
                                                <option value="{{$shop->shop_type_id}}">{{$shop->shop_type_name}}</option>
                                                <option>---------------------------</option>
                                                @foreach($allShopTypes as $allShopType)
                                                    <option value="{{$allShopType->id}}">{{$allShopType->type}}</option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <label for="shop_image" class="bmd-label-floating">Image</label>
                                            <input type="file" class="form-control" name="shop_image" id="shop_image">
                                        </div>
                                    </div>

                                </div>

                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Update Profile" class="btn btn-block btn-primary pull-right">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <img src="{{asset($shop->avatar)}}" alt="profile">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            {{$shop->name}}
                        </h4>
                        <p class="card-description">
                            Some description about the shop, i.e the services it provides its opening and closing timing.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
