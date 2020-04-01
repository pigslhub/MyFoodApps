@extends('layouts.admin.master')
@section('breadcrumb-title', 'Create Admin')
@section('content')
<div class="content">
    <div class="container-fluid">
        @include("flashMessages")
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Admin Management</h4>
                        <p class="card-category">Admin Names</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                             <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="admin_id" class="bmd-label-floating">Admin ID (disabled)</label>
                                            <input type="text" class="form-control" name="admin_id" id="admin_id" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="admin_name" class="bmd-label-floating">Enter Admin Name</label>
                                            <input type="text" class="form-control" name="admin_name" id="admin_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="admin_email" class="bmd-label-floating">Enter Admin Email </label>
                                            <input type="text" class="form-control" name="admin_email" id="admin_email" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="row py-2">

                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="admin_password" class="bmd-label-floating">Enter Password</label>
                                            <input type="text" class="form-control" name="admin_password" id="admin_password" required>
                                        </div>
                                    </div>


                                </div>

                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Add Admin" class="btn btn-block btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      @if(Auth::user()->type == '0')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">All Admins</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="" class="dataTables_wrapper no-footer">

                                    <table id="category_table" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                        <thead class="text-primary">
                                        <tr role="row">
                                            <th class="sorting_asc">ID</th>
                                            <th class="sorting">Name</th>
                                            <th class="sorting">Email</th>
                                            <th class="sorting">Status</th>
                                            <th class="sorting">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($admins as $admin)
                                            <tr role="row">
                                                <td>{{$admin->id}}</td>
                                                <td>{{$admin->name}}</td>
                                                <td>{{$admin->email}}</td>
                                                <td>
                                                    @if($admin->status == "1")
                                                        <h6 style="color: green">Activated</h6>
                                                    @else
                                                        <h6 style="color: red">Deactivated</h6>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($admin->status == "1")
                                                        <a href="{{route('admin.deactivate', $admin->id)}}" class="btn btn-sm btn-danger">Deactivate</a>
                                                    @else
                                                        <a href="{{route('admin.activate', $admin->id)}}" class="btn btn-sm btn-success">Activate</a>
                                                    @endif
                                                    <a href="{{route('admin.edit', $admin->id)}}" class="btn btn-sm btn-warning">edit</a>
                                                    <a href="{{route('admin.destroy', $admin->id)}}" class="btn btn-sm btn-danger">delete</a>
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
        @else

        @endif

    </div>
</div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $('#driver_table').DataTable();
        });
    </script>
@endpush
