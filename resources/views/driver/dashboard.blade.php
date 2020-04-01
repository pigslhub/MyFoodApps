@extends('layouts.driver.master')
@section('breadcrumb-title', 'Driver Dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Dashboard</h4>
                            <p class="card-category">dashboard</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="" class="dataTables_wrapper no-footer">

                                    <table class="table dataTable no-footer" role="grid">
                                        <thead class="text-primary">
                                        <tr role="row">
                                            <th class="sorting_asc">Add</th>
                                            <th class="sorting">Product</th>
                                            <th class="sorting">Salt</th>
                                            <th class="sorting">Note</th>
                                            <th class="sorting">Box</th>
                                            <th class="sorting">Shelf</th>
                                            <th class="sorting">Stock</th>
                                            <th class="sorting">SRPT</th>
                                            <th class="sorting">Pack</th>
                                            <th class="sorting">RS</th>
                                            <th class="sorting">Batch</th>
                                            <th class="sorting">Ex-Date</th>
                                            <th class="sorting">Company</th>
                                            <th class="sorting">Usage</th>

                                        </tr>
                                        </thead>
                                        <tbody>

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

