@extends('layouts.shop.master')
@section('breadcrumb-title', 'Service')
@section('content')
    <div class="content">
        <div class="container-fluid">
            @include("flashMessages")

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Services</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="" class="dataTables_wrapper no-footer">

                                    <table id="service_table" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                        <thead class="text-primary">
                                        <tr role="row">
                                            <th class="sorting_asc">ID</th>
                                            <th class="sorting">Name</th>
                                            <th class="sorting">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($services as $service)
                                            <tr role="row">
                                                <td>{{$service->service_id}}</td>
                                                <td>{{$service->servname}}</td>
                                                <td>
                                                    <a href="{{route('shop.deleteMyService', $service->id)}}" class="btn btn-sm btn-danger">Delete</a>
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
            $('#service_table').DataTable();
        });
    </script>
@endpush
