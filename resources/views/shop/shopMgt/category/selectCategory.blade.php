@extends('layouts.app-shop', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('pageName', 'Category')
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

                                <div class="row py-2">
                                    @forelse($categories as $category)
                                    <div class="col-md-4">
                                        <div class="form-group bmd-form-group">
{{--                                            <label for="category_id" class="bmd-label-floating">Select Category</label>--}}

                                                    <form action="{{route('shop.selectService', $category->id)}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card" style="width: 18rem;">
                                                            <div class="card-body">
                                                                <h3 class="card-title">{{$category->name}}</h3>
                                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                                <input type="submit" value="Add Service" class="btn btn-block btn-primary">
                                                            </div>
                                                        </div>
                                                    </form>


                                        </div>
                                    </div>
                                    @empty
                                        <h3>No categories found!</h3>
                                    @endforelse
                                </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
