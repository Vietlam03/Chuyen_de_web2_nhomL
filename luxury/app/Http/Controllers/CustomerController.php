<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::all();
    //   //  $customer = $request->user();
    //     $customer = Customer::find(1);
         return view('customers.index',['customer'=> $customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $customers = $order->customers()->get();
        return view('customer.index', ['order' => $order,'customers' => $customers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Customer $customer)
    {
        // $customer_id = $request->route('customer');

         //$customer = Customer::find($id);
    
       
        return view('customers.edit', ['customer' => $customer]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
        {
            $request->validate([
                'password' =>'required|min:5|max:20',
                'username' => 'required',
                'name' => 'required',
                'phone' =>'required',
                'email' => 'required',
            ]);
        
            $customer->username = $request->username;
            $customer->name = $request->name;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->password = $request->password;
            $customer->email = $request->email;
            $customer->DOB = $request->DOB;
            $customer->gender = $request->gender;
            $customer->save();
        
            $customer = Customer::find(1);

            return redirect()->route('customers.edit', ['customer' => $customer->id]);

            // Passing the customer ID as a query string parameter
            $customer = Customer::find(1);

            return redirect()->route('customers.edit')->with('customer', $customer->id);
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
