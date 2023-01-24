<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items=Admin::all();

        return view('admin.index',['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            //get image
            $img=$request->image;

            //rename image

            $reImg=time().'.'.$img->getClientOriginalExtension();
            //save image to path

            $dest=public_path('/images');

            //save the renamed image
            $img->move($dest,$reImg);
            

        }

        //
        $item=new Admin();
        $item->item_name=request('item_name');
        $item->price=$request->price;
        $item->description=$request->description;
        $item->image_alt=$request->image_alt;
        $item->image=$reImg;

        $item->save();

        return redirect('/admin');


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
        $item=Admin::findOrFail($id);

        return view('admin.show',['item'=>$item]);
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
        $entry=Admin::findOrFail($id);
        return view('admin.edit',['entry'=>$entry]);
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
        //
        $entry=Admin::findOrFail($id);
        $entry->item_name=$request->item_name;
        $entry->price=$request->price;
        $entry->description=$request->description;
        $entry->image_alt=$request->image_alt;
        $entry->image=$request->image;
        $entry->update();
        return redirect('/admin')->with('update_msg','record updated successfully');

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
        $item=Admin::findOrFail($id);
        $item->delete();

        return redirect('/admin');
    }
}
