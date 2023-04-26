@extends('layouts.custom')

@section('sidebar')
  @include('layouts.partials.sidebar')
@endsection










@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">Add Customer</h4>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route("customer.update" , $customer)}}" data-toggle="validator">
            @csrf
            <div class="row"> 
                <div class="col-md-6">                      
                    <div class="form-group">
                        <label>Name *</label>
                        <input value="{{$customer->name}}" name="name" type="text" class="form-control" placeholder="Enter Name" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>    
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email *</label>
                        <input value="{{$customer->email}}" name="email" type="text" class="form-control" placeholder="Enter Email" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone Number *</label>
                        <input value="{{$customer->phone}}" name="phone" type="text" class="form-control" placeholder="Enter Phone Number" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div> 
              
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Address</label>
                        <textarea  name="address" class="form-control" rows="4">{{$customer->address}}</textarea>
                    </div>
                </div>
               
            </div> 
            <x-input-error :messages="$errors->all()" class="mt-2" />                            
            <button type="submit" class="btn btn-primary mr-2">Update Customer</button>
            
        </form>
    </div>
</div>
@endsection