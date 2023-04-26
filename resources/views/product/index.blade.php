@extends('layouts.custom')

@section('sidebar')
  @include('layouts.partials.sidebar')
@endsection

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">Add Product</h4>
        </div>
    </div>
    <div class="card-body">
        <form method="POST"  enctype="multipart/form-data" action="{{ route('product.store') }}" data-toggle="validator">
            @csrf
            <div class="row">
                 
                <div class="col-md-6">                      
                    <div class="form-group">
                        <label>Name *</label>
                        <input name="name" type="text" class="form-control" placeholder="Enter Name" data-errors="Please Enter Name." required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>    
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Code *</label>
                        <input type="text"  name="code" class="form-control" placeholder="Enter Code" data-errors="Please Enter Code." required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div> 
                <div class="col-md-6"> 
                    <div class="form-group">
                        <label>Barcode Symbology *</label>
                        <select name="barcode" name="type" class="selectpicker form-control" data-style="py-0">
                            <option>CREM01</option>
                            <option>UM01</option>
                            <option>SEM01</option>
                            <option>COF01</option>
                            <option>FUN01</option>
                            <option>DIS01</option>
                            <option>NIS01</option>
                        </select>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Category *</label>
                        <select name="category" name="type" class="selectpicker form-control" data-style="py-0">
                            @foreach ($categorys as $category)
                            <option>{{$category->name}}</option>
                            @endforeach
                            
                            
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Cost *</label>
                        <input name="cost" type="text" class="form-control" placeholder="Enter Cost" data-errors="Please Enter Cost." required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Price *</label>
                        <input name="price" type="text" class="form-control" placeholder="Enter Price" data-errors="Please Enter Price." required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">                                    
                    <div class="form-group">
                        <label>Quantity *</label>
                        <input name="quantity" type="text" class="form-control" placeholder="Enter Quantity" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control image-file" name="pic" accept="image/*">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Description / Product Details</label>
                        <textarea name="desc" class="form-control" rows="4"></textarea>
                    </div>
                </div>
            </div>     
            <x-input-error :messages="$errors->all()" class="mt-2" />                       
            <button type="submit" class="btn btn-primary mr-2">Add Product</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</div>
@endsection

