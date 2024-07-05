<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('products.product', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_product' => 'required',
                'price' => 'required|integer',
                'stock' => 'required|integer',
                'suplayer_name' => 'required',
                'foto' => 'required|mimes:jpg,jpeg,png,gif,jfif',
            ],
            [
                'nama_product.required' => 'masukkan nama product',
                'price.required' => 'wajib diisi',
                'stock.required' => 'masukkan stock',
                'suplayer_name.required' => 'masukkan suplayer',
                'foto.required' => 'masukkan foto product',
                'foto.mimes' => 'extension hanya boleh jpg,jpeg,png,gif,jfif',
            ]
        );

        $path = $request->file('foto')->store('public/uploads');

        $product = new Product();
        $product->nama_product = $request['nama_product'];
        $product->status = $request['status'];
        $product->price = $request['price'];
        $product->stock = $request['stock'];
        $product->suplayer_name = $request['suplayer_name'];
        $product->foto = basename($path);
        $product->save();

        return redirect('/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama_product' => 'required',
                'price' => 'required',
                'stock' => 'required',
                'suplayer_name' => 'required',
                'foto' => 'mimes:jpg,jpeg,png,gif,jfif',
            ],
            [
                'nama_product.required' => 'masukkan nama product',
                'price.required' => 'wajib diisi',
                'stock.required' => 'masukkan stock',
                'suplayer_name.required' => 'masukkan suplayer',
                'foto.required' => 'masukkan foto product',
                'foto.mimes' => 'extension hanya boleh jpg,jpeg,png,gif,jfif',
            ]
        );

        if ($request->foto){
            if ($request->foto_lama){
                storage::delete($request->foto_lama);
            }
            $path = $request->file('foto')->store('public/uploads');
        } else {
            $path = $request->foto_lama;
        }

        $product = new Product();
        $product->nama_product = $request['nama_product'];
        $product->status = $request['status'];
        $product->price = $request['price'];
        $product->stock = $request['stock'];
        $product->suplayer_name = $request['suplayer_name'];
        $product->foto = basename($path);
        $product->save();

        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy('id', $id);
        return redirect('/product');
    }
}
