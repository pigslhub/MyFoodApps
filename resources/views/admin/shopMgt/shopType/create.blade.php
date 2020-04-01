@extends('layouts.app-admin', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('pageName', 'Shop Types')
@section('content')
<div class="content">
    <div class="container-fluid">
        @include("flashMessages")
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Shop Type Management</h4>
                        <p class="card-category">Shop types Names</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="{{route('admin.shopType.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_type_id" class="bmd-label-floating">Shop Type ID (disabl)</label>
                                            <input type="text" class="form-control" name="shop_type_id" id="shop_type_id" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="shop_type_name" class="bmd-label-floating">Enter Shop Type</label>
                                            <input type="text" class="form-control" name="shop_type_name" id="shop_type_name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Add Shop Type" class="btn btn-block btn-primary">
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
                        <h4 class="card-title">All Shop Types</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="shop_type_table" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                        <tr role="row">
                                            <th class="sorting_asc">ID</th>
                                            <th class="sorting">Shop Type</th>
                                            <th class="sorting">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($shop_types as $shop_type)
                                        <tr role="row">
                                            <td>{{$shop_type->id}}</td>
                                            <td>{{$shop_type->type}}</td>
                                            <td>
                                                <a href="{{route('admin.shopType.edit', $shop_type->id)}}" class="btn btn-sm btn-warning">edit</a>
                                                <a href="{{route('admin.shopType.destroy', $shop_type->id)}}" class="btn btn-sm btn-danger">delete</a>
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
            $('#shop_type_table').DataTable();
        });
    </script>
@endpush
