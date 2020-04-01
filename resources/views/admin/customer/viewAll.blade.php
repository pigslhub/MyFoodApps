@extends('layouts.admin.master')
@section('breadcrumb-title', 'All Customers')

@section('content')
<div class="content">
    <div class="container-fluid">
        @include("flashMessages")
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">All Customers</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="customer_table" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                        <tr role="row">
                                            <th class="sorting_asc">ID</th>
                                            <th class="sorting">Name</th>
                                            <th class="sorting">Email</th>
                                            <th class="sorting">Address</th>
                                            <th class="sorting">Phone</th>
                                            <th class="sorting">date of birth</th>
                                            <th class="sorting">gender</th>
                                            <th class="sorting">Area Code</th>
                                            <th class="sorting">Status</th>
                                            <th class="sorting">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($customers as $customer)
                                        <tr role="row">
                                            <td>{{$customer->id}}</td>
                                            <td>{{$customer->name}}</td>
                                            <td>{{$customer->email}}</td>
                                            <td>{{$customer->address}}</td>
                                            <td>{{$customer->phone}}</td>
                                            <td>{{$customer->dob}}</td>
                                            <td>{{$customer->gender}}</td>
                                            <td>{{$customer->area_code}}</td>
                                            <td>
                                                @if($customer->status == "1")
                                                <h6 style="color: green">Activated</h6>
                                                @else
                                                <h6 style="color: red">Deactivated</h6>
                                                @endif
                                            </td>
                                            <td>
                                                @if($customer->status == "1")
                                                <a href="{{route('admin.customer.deactivate', $customer->id)}}" class="btn btn-sm btn-danger">Deactivate</a>
                                                @else
                                                <a href="{{route('admin.customer.activate', $customer->id)}}" class="btn btn-sm btn-success">Activate</a>
                                                @endif

                                                <a href="{{route('admin.customer.destroy', $customer->id)}}" class="btn btn-sm btn-danger">delete</a>
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
@push('js')
    <script>
        $(document).ready(function() {
            $('#customer_table').DataTable();
        });
    </script>
@endpush
