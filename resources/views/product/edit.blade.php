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
        <form method="POST" action="{{ route('product.update',$product) }}" data-toggle="validator">
            @csrf
            @method('patch')
            <div class="row">
                 
                <div class="col-md-6">                      
                    <div class="form-group">
                        <label>Name *</label>
                        <input value="{{$product->name}}" name="name" type="text" class="form-control" placeholder="Enter Name" data-errors="Please Enter Name." required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>    
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Code *</label>
                        <input value="{{$product->code}}" type="text"  name="code" class="form-control" placeholder="Enter Code" data-errors="Please Enter Code." required>
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
                            <option>Beauty</option>
                            <option>Grocery</option>
                            <option>Food</option>
                            <option>Furniture</option>
                            <option>Shoes</option>
                            <option>Frames</option>
                            <option>Jewellery</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Cost *</label>
                        <input value="{{$product->cost}}" name="cost" type="text" class="form-control" placeholder="Enter Cost" data-errors="Please Enter Cost." required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Price *</label>
                        <input value="{{$product->price}}" name="price" type="text" class="form-control" placeholder="Enter Price" data-errors="Please Enter Price." required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">                                    
                    <div class="form-group">
                        <label>Quantity *</label>
                        <input value="{{$product->quantity}}" name="quantity" type="text" class="form-control" placeholder="Enter Quantity" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
              
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Description / Product Details</label>
                        <textarea name="desc" class="form-control" rows="4">{{$product->desc}}</textarea>
                    </div>
                </div>
            </div>     
            <x-input-error :messages="$errors->all()" class="mt-2" />                       
            <button type="submit" class="btn btn-primary mr-2">update Product</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</div>
@endsection

