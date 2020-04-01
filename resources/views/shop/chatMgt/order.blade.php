@extends('layouts.app-shop', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('pageName', 'Order')
@section('content')
    <div class="content">
        <div class="container-fluid">
            @include("flashMessages")
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Generate Order</h4>
                            <p class="card-category">order details</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="{{route('shop.order.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row py-2">
                                        <div class="col-md-4">
                                            <div class="form-group bmd-form-group">
                                                <label for="order_id" class="bmd-label-floating">Order ID (disabl)</label>
                                                <input type="text" class="form-control" name="order_id" id="order_id" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group bmd-form-group">
                                                <label for="order_amount" class="bmd-label-floating">Enter amount</label>
                                                <input type="number" class="form-control" name="order_amount" id="order_amount">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group bmd-form-group">
                                                <label for="order_duedate" class="bmd-label-floating">Select Due Date</label>
                                                <input type="date" class="form-control" name="order_duedate" id="order_duedate">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row py-2">
                                        <div class="col-md-12">
                                            <div class="form-group bmd-form-group">
                                                <label for="order_description" class="bmd-label-floating">Enter Some Description</label>
                                                <textarea class="form-control" name="order_description" id="order_description"></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row py-2">

                                        <div class="col-md-3">
                                            <input type="hidden" name="customer_id" value="{{$customer_id}}">
                                            <input type="hidden" name="conversation_id" value="{{$conversation_id}}">
                                            <input type="submit" value="Create Order" class="btn btn-block btn-primary">
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
