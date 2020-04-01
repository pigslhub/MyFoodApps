@extends('layouts.admin.master')
@section('breadcrumb-title', 'All Chats')
@section('content')
<div class="content">
    <div class="container-fluid">
        @include("flashMessages")
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">All Chats</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="dataTables_wrapper no-footer">

                                <table id="category_table" class="table dataTable no-footer" role="grid" aria-describedby="distributortable_info">
                                    <thead class="text-primary">
                                        <tr role="row">
                                            <th class="sorting_asc">ID</th>
                                            <th class="sorting">message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($completeChats as $completeChat)
                                        <tr role="row">
                                            <td>{{$completeChat->id}}</td>
                                            <td>{{$completeChat->message}}</td>
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
