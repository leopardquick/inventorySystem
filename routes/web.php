<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderController;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//pos route 
Route::get('/quotation',function(){

    $products = Product::all();
    $customers = Customer::all();
    return view('quotation.create', [
        "products" => $products ,
        "customers" => $customers,
        "prod" => json_encode($products)
    ]);
})->middleware(['auth','verified'])->name('quotation.create');
Route::get('/quotation/list',[OrderController::class,"index"])->middleware(['auth','verified'])->name('quotation.view');

Route::middleware(['auth','verified'])->group(function(){

    Route::get('/quotation/print/{order}',[OrderController::class,"printQuotation"])->name("quotation.print");
    Route::get('/quotation/show/{order}',[OrderController::class,"show"])->name("quotation.show");
});


Route::resource('product', ProductController::class)
    ->only(['index', 'store','create' , 'show' , 'edit' , 'update', 'destroy'])
    ->middleware(['auth', 'verified']);





 Route::get('/byCode/{productCode}',[ProductController::class,'getByCode'])->middleware(['auth','verified']);


    Route::resource('category', CategoryController::class)
    ->only(['index', 'store','create' ,  'destroy'])
    ->middleware(['auth', 'verified']);

    
//route for product 

// Route::middleware(['auth','verified'])->group(function(){
//     Route::get('/products',[ProductController::class , 'index'])->name('product.index');
//     Route::get('/product',[ProductController::class , 'create'])->name('product.create');
//     Route::post('/product',[ProductController::class , 'store'])->name('product.store');
    
    
// });


Route::middleware(['auth','verified'])->group(function(){

    Route::get("/customers",[CustomerController::class,'create'])->name('customer.create');
    Route::get("/customerList", [CustomerController::class,'show'])->name('customer.show');
    Route::get('/custome/{customer}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::post("/customer", [CustomerController::class,'store'])->name('customer.store');
    Route::POST("/custo/{customer}", [CustomerController::class,'update'])->name('customer.update');

});


//quotation route

Route::middleware(['auth','verified'])->group(function(){
    Route::POST("quotation", [OrderController::class,'store'])->name('order.store');

});


//invoice route
Route::middleware(['auth','verified'])->group(function(){
    Route::POST("invoice", [InvoiceController::class,'store'])->name('invoice.store');

});

//endof invoice route




Route::get("/customer/{customer}",function(Customer $customer){
    ddd($customer);
});
   
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
