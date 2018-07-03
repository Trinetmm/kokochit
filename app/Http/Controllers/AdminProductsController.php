<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
use App\Tag;

use Auth;
use Image;

use App\ProductPhoto;

class AdminProductsController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admins.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $tags = Tag::all();
        return view('admins.products.create', compact('categories', 'brands', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:255',
            'category_id' => 'required',
            'brand_id' => 'required',
            'price' => 'required|numeric',
            'old_price' => 'required|numeric',
            'availability' => 'required',
            'quantity' => 'required|numeric',
            'photos' => 'required',
            'quick_overview' => 'required|string|min:2 max:255',
            'detail' => 'required'
        ]);

       
        if($request->hasFile('photos')):
            $i=0;
            foreach($request->file('photos') as $photo):
                $i+=1;
                $filename = time() . $i . '.' . $photo->getClientOriginalExtension();
                $location = public_path('images/products/' . $filename);
                Image::make($photo)->resize(800,800)->save($location);
                $paths[]=$filename;
            endforeach;
        endif;

       
        $request['admin_id']=Auth::user()->id;
        $product = Product::create($request->all());

        foreach($paths as $path):
            $product->images()->save(new ProductPhoto(['path' => $path]));
        endforeach;
        $product->tags()->sync($request->tags, false);

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

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
