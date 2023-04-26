@extends('layouts.custom')

@section('sidebar')
  @include('layouts.partials.sidebar')
@endsection

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Add Category</h4>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('category.store') }}" data-toggle="validator">
                @csrf
                <div class="row">
                     
                    <div class="col-md-6">                      
                        <div class="form-group">
                            <label>Name *</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter Name" data-errors="Please Enter Name." required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>    
                  
                </div>     
                <x-input-error :messages="$errors->all()" class="mt-2" />                       
                <button type="submit" class="btn btn-primary mr-2">Add Category</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>
</div>

@endsection

