@extends('layouts.admin.master')
@section('breadcrumb-title', 'Admin Dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-university"></i>
                            </div>
                            <p class="card-category">Total Shops</p>
                            <h3 class="card-title">{{$total_shops}}
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-info-circle fa-2x mr-2 text-info"></i>
                                <a class="text-info" href="{{route('admin.shop.create')}}">View more...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-primary card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-truck"></i>
                            </div>
                            <p class="card-category">Total Drivers</p>
                            <h3 class="card-title">{{$total_drivers}}
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-info-circle fa-2x mr-2 text-primary"></i>
                                <a class="text-primary" href="{{route('admin.driver.create')}}">View more...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <p class="card-category">Total Customers</p>
                            <h3 class="card-title">{{$total_customers}}
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-info-circle fa-2x mr-2 text-warning"></i>
                                <a class="text-warning" href="{{route('admin.customer.create')}}">View more...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-sign-in"></i>
                            </div>
                            <p class="card-category">On Going Orders</p>
                            <h3 class="card-title">{{$onGoing_orders}}
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-info-circle fa-2x mr-2 text-info"></i>
                                <a class="text-info" href="{{route('admin.order.viewAll')}}">View more...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-primary card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <p class="card-category">Complete Orders</p>
                            <h3 class="card-title">{{$completed_orders}}
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-info-circle fa-2x mr-2 text-primary"></i>
                                <a class="text-primary" href="{{route('admin.order.viewAll')}}">View more...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-sign-out"></i>
                            </div>
                            <p class="card-category">Delivered Orders</p>
                            <h3 class="card-title">{{$delivered_orders}}
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-info-circle fa-2x mr-2 text-warning"></i>
                                <a class="text-warning" href="{{route('admin.order.viewAll')}}">View more...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-frown-o"></i>
                            </div>
                            <p class="card-category">Canceled Orders</p>
                            <h3 class="card-title">{{$canceled_orders}}
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-info-circle fa-2x mr-2 text-danger"></i>
                                <a class="text-danger" href="{{route('admin.order.viewAll')}}">View more...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

