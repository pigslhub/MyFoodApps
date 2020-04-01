@extends('layouts.app-shop', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('pageName', 'All Orders')
@section('content')
<div class="content">
    <div class="container-fluid">
        @include("flashMessages")
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">On Going Orders</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="onGoingOrders" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                        <tr role="row">
                                            <th class="sorting_asc">ID</th>
                                            <th class="sorting">Description</th>
                                            <th class="sorting">Customer</th>
                                            <th class="sorting">Driver</th>
                                            <th class="sorting">Due Date</th>
                                            <th class="sorting">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($orders as $order)
                                            @if($order->status == "drop")
                                        <tr role="row">
                                            <td>{{$order->order_id}}</td>
                                            <td>{{$order->description}}</td>
                                            <td>{{$order->customer_name}}</td>
                                            <td>{{$order->driver_name}}</td>
                                            <td>{{$order->due_date}}</td>
                                            <td>
                                                <a href="{{route('shop.order.changeStatus', [$order->id, "progress"])}}" class="btn btn-sm btn-primary">Change Status</a>
                                                <a href="{{route('shop.order.viewSingle', $order->id)}}"><i class="fa fa-eye fa-2x" style="color: #0e2b57"></i></a>
                                            </td>
                                        </tr>
                                        @endif
                                        @empty
                                        <tr role="row">
                                            <td colspan="2">No record found!</td>
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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">In Progress Orders</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="inProgressOrders" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                    <tr role="row">
                                        <th class="sorting_asc">ID</th>
                                        <th class="sorting">Description</th>
                                        <th class="sorting">Customer</th>
                                        <th class="sorting">Driver</th>
                                        <th class="sorting">Due Date</th>
                                        <th class="sorting">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($orders as $order)
                                        @if($order->status == "progress")
                                            <tr role="row">
                                                <td>{{$order->order_id}}</td>
                                                <td>{{$order->description}}</td>
                                                <td>{{$order->customer_name}}</td>
                                                <td>{{$order->driver_name}}</td>
                                                <td>{{$order->due_date}}</td>
                                                <td>
                                                    <a href="{{route('shop.order.changeStatus', [$order->id, "complete"])}}" class="btn btn-sm btn-primary">Change Status</a>
                                                    <a href="{{route('shop.order.viewSingle', $order->id)}}"><i class="fa fa-eye fa-2x" style="color: #0e2b57"></i></a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <tr role="row">
                                            <td colspan="2">No record found!</td>
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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Completed Orders</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="completedOrders" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                    <tr role="row">
                                        <th class="sorting_asc">ID</th>
                                        <th class="sorting">Description</th>
                                        <th class="sorting">Customer</th>
                                        <th class="sorting">Driver</th>
                                        <th class="sorting">Due Date</th>
                                        <th class="sorting">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($orders as $order)
                                        @if($order->status == "complete")
                                            <tr role="row">
                                                <td>{{$order->order_id}}</td>
                                                <td>{{$order->description}}</td>
                                                <td>{{$order->customer_name}}</td>
                                                <td>{{$order->driver_name}}</td>
                                                <td>{{$order->due_date}}</td>
                                                <td>
                                                    <a href="{{route('shop.order.changeStatus', [$order->id, "deliver"])}}" class="btn btn-sm btn-primary">Change Status</a>
                                                    <a href="{{route('shop.order.viewSingle', $order->id)}}"><i class="fa fa-eye fa-2x" style="color: #0e2b57"></i></a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <tr role="row">
                                            <td colspan="2">No record found!</td>
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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Delivered Orders</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="deliveredOrders" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                    <tr role="row">
                                        <th class="sorting_asc">ID</th>
                                        <th class="sorting">Description</th>
                                        <th class="sorting">Customer</th>
                                        <th class="sorting">Driver</th>
                                        <th class="sorting">Due Date</th>
                                        <th class="sorting">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($orders as $order)
                                        @if($order->status == "deliver")
                                            <tr role="row">
                                                <td>{{$order->order_id}}</td>
                                                <td>{{$order->description}}</td>
                                                <td>{{$order->customer_name}}</td>
                                                <td>{{$order->driver_name}}</td>
                                                <td>{{$order->due_date}}</td>
                                                <td>
                                                    <a href="{{route('shop.order.viewSingle', $order->id)}}"><i class="fa fa-eye fa-2x" style="color: #0e2b57"></i></a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <tr role="row">
                                            <td colspan="2">No record found!</td>
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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Canceled Orders</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="canceledOrders" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                    <tr role="row">
                                        <th class="sorting_asc">ID</th>
                                        <th class="sorting">Description</th>
                                        <th class="sorting">Customer</th>
                                        <th class="sorting">Driver</th>
                                        <th class="sorting">Due Date</th>
                                        <th class="sorting">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($orders as $order)
                                        @if($order->status == "cancel")
                                            <tr role="row">
                                                <td>{{$order->order_id}}</td>
                                                <td>{{$order->description}}</td>
                                                <td>{{$order->customer_name}}</td>
                                                <td>{{$order->driver_name}}</td>
                                                <td>{{$order->due_date}}</td>
                                                <td>
                                                    <a href="{{route('shop.order.viewSingle', $order->id)}}"><i class="fa fa-eye fa-2x" style="color: #0e2b57"></i></a>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <tr role="row">
                                            <td colspan="2">No record found!</td>
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

@push('js')
    <script>
        $(document).ready(function() {
            $('#onGoingOrders').DataTable();
            $('#inProgressOrders').DataTable();
            $('#completedOrders').DataTable();
            $('#deliveredOrders').DataTable();
            $('#canceledOrders').DataTable();
        });
    </script>
@endpush
