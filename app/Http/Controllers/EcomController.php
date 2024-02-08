<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class EcomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ecoms= Product::all();
       return view('admin.pages.product.index',compact('ecoms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/pages/product/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ecom=new Product();
        $ecom->name=$request->name;
        $ecom->price=$request->price;
        $ecom->description=$request->desc;
        $ecom->code=$request->code;
        $ecom->phone=$request->phone;
        //handling image
        $image=$request->img;
       
        $imageextension=$image->getClientOriginalExtension();
        $imgfilename=time().".".$imageextension;
        $image->move(('images'),$imgfilename);
        $ecom->image_filename=$imgfilename;
        $ecom->save();
        return redirect('/showproduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('admin.pages.product.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ecom=Product::find($id);
        
        return view('admin.pages.product.edit',compact('ecom'));
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
        $ecom=Product::find($id);
        if($request->img){
            $request->validate([
                'img'=>'image|mimes:,png,jpeg,webp,gif|max:5000',
                
            ]);
            $image=$request->img;
            $imageextension=$image->getClientOriginalExtension();
            $imgfilename=time().".".$imageextension;
            $image->move(('images'),$imgfilename);
            $ecom->image_filename=$imgfilename;
            $ecom->save();
            return redirect('/showproduct');
        }
        $ecom->name=$request->name;
        $ecom->price=$request->price;
        $ecom->description=$request->desc;
        $ecom->code=$request->code;
        $ecom->phone=$request->phone;
        $ecom->save();
        return redirect('/showproduct');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ecom=Product::find($id);
        $ecom->delete($id);
        return redirect('/showproduct');
    }
}
