<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::all();
        return view('content.index')->with('products',$products);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'product_name' => 'required|min:3|max:25',
            'price' => 'required|numeric|min:10000|max:10000000',
            'stock' => 'required|numeric|min:1|max:100',
            'image_url' => 'required|mimes:jpg,jpeg,png,jfif,JPG,JPEG,PNG,JFIF',
        ],[
            'product_name.required' => 'nama product yang akan di inputkan wajib di isi',
            'product_name.min' => 'nama product minimal 3 huruf',
            'product_name.max' => 'nama product maximal 25 huruf',
            'price.required' => 'harga wajib di isi',
            'price.numeric' => 'harga wajib ber format number',
            'price.min' => 'harga product minimal 10000',
            'price.max' => 'harga product maximal 10000000',
            'stock.required' => 'stock wajib di isi',
            'stock.numeric' => 'stock harus ber format number',
            'stock.min' => 'stock minimal yang akan di masukan adalah 1',
            'stock.max' => 'stock maximal yang akan di masukan minimal 100',
            'image_url.mimes' => 'format file yang anda kirim salah',
            'image_url.required' => 'wajib menambahkan gambar',

        ]);

        $foto_file = $request->file('image_url');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis').'.'.$foto_ekstensi;
        $foto_file->move(public_path('foto'),$foto_nama);

        $data = [
            'product_name' => $request->input('product_name'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'image_url' => $foto_nama,
            'description' => $request->input('description')
        ];

        if($request->input('is_active')){
            $data['is_active'] =  $request->input('is_active');
        }

        product::create($data);

        return redirect('products')->with('suksescreate','berhasil menambahkan product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = product::find($id);
        return view('content.show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = product::find($id);
        return view('content.edit')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_name' => 'required|min:3|max:25',
            'price' => 'required|numeric|min:10000|max:10000000',
            'stock' => 'required|numeric|min:1|max:100',
            'image_url' => 'mimes:jpg,jpeg,png,jfif,JPG,JPEG,PNG,JFIF',
        ],[
            'product_name.required' => 'nama product yang akan di inputkan wajib di isi',
            'product_name.min' => 'nama product minimal 3 huruf',
            'product_name.max' => 'nama product maximal 25 huruf',
            'price.required' => 'harga wajib di isi',
            'price.numeric' => 'harga wajib ber format number',
            'price.min' => 'harga product minimal 10000',
            'price.max' => 'harga product maximal 10000000',
            'stock.required' => 'stock wajib di isi',
            'stock.numeric' => 'stock harus ber format number',
            'stock.min' => 'stock minimal yang akan di masukan adalah 1',
            'stock.max' => 'stock maximal yang akan di masukan minimal 100',
            'image_url.mimes' => 'format file yang anda kirim salah',

        ]);

        $data = [
            'product_name' => $request->input('product_name'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'description' => $request->input('description')
        ];

        if($request->hasFile('image_url')){
            $foto_file = $request->file('image_url');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis').'.'.$foto_ekstensi;
        $foto_file->move(public_path('foto'),$foto_nama);

        $foto = product::find($id);
        File::delete(public_path('foto'.'/'.$foto->image_url));
    $data['image_url'] = $foto_nama;
        }

        if($request->input('is_active')){
            $data['is_active'] =  $request->input('is_active');
        }

        product::find($id)->update($data);
        return redirect('products')->with('suksesupdate','berhasil melakukan update ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = product::find($id);
        File::delete(public_path('foto').'/'.$data->image_url);

        product::find($id)->delete();
        return redirect('/products')->with('sukseshapus','berhasil menghapus'.$data->product_name);
    }


    public function cari(Request $request){
        // return $request->input();
        $cari = $request->input('cari');
        $products = product::where('product_name','like','%'.$cari.'%')->get();

        return view('content.index')->with('products',$products);
    }


    public function statistik(){
        $product = product::all();
        $countprod = count(product::all());
        $active = count(product::where('is_active','active')->get());
        $nonactive = count(product::where('is_active','nonactive')->get());
        $active = count(product::where('is_active','active')->get());

        $allvalue = 0;
        foreach($product as $price){
            $allvalue += $price->price;
        }

        $allitem = 0;
        foreach($product as $price){
            $allitem += $price->stock;
        }

        return view('content.statistik')->with(['countprod'=>$countprod,'active'=>$active,'nonactive'=>$nonactive,'allvalue'=>$allvalue,'allitem'=>$allitem]);
    }
}
