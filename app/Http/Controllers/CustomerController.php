<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //


    public function create(){
        return view("customer.create");
    }

    public function store(Request $request){
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            
        ]);

       

 
        $request->user()->customers()->create($validated);
 
        return redirect(route('customer.show'));
    }


    public function show(){

        $customers = Customer::all();
        return view("customer.show", [
            "customers" => $customers
        ]);
    }

    public function edit(Customer $customer){
        return view("customer.edit", [
            "customer" => $customer
        ]);
    }

    public function update(Request $request , Customer $customer){

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            
        ]);

        $customer->update($validated);

        return redirect(route('customer.show'));
    }
}
