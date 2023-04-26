@extends('layouts.custom')


@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style type="text/css">
    @keyframes ldio-lg6mvkuusfs {
      0% {
        top: 96px;
        left: 96px;
        width: 0;
        height: 0;
        opacity: 1;
      }
      100% {
        top: 18px;
        left: 18px;
        width: 156px;
        height: 156px;
        opacity: 0;
      }
    }.ldio-lg6mvkuusfs div {
      position: absolute;
      display: flex;
      border-width: 4px;
      border-style: solid;
      opacity: 1;
      border-radius: 50%;
      animation: ldio-lg6mvkuusfs 1s cubic-bezier(0,0.2,0.8,1) infinite;
    }.ldio-lg6mvkuusfs div:nth-child(1) {
      border-color: #ff915e;
      animation-delay: 0s;
    }
    .ldio-lg6mvkuusfs div:nth-child(2) {
      border-color: #46dff0;
      animation-delay: -0.5s;
    }
    .loadingio-spinner-ripple-epk6u42ktr {
      width: 200px;
      height: 200px;
      display: inline-block;
      overflow: hidden;
      background: #ffffff;
    }
    .ldio-lg6mvkuusfs {
      width: 100%;
      height: 100%;
      position: relative;
      transform: translateZ(0) scale(1);
      backface-visibility: hidden;
      transform-origin: 0 0; /* see note above */
    }
    .ldio-lg6mvkuusfs div { box-sizing: content-box; }
    .display-class{
        display: none;
    }
    </style>
@endsection

@section('link')
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('sidebar')
  @include('layouts.partials.sidebar')
@endsection

@section('content')


<div class="card">
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">Add Quotation</h4>
        </div>
    </div>
    <div class="card-body">
        
            <div class="row">
                <div class="col-md-3">                      
                    <div class="form-group">
                        <label>Customer Name *</label>
                        <select id="cu" name="customerName" class="selectpicker form-control" data-style="py-0">
                            @foreach ($customers as $customer)
                            <option value={{$customer->id}}>{{$customer->name}}</option>
                            @endforeach
                        </select>
                        
                        <div class="help-block with-errors"></div>
                    </div>
                </div>    
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Quotation date *</label>
                        <input type="date" class="form-control" placeholder="Enter Code" data-errors="Please Enter Code." required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div> 
                <div class="col-md-6"> 
                    <div class="form-group">
                        <label>Reference No *</label>
                        <input type="text" class="form-control" placeholder="Enter Name" data-errors="Please Enter Name." required>
                    </div>
                </div> 
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label id>Product Code*</label>
                        <input type="text" id="test" class="form-control" placeholder="Enter product code" data-errors="Please Enter Price." >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <table id="product-table" class="table  .table-responsive-md">
                        <thead>
                           <tr class="table-head">
                              <th scope="col">Product</th>
                              <th scope="col">Unit Price</th>
                              <th scope="col">Stock</th>
                              <th scope="col">Qty</th>
                              <th scope="col">sub total</th>
                              <th scope="col">action</th>
                           </tr>
                        </thead>
                        <tbody>
                          
                        </tbody>
                     </table>
                </div>
                
                <div class="col-md-12">                                    
                    <div class="row justify-content-end mb-3">
                        <div class="col-md-3">
                            <table class="table  table-hover .table-responsive-md">
                                <tbody>
                                    <tr>
                                        <td class="table-head">Before Tax</td>
                                        <td id="beforetax">0</td>
                                     </tr>
                                   <tr>
                                      <td class="table-head">Order Tax</td>
                                      <td id="tax">0</td>
                                   </tr>
                                   <tr>
                                    <td class="table-head">Discount</td>
                                    <td id="discount">0</td>
                                 </tr>
                                 <tr>
                                    <td class="table-head">Grand Total</td>
                                    <td id="total">0</td>
                                 </tr>
                                </tbody>
                             </table>
                        </div>
                        
                     </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Order Tax</label>
                        <input type="text" value="0" class="form-control" placeholder="Enter Code" data-errors="Please Enter Code."  disabled>
                        <div class="help-block with-errors"></div>
                    </div>
                </div> 
                <div class="col-md-3"> 
                    <div class="form-group">
                        <label>Discount</label>
                        <input id="discountInput" type="text" class="form-control" placeholder="0" data-errors="" >
                    </div>
                </div> 
                <div class="col-md-6">                      
                    <div class="form-group">
                        <label>Status</label>
                        <select name="type" class="selectpicker form-control" data-style="py-0">
                            <option>CREM01</option>
                            <option>UM01</option>
                            <option>SEM01</option>
                        </select>
                        
                        <div class="help-block with-errors"></div>
                    </div>
                </div>    
            


               
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Description / Product Details</label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                </div>
            </div>        
            <div id="loadingId" class="display-class loadingio-spinner-ripple-epk6u42ktr"><div class="ldio-lg6mvkuusfs">
                <div></div><div></div>
                </div></div>                    
            <button type="submit" id="addOrder" class="btn btn-primary mr-2">create Quotation</button>
            <button type="reset" class="btn btn-danger">Reset</button>
    </div>
</div>


@endsection

