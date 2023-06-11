<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $data = Customer::get();
        return view('allcustomer', ['data' => $data]);
        //return $data;
    }
    public function addcustomer()
    {
        return view('newcustomer');
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->get('name');
        $customer->address = $request->get('address');
        $customer->mobile = $request->get('mobile');
        $customer->date = $request->get('date');
        $customer->parts = $request->get('parts');
        $customer->save();
        return redirect()->back()->with('success', "Customer Added Succesfully");
    }

    public function editCustomer($id)
    {
        $data = Customer::whereId($id)->first();
        return view('editCustomer', ['data' => $data]);
    }

    public function updateCustomer(Request $request)
    {
        $name = $request->name;
        $address = $request->address;
        $mobile = $request->mobile;
        $date = $request->date;
        $parts = $request->parts;

        Customer::whereId($request->id)->update([
            'name' => $name,
            'address' => $address,
            'mobile' => $mobile,
            'date' => $date,
            'parts' => $parts,
        ]);
        return redirect()->back()->with("success", "Customer Update Successfully");
    }

    public function deleteCustomer($id)
    {
        Customer::whereId($id)->delete();
        return redirect()->back()->with("success", "Customer Deleted Successfully");
    }
}
