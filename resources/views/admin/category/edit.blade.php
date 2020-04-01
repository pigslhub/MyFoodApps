@extends('layouts.app-admin', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('pageName', 'Categories')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Category</h4>

                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <form action="{{route('admin.category.update', $category->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row py-2">
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="category_id" class="bmd-label-floating">Category ID (disabled)</label>
                                            <input type="text" class="form-control" name="category_id" value="{{$category->id}}" id="category_id" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
                                            <label for="category_name" class="bmd-label-floating">Enter Category Name</label>
                                            <input type="text" list="categories" class="form-control" name="category_name" value="{{$category->name}}" id="category_name">
                                            {{-- <datalist id="category">--}}
                                            {{-- @foreach($category as $cat)--}}
                                            {{-- <option value="{{$cat->category_name}}"></option>--}}
                                            {{-- @endforeach--}}
                                            {{-- </datalist>--}}
                                        </div>
                                    </div>

                                </div>

                                <div class="row py-2">
                                    <div class="col-md-3">
                                        <input type="submit" value="Update Category" class="btn btn-block btn-warning">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
