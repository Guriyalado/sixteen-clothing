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
    @include('user.header')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
  
 <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
 



 @if(session()->has('message'))
  <div class="alert alert-success">

  <button type="button" class="close" data-dismiss="alert"></button>
  {{session()->get('message')}}

  </div>

  @endif
  

 <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="{{url('products')}}">view all products <i class="fa fa-angle-right"></i></a>
            </div>
            <form  action="{{url('search')}}" method="get"  class="form-inline" style="float:right;">
              @csrf
              <input type="search" name="search" value="search">
              <input type="submit" name="submit" value="search" class="btn btn-success">

             </form>
          </div>

          @foreach($data as $product)

          <div class="col-md-2">

            <div class="product-item">
             <img src="productimage/{{$product->image}}" style=width=" 200 "  height="200">
              <div class="down-content">
               <div><b style="color:red;"> {{$product->title}}</b></div>
               <div><strong> Rs.{{$product->price}}</strong></div>
               <div> {{$product->description}}</div>

                <form action="{{url('addcart',$product->id)}}" method="post">
                 @csrf


                  <input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">

                  <br>


                 <input class="btn btn-primary" type="submit" value="Add Cart">

               </form>
                </div>
            </div>
          </div>
         @endforeach
        
         
    </div>
     @include('user.footer')
    
    


    <!-- Bootstrap core JavaScript -->
  @include('user.script')

  </body>

</html>