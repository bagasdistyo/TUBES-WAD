<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index()
    {
        $products=Product::orderBy('id','desc')->get();
        return view('ListCar-Bagas', compact('products'));
    }

    public function create()
    {
        return view('Add-Bagas');
    }

    public function store(Request $request)
    {   
        $user = User::find(Auth::id());
        Product::create([
            'name' => $request -> name,
            'user_id' => $request->user_id,
            'Jenis' => $request -> Jenis,
            'warna_dasar' => $request -> warna_dasar,
            'warna_insole' => $request -> warna_insole,
            'warna_tali' => $request -> warna_tali,
            'warna_lidah' => $request -> warna_lidah,
            'warna_midsole' => $request -> warna_midsole,
        ]);

        return redirect('/product');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        
        return view('product.edit', compact('product')); 
    }

    public function update(Request $request, $id)
    {
        $product = product::find($id);

        Product::find($id)->update([
            'nama' => $request -> name,
            'harga' => $request -> price,
            'gambar' => $imgName
        ]);

        return redirect('/product');
    }

    public function destroy($id)
    {   

        Product::find($id)->delete();

        return redirect('/product');  
    }
    public function MyCar()
    {
        return view('ListCar-Bagas');
    }
    public function feedback()
    {
        return view('feedback');
    }
}
