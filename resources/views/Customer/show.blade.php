@extends('layouts.custom')

@section('sidebar')
  @include('layouts.partials.sidebar')
@endsection










@section('content')
<div class="col-lg-12">
    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
        <div>
            <h4 class="mb-3">Customer List</h4>
            <p class="mb-0">A customer dashboard lets you easily gather and visualize customer data from optimizing <br>
             the customer experience, ensuring customer retention. </p>
        </div>
        <a href="{{route("customer.create")}}" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add Customer</a>
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
                <th>Name</th>
                <th>Email</th>
                <th>Phone No.</th>
                <th>Address</th>
                <th>Order</th>
                <th>Status</th>
                <th>Last Order</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="ligth-body">
             
            @foreach ($customers as $customer)
            <tr>
                <td>
                    <div class="checkbox d-inline-block">
                        <input type="checkbox" class="checkbox-input" id="checkbox4">
                        <label for="checkbox4" class="mb-0"></label>
                    </div>
                </td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->address}}</td>
                <td>3</td>
                <td><div class="badge badge-warning">Pending</div></td>
                <td>3</td>
                <td>
                    <div class="d-flex align-items-center list-action">
    
                        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"
                            href="{{route("customer.edit",$customer)}}"><i class="ri-pencil-line mr-0"></i></a>
                        <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"
                            href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                    </div>
                </td>
            </tr>
            @endforeach
          
        
            
        </tbody>
    </table>
    </div>
@endsection