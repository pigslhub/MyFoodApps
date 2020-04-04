@extends('layouts.admin.master')
@section('breadcrumb-title', 'Create Coupons')
@section('content')
<div class="content">
    <div class="container-fluid">
        @include("flashMessages")
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Coupon Management</h4>
                        <p class="card-category">Coupon Management</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="{{route('coupon.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="admin_id" class="bmd-label-floating">Coupon ID (disabled)</label>
                                            <input type="text" class="form-control" name="coupon_id" id="admin_id" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="coupon_title" class="bmd-label-floating">Coupon Title</label>
                                            <input type="text" class="form-control" name="title" id="coupon_title" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="coupon_description" class="bmd-label-floating">Coupon Description </label>
                                            <input type="text" class="form-control" name="description" id="coupon_descriptioncoupon_description" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="coupon_description" class="bmd-label-floating">Coupon Code </label>
                                            <input type="text" class="form-control" name="code" id="coupon_descriptioncoupon_description" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="coupon_description" class="bmd-label-floating">Minimum Order Amount </label>
                                            <input type="text" class="form-control" name="min_order_amount" id="coupon_descriptioncoupon_description" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="coupon_description" class="bmd-label-floating">Discount </label>
                                            <input type="text" class="form-control" name="discount" id="coupon_descriptioncoupon_description" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="coupon_description" class="bmd-label-floating">Expiry Date </label>
                                            <input type="date" class="form-control" name="exp_date" id="coupon_descriptioncoupon_description" required>
                                        </div>
                                    </div>

                                </div>

                                

                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Add Coupon" class="btn btn-block btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">All Admins</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="" class="dataTables_wrapper no-footer">

                                    <table id="category_table" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                        <thead class="text-primary">
                                        <tr role="row">
                                            <th class="sorting_asc">Id</th>
                                            <th class="sorting">Title</th>
                                            <th class="sorting">Description</th>
                                            <th class="sorting">Code</th>
                                            <th class="sorting">Minimum Order Amount</th>
                                            <th class="sorting">Discount</th>
                                            <th class="sorting">Expiry</th>
                                            <th class="sorting">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($coupons as $coupon)
                                            <tr role="row">
                                                <td>{{$coupon->id}}</td>
                                                <td>{{$coupon->title}}</td>
                                                <td>{{$coupon->description}}</td>
                                                <td>{{$coupon->code}}</td>
                                                <td>{{$coupon->min_order_amount}}</td>
                                                <td>{{$coupon->discount}}</td>
                                                <td>{{$coupon->exp_date}}</td>
                                                
                                                <td>
                                                    <a href="{{route('coupon.destroy', $coupon->id)}}" class="btn btn-sm btn-danger">delete</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr role="row">
                                                <td colspan="3" style="text-align: center">No record found!</td>

                                            </tr>
                                        @endforelse

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      



    </div>
</div>
@endsection
