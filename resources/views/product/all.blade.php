@extends('layouts.custom')

@section('sidebar')
  @include('layouts.partials.sidebar')
@endsection

@section('content')
<div class="col-lg-12">
    <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
        <div>
            <h4 class="mb-3">Product List</h4>
            <p class="mb-0">The product list effectively dictates product presentation and provides space<br> to list your products and offering in the most appealing way.</p>
        </div>
        <a href="{{route('product.create')}}" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add Product</a>
    </div>
</div>
<div class="col-lg-12">
    <div class="table-responsive rounded mb-3">
    <table class="data-tables table mb-0 tbl-server-info">
        <thead class="bg-white text-uppercase">
            <tr class="ligth ligth-data">
                <th>
                    <div class="checkbox d-inline-block">
                        <input type="checkbox" class="checkbox-input" id="checkbox1">
                        <label for="checkbox1" class="mb-0"></label>
                    </div>
                </th>
                <th>Product</th>
                <th>Code</th>
                <th>Category</th>
                <th>Price</th>
                <th>Cost</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="ligth-body">
            
           @foreach ($products as $product)
           <tr>
            <td>
                <div class="checkbox d-inline-block">
                    <input type="checkbox" class="checkbox-input" id="checkbox2">
                    <label for="checkbox2" class="mb-0"></label>
                </div>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <img src="{{asset('storage/'.$product->logo)}}" class="img-fluid rounded avatar-50 mr-3" alt="image">
                    <div>
                        {{$product->name}}
                        <p class="mb-0"><small>{{$product->desc}}</small></p>
                    </div>
                </div>
            </td>
            <td> {{$product->code}}</td>
            <td> {{$product->category}}</td>
            <td> Tsh {{$product->price}}</td>
            <td> Tsh {{$product->cost}}</td>
            <td> {{$product->quantity}}</td>
            <td>
                <div class="d-flex align-items-center list-action">
                    <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"
                        href="{{route('product.show',$product)}}"><i class="ri-eye-line mr-0"></i></a>
                    <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                        href="{{route('product.edit', $product)}}"><i class="ri-pencil-line mr-0"></i></a>
                        <form method="POST" action="{{route('product.destroy', $product)}}">
                            @csrf
                            @method('delete')

                    <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                        href="" onclick="event.preventDefault(); this.closest('form').submit();"><i class="ri-delete-bin-line mr-0"></i></a>
                        </form>
                </div>
            </td>
        </tr>
           @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection