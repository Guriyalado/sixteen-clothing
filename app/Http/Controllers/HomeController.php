<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Cart;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirect()

    {
         $usertype=Auth::user()->usertype;
         if($usertype=='1')
         {
            return view('admin.adminhome');

         }

         else{
             $data=Product::paginate(6);
             
        return view('user.home',compact('data'));
         }
    }
 public function Products(){
    $data=product::all();
    return view('user.viewall',compact('data'));

 }

public function contact(){
    return view('user.contact');
}
public function about(){
    return view('user.about');
}
    public function search(Request $request){


        $search=$request->search;
        if($search=='')
        {
        $data=product::paginate(6);
        return view('user.home',compact('data'));
        }
       
       $data=product::where('title','Like','%'.$search.'%')->get();
       return view('user.home',compact('data'));
    }

     public function addcart(Request $request,$id)
    {
        if(Auth::id())
        {  
            $user=auth()->user();
            $product=product::find($id);
            $cart=new cart;

            $cart->name=$user->name;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->product_title=$product->title;
            $cart->price=$product->price;
            $cart->quantity= $product->quantity;
            $cart->save();
            return redirect()->back()->with('message','Product Added successfully' );
    }
        
        else{
            return redirect('login');
        }
    }

           public function showcart()
           {   

          $user=auth()->user();
          $cart=cart::where('phone',$user->phone)->get();
         $count=cart::where('phone',$user->phone)->count();
        return view('user.showcart',compact('count','cart'));
           }



 public function deletecart($id)
    {   

        $data=cart::find($id);
        $data->delete();

        return redirect()->back()->with('message','Deleteed successfully');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data=Product::all();
        $data=Product::paginate(6);
        return view('user.home',compact('data'));
    }


     public function confirmorder(Request $request)
    {   
      $user=auth()->user();
      $name=$user->name;
      $phone=$user->phone;
      $address=$user->address;

      foreach($request->productname as $key=>$productname)
      {
        $order=new order;

        $order->product_name=$request->productname[$key];
        $order->price=$request->price[$key];
        $order->quantity=$request->quantity[$key];
        $order->name=$name;
        $order->phone=$phone;
        $order->address=$address;
        $order->status='not delivered';

        $order->save();

      }
      DB::table('carts')->where('phone',$phone)->delete();
      
      return redirect()->back()->with('message','Product Order successfully');
    
    }


    public function Contactus(Request $request)
    {
      $data=new contact;
       
         $data->name=$request->name;
          $data->email=$request->email;

         
          $data->message=$request->message;
         

          
          $data->save();
          return redirect()->back()->with('message','Thanku for contact with me.I will response as soon as possible!.');
        
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
