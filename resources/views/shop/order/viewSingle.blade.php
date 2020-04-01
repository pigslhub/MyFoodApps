@extends('layouts.shop.master')
@section('breadcrumb-title', $order->order_id)
@section('content')
<div class="content">
    <div class="container-fluid">
        @include("flashMessages")
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Order ID: {{$order->order_id}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="category_table" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                    <tr role="row">
                                        <th>Description:</th>
                                        <td><i class="fa fa-newspaper-o fa-2x mr-3" style="color: #0e2b57"></i>{{$order->description}}</td>
                                    </tr>
                                    <tr role="row">
                                        <th>Customer:</th>
                                        <td><i class="fa fa-user fa-2x mr-3" style="color: #0e2b57"></i>{{$order->customer_name}}</td>
                                    </tr>
                                    <tr role="row">
                                        <th>Driver:</th>
                                        <td>
                                            <i class="fa fa-user fa-2x mr-3" style="color: #0e2b57"></i>{{$order->driver_name}}
                                            <br>
                                            <i class="fa fa-envelope-o fa-2x mr-3" style="color: #0e2b57"></i>{{$order->driver_email}}
                                            <br>
                                            <i class="fa fa-phone fa-2x mr-3" style="color: #0e2b57"></i>{{$order->driver_phone}}
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <th>Amount:</th>
                                        <td>
                                            <i class="fa fa-dollar mr-3" style="color: #0e2b57"></i>{{$order->amount}}
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <th>Status:</th>
                                        <td>
                                            <i class="fa fa-tasks mr-3" style="color: #0e2b57"></i>{{$order->status}}
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <th>Due Date:</th>
                                        <td>
                                            <i class="fa fa-calendar-o fa-2x mr-3" style="color: #0e2b57"></i>{{$order->due_date}}
                                        </td>
                                    </tr>
                                    </thead>
                                    <tbody>

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
