@extends('layouts.app-admin', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('pageName', 'Categories')
@section('content')
<div class="content">
    <div class="container-fluid">
        @include("flashMessages")
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Category Management</h4>
                        <p class="card-category">Category Names</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="category_id" class="bmd-label-floating">Category ID (disabled)</label>
                                            <input type="text" class="form-control" name="category_id" id="category_id" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="category_name" class="bmd-label-floating">Enter Category Name</label>
                                            <input type="text" list="categories" class="form-control" name="category_name" id="category_name">
                                            {{-- <datalist id="category">--}}
                                            {{-- @foreach($category as $category)--}}
                                            {{-- <option value="{{$category->category_name}}"></option>--}}
                                            {{-- @endforeach--}}
                                            {{-- </datalist>--}}
                                        </div>
                                    </div>

                                </div>



                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Add Category" class="btn btn-block btn-primary">
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
                        <h4 class="card-title">All Categories</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="category_table" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                        <tr role="row">
                                            <th class="sorting_asc">ID</th>
                                            <th class="sorting">Category Name</th>
                                            <th class="sorting">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($categories as $category)
                                        <tr role="row">
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>
                                                <a href="{{route('admin.category.edit', $category->id)}}" class="btn btn-sm btn-warning">edit</a>
                                                <a href="{{route('admin.category.destroy', $category->id)}}" class="btn btn-sm btn-danger">delete</a>
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
            $('#category_table').DataTable();
        });
    </script>
@endpush
