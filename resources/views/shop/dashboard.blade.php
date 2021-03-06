@extends('layouts.shop.master')
@section('breadcrumb-title', 'Dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
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
                                <a class="text-info" href="{{route('shop.order.viewAll')}}">View more...</a>
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
                                <a class="text-primary" href="{{route('shop.order.viewAll')}}">View more...</a>
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
                                <a class="text-warning" href="{{route('shop.order.viewAll')}}">View more...</a>
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
                                <a class="text-danger" href="{{route('shop.order.viewAll')}}">View more...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-chart">
                        <div class="card-header card-header-success">
                            <div class="ct-chart" id="dailySalesChart">
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Monthly Sales</h4>
                            <p class="card-category">
                                <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> updated 4 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

