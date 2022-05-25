<!DOCTYPE html>
<html lang="en">

  <head>

   @include('user.usercss')

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{url('products')}}">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('abouts')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('contacts')}}">Contact Us</a>
              </li>
              <li class="nav-item">
                  @if (Route::has('login'))
                
                    @auth

                     <li class="nav-item">
                <a class="nav-link" href="{{url('showcart')}}">
                  <i class="fas fa-shopping-cart"></i>
                Cart[{{$count}}]</a>
              </li>
                       <x-app-layout>
 
                        </x-app-layout>
                    @else
                        <li><a class="nav-link" href="{{ route('login') }}" >Log in</a></li>

                        @if (Route::has('register'))
                           <li> <a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
              
            @endif
            </li>
            </ul>
          </div>
        </div>
      </nav>
       @if(session()->has('message'))
  <div class="alert alert-success">

  <button type="button" class="close" data-dismiss="alert"></button>
  {{session()->get('message')}}

  </div>

  @endif
    </header>
    <div style="padding:100px;" align="center">
     <table >
       <tr style="background-color:gray;">
         <td style="padding:10px;font-size:20px;">Product Name</td>
         <td style="padding:10px;font-size:20px;">Quantity</td>
         <td  style="padding:10px;font-size:20px;">Price</td>
         <td  style="padding:10px;font-size:20px;">Action</td>
         
       </tr>

       <form action="{{url('order')}}" method="post">
        @csrf
       @foreach($cart as $carts)
        <tr style="background-color:black;">

         <td style="padding:10px;color:white;">
    <input type="text" name="productname[]" value=" {{$carts->product_title}}" hidden="">

          {{$carts->product_title}}
        </td>
         <td style="padding:10px;color:white;">

 <input type="text" name="quantity[]" value=" {{$carts->quantity}}" hidden="">
          {{$carts->quantity}}


        </td>
         <td style="padding:10px;color:white;">

           <input type="text" name="price[]" value=" {{$carts->price}}" hidden="">

          {{$carts->price}}

        </td>
        <td style="padding:10px;color:white;">

          <a class="btn btn-danger"  href="{{url('delete',$carts->id)}}">Delete</a>
        </td>  
       </tr>
       @endforeach
     </table>
     <button class="btn btn-success">Confirm Order</button>
     <br>
     <div class="btn btn-danger">
     <a href="{{('paywithrazorpay')}}" >Payment</a>
   </div>
     </form>
     </div>
   
    
   


    <!-- Bootstrap core JavaScript -->
   @include('user.script')


  </body>

</html>
