@extends('layouts.custom')


@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection


@section('sidebar')
  @include('layouts.partials.sidebar')
@endsection





@section('content')
<div class="col-lg-12">
    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
        <div>
            <h4 class="mb-3">Quotaion List</h4>
            <p class="mb-0">A Quotaion dashboard lets you easily gather and visualize customer data from optimizing <br>
             the customer experience, ensuring customer retention. </p>
        </div>
        <a href="{{route("quotation.create")}}" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add Quotation</a>
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
                <th>order id</th>
                <th>Customer Name</th>
                <th>Amount</th>
                <th>Discount</th>
                <th>total </th>
                <th>date</th>
                <th>invoice</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="ligth-body">
           
            
            @foreach ($orders as $order)
            <tr>
                <td>
                    <div class="checkbox d-inline-block">
                        <input type="checkbox" class="checkbox-input" id="checkbox4">
                        <label for="checkbox4" class="mb-0"></label>
                    </div>
                </td>
                <td>{{$order->id}}</td>
                <td>{{$order->name}}</td>
                <td>{{$order->amount}}</td>
                <td>{{$order->discount}}</td>
                <td>{{$order->amount- $order->discount}}</td>
                <td>{{$order->orderDate}}</td>
                <td><div class="badge badge-warning">{{$order->status}}</div></td>
                <td>
                    <div class="d-flex align-items-center list-action">
                       
                        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="view"
                            href="{{route("quotation.show",$order->id)}}"><i class="ri-eye-line mr-0"></i></a>

    

                        <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="print"
                            href="{{route("quotation.print",$order->id)}}"><i class="ri-printer-line mr-0"></i></a>

                            @if ($order->status = "Created")
                            <a class="badge bg-purple mr-2" onclick="createInvoice({{$order->id}})" data-toggle="tooltip" data-placement="top" title="" data-original-title="create invoice"
                            href="#"><i class="ri-file-list-3-line mr-0"></i></a>
                            @endif
                    </div>
                </td>
            </tr>
            @endforeach
          
        
            
        </tbody>
    </table>
    </div>
@endsection