<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;

class TokoController extends Controller
{
    public function index(){
        return view('praktikum/index');
    }

    public function detail(){
        return view('praktikum/detail');
    }

    public function about(){
        return view('praktikum/about');
    }

    public function admin(){
        $products = Product::all();
        return view('praktikum/admin', compact('products'));
    }

    public function create(){
        return view('praktikum/create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        Product::create($request->all());
        return redirect()->route('produk.admin')->with('success', 'Product created successfully');
    }

    public function edit(Product $product){
        return view('praktikum/edit', compact('product'));
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('produk.admin')->with('success', 'Product deleted successfully');
    }

    public function update(Request $request, Product $product){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        $product->update($request->all());
        return redirect()->route('produk.admin')->with('success', 'Product updated successfully');
    }

    public function customers(){
        $customers = Customer::all();
        return view('praktikum/customers', compact('customers'));
    }

    public function tambah(){
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
