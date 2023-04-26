@extends('layouts.custom')


@section('link')
     <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
     <script>
        JsBarcode(".barcode").init();
     </script>
     <script>
        let button = document.getElementById("printBarCode");

        
        button.addEventListener("click", function(){
           let print = document.getElementById("print");
          let printContent = print.innerHTML
          let originalContent =   document.body.innerHTML 

          document.body.innerHTML = printContent;

          window.print()

            document.body.innerHTML = originalContent
        })
     </script>
@endsection

@section('sidebar')
  @include('layouts.partials.sidebar')
@endsection

@section('content')
<div class="col-lg-12">
<div class="row">
    <div>  
        <div id="print" style="display: inline-block">
        <svg class="barcode"
        jsbarcode-value="{{$product->code}}"
        jsbarcode-textmargin="0"
        displayValue: false
        jsbarcode-fontoptions="bold">
        
        </svg>
        </div>
        <input type="submit" id="printBarCode"   class="btn btn-outline-secondary" value="print barcode">
    </div>
    <div class="container-fluid">
        <table class="table">
            
            <tbody>
              <tr>
                <th scope="row">name</th>
                <td>{{$product->name}}</td>
              </tr>
              <tr>
                <th scope="row">code</th>
                <td colspan="2">{{$product->code}}</td>
              </tr>
              <tr>
                <th scope="row">category</th>
                <td>{{$product->category}}</td>
              
              </tr>
              <tr>
                <th scope="row">price</th>
                <td colspan="2">Tsh {{$product->price}}</td>
              </tr>
              <tr>
                <th scope="row">cost</th>
                <td colspan="2">Tsh {{$product->cost}}</td>
              </tr>
              <tr>
                <th scope="row">description</th>
                <td colspan="2">{{$product->desc}}</td>
              </tr>
              <tr>
                <th scope="row">quantity</th>
                <td colspan="2">{{$product->quantity}}</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>

</div>
    
@endsection