@extends('layouts.app-admin', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('pageName', 'Customers')
@section('content')
<div class="content">
    <div class="container-fluid">
        @include("flashMessages")
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">All Conversations</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="category_table" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                        <tr role="row">
                                            <th class="sorting_asc">ID</th>
                                            <th class="sorting">First Person</th>
                                            <th class="sorting">Second Person</th>
                                            <th class="sorting">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($conversations as $conversation)
                                        <tr role="row">
                                            <td>{{$conversation->id}}</td>
                                            <td>{{$conversation->personone}}</td>
                                            <td>{{$conversation->persontwo}}</td>
                                            <td>
                                                <a href="{{route('admin.conversations.completeChat', $conversation->id)}}" class="btn btn-sm btn-success">View</a>
                                                <a href="{{route('admin.conversations.destroy', $conversation->id)}}" class="btn btn-sm btn-danger">Delete</a>
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
