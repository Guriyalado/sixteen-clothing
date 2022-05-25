<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
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
    }

     public function add()
    {
        return view('admin.addproduct');
    }

    public function uploadproduct(Request $request)
    {
      $data=new Product;
        $image=$request->file;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->file->move('productimage',$imagename);
       $data->image=$imagename;

         $data->title=$request->title;
          $data->price=$request->price;

         
          $data->quantity=$request->quantity;
         
          $data->description=$request->description;
          
          $data->save();
          return redirect()->back()->with('message','Product Added successfully');
        
        }

           public function show()
       {
        $data = product::all();
        return view('admin.showdata',compact('data'));

        }
        
        public function deleteproduct($id)
        {
            $data=product::find($id);
            $data->delete();
            return redirect()->back()->with('message','Product Deleted successfully');
        }

public function editdata($id)
    {
        $data = product::find($id);
     return view('admin.edits',compact('data'));


    }


                public function updateproduct(Request $request,$id)
            {
                $data=product::find($id);


        $image=$request->file;
        if($image)
        {
        $imagename=time().'.' .$image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);
        $data->image=$imagename;
        }

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->quantity=$request->quantity;
        $data->save();
        return redirect()->back()->with('message','Product Updated successfuly');
            }

public function showorders()
            {
                $order=order::all();
                return view('admin.showorder',compact('order'));
            }
public function updatestatus($id)
        {
            $order=order::find($id);
            $order->status='delivered';
            $order->save();
            return redirect()->back();
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
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
        //
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
