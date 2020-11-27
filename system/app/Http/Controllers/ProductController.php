<?php 

namespace App\Http\Controllers;
use App\Models\Product;

class ProductController extends Controller {
	function index (){
		$data['list_product'] = Product::all();
		return view('product.index',$data);
	}
	function create (){
		return view('product.create');
	}
	function store (){
		$product = new Product;
		$product->nama = request('nama') ;
		$product->stock = request('stock') ;
		$product->harga = request('harga') ;
		$product->berat = request('berat') ;
		$product->deskripsi = request('deskripsi');
		$product-> save();

		return redirect('product')->with('success','Data Berhasil Ditambahkan');
	}
	function show (product $product){
		$data['product'] = $product;
		return view('product.show',$data);

	}
	function edit (product $product){
		$data['product'] = $product;
		return view('product.edit',$data);
	}
	function update (product $product){		
		$product->nama = request('nama') ;
		$product->stock = request('stock') ;
		$product->harga = request('harga') ;
		$product->berat = request('berat') ;
		$product->deskripsi = request('deskripsi');
		$product-> save();

		return redirect('product')->with('success','Data Berhasil Diubah');

	}
	function destroy (product $product){
		$product->delete();
	return redirect('product')->with('danger','Data Berhasil di Hapus');

	}
	
	

}