@extends('layouts.shop.master')
@section('breadcrumb-title', 'Products')
@section('breadcrumb-items')
    <li class="breadcrumb-item active">My Products</li>
@endsection

@section('content')
    <div class="container-fluid">
        @include("flashMessages")
        <div class="row">
            <form method="post" action="{{route('shop.store')}}" class="card" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h4 class="card-title mb-0">Add Product</h4>
                    <div class="card-options"><a class="card-options-collapse" href="#" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="category_id" class="form-label">Category</label>
                                <input class="form-control" list="categories" type="text" name="category_id" id="category_id" placeholder="Select Category" required>
                                <datalist id="categories">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </datalist>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="product" class="form-label">Product</label>
                                <input class="form-control" type="text" name="product" id="product" placeholder="Enter Product Name" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="price" class="form-label">Price</label>
                                <input class="form-control" type="number" name="price" id="price" placeholder="Enter Price" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="picture" class="form-label">Picture</label>
                                <input class="form-control" type="file" name="picture" id="picture" placeholder="Upload Product Picture" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary" type="submit">Add Product</button>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">All Products</h4>
                        <div class="card-options"><a class="card-options-collapse" href="#" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table id="" class="table dataTable no-footer">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc">ID</th>
                                        <th class="sorting">Category</th>
                                        <th class="sorting">Product</th>
                                        <th class="sorting">Price</th>
                                        <th class="sorting">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($products as $product)
                                            <tr role="row">
                                                <td>{{$product->id}}</td>
                                                <td>{{$product->category_name}}</td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->price}}</td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-primary">View</a>
                                                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                                                    <a href="{{route('shop.deleteMyService', $product->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                    @empty
                                        <tr role="row">
                                            <td colspan="5">No record found!</td>
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
@endsection
