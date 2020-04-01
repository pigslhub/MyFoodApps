@extends('layouts.app-shop', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('pageName', 'View Categories')
@section('content')
    <div class="content">
        <div class="container-fluid">
            @include("flashMessages")

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">All Categories</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="" class="dataTables_wrapper no-footer">

                                    <table id="category_table" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                        <thead class="text-primary">
                                        <tr role="row">
                                            <th class="sorting_asc">ID</th>
                                            <th class="sorting">Name</th>
                                            <th class="sorting">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($categories as $category)
                                            <tr role="row">
                                                <td>{{$category->id}}</td>
                                                <td>{{$category->name}}</td>
                                                <td>
                                                    <a href="{{route('shop.showMyServices', $category->id)}}" class="btn btn-sm btn-warning">View more</a>
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
            $('#category_table').DataTable();
        });
    </script>
@endpush
