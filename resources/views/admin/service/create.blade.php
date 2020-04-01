@extends('layouts.app-admin', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('pageName', 'Services')
@section('content')
<div class="content">
    <div class="container-fluid">
        @include("flashMessages")
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Service Management</h4>
                        <p class="card-category">Service Names</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="{{route('admin.service.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="service_id" class="bmd-label-floating">Service ID (disabl)</label>
                                            <input type="text" class="form-control" name="service_id" id="service_id" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="service_name" class="bmd-label-floating">Enter Service Name</label>
                                            <input type="text" class="form-control" name="service_name" id="service_name">

                                        </div>
                                    </div>
                                </div>

                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Add Service" class="btn btn-block btn-primary">
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
                        <h4 class="card-title">All Services</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="service_table" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                        <tr role="row">
                                            <th class="sorting_asc">ID</th>
                                            <th class="sorting">Service Name</th>
                                            <th class="sorting">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($services as $service)
                                        <tr role="row">
                                            <td>{{$service->id}}</td>
                                            <td>{{$service->name}}</td>
                                            <td>
                                                <a href="{{route('admin.service.edit', $service->id)}}" class="btn btn-sm btn-warning">edit</a>
                                                <a href="{{route('admin.service.destroy', $service->id)}}" class="btn btn-sm btn-danger">delete</a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr role="row">
                                            <td colspan="3">No record found!</td>

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
            $('#service_table').DataTable();
        });
    </script>
@endpush
