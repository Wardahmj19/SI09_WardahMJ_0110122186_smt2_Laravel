<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JualController extends Controller
{
    public function customers(){
        $customers = Customer::all();
        return view('praktikum/customers', compact('customers'));
    }

    public function add(){
        return view('praktikum/tambah');
    }

    public function toko(Request $request){
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required'
        ]);
        Customer::create($request->all());
        return redirect()->route('pelanggan.customers')->with('success', 'Customers created successfully');
    }

    public function ubah(Customer $customer){
        return view('praktikum/ubah', compact('customer'));
    }

    public function hapus(Customer $customer){
        $customer->delete();
        return redirect()->route('pelanggan.customers')->with('success', 'Customers deleted successfully');
    }

    public function baru(Request $request, Customer $customer){
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required'
        ]);
        $customer->update($request->all());
        return redirect()->route('pelanggan.customers')->with('success', 'Customers updated successfully');
    }
}
