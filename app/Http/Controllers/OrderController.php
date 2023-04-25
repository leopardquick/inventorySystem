<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("quotation.view",[
            "orders" => Order::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $order = new Order() ;

        

        $amount = $request->input("amount");
        $customer  = $request->input("customer");
        $discount = $request->input("discount");
        $userId =   $request->user()->id ;
        $date = date("Y-m-d H:i:s");
        $products = $request->input("products");

        $order->user_id = $userId ;
        $order->orderDate = $date ;
        $order->customerName = $customer;
        $order->discount = $discount;
        $order->status = "created" ;
        $order->amount = $amount ;

        $order->save();

        foreach($products as $value) {
            $orderProduct = new OrderProduct();
            $orderProduct->orderId = $order->id ;
            $orderProduct->productId = $value["id"] ;
            $orderProduct->quantity= $value["quantity"] ;
            $orderProduct->price = $value["price"] ;
            $orderProduct->save();
            $this->updateProductQuantity($value["id"],$value["quantity"]);
          }

      //  return [$amount , $customer , $discount , $userId , $date ,$order->id ];

      return response()->json([
        'amount' => $amount,
        'customer' => $customer,
        'discount' => $discount,
        'userId' => $userId,
        'date' => $date,
        'orderId' => $order->id,
        'nadir' => "nadir"
    ]);
    }

    function updateProductQuantity($id , $quantity){
        $product = Product::find($id);
        $product->quantity = $product->quantity - $quantity ;
        $product->update();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //

     // $products = OrderProduct::where("orderId","=" ,$order->id)->get();

      $products = DB::table("order_products")
                            ->join("products","order_products.productId","=","products.id")
                            ->select("order_products.orderId","order_products.quantity","order_products.price","products.name","products.logo","code")
                            ->where("order_products.orderId","=",$order->id)
                            ->get();
      
    $data = [
        "products" => $products,
        "order" => $order

    ];

    
   
     
      return view("quotation.show",$data);
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function printQuotation(Order $order){
        $products = DB::table("order_products")
        ->join("products","order_products.productId","=","products.id")
        ->select("order_products.orderId","order_products.quantity","order_products.price","products.name","products.logo","code")
        ->where("order_products.orderId","=",$order->id)
        ->get();

            $data = [
            "products" => $products,
            "order" => $order

            ];
        $pdf = Pdf::loadView('pdf.quotation',$data);
        //return $pdf->download('quotation.pdf');
       return  $pdf->stream("quotation.pdf",array("Attachment" => false));

    }
}
