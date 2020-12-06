@extends('layouts.app')

@section('title', 'Input Product')
@section('content')
<div class="container">

        <form action="makeProduct" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="mb-3">
                        <label for="price">Price</label>
                        <div class="input-group">
                                <div class="input-group-prepend">
                                        <div class="input-group-text">$USD</div>
                                </div>
                                <input type="text" class="form-control" id="price" name="price">
                        </div>
                </div>

                <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                </div>
                <div class="form-row form-group">
                        <div class="col-3">
                                <label for="stock">Stock</label>
                                <input type="number" class="form-control" id="stock" name="stock">
                        </div>
                </div>

                <div class="form-group">
                        <label for="img_path">Image file input</label>
                        <div class="custom-file">
                                <label class="custom-file-label" for="inputGroupFile">Choose Image</label>
                                <input type="file" name="img_path" class="custom-file-input" id="inputGroupFile" aria-describedby="inputGroupFileAddon">
                        </div>
                </div>

                <div class="form-group form-row">
                        <button class="btn btn-dark mr-2" name="submit" type="submit">Submit</button>

                </div>
        </form>
</div>

@endsection