<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home page</title>
    <!-- plugins:css -->
    @include('admin.admincss')
  </head>
  <body>
     <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
  
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
    
        <!-- partial:partials/_navbar.html -->
       @include('admin.adminnav')
        <!-- partial -->
         @include('admin.adminbody')
         <div style="padding-bottom:20px; width:200%;" class="container-fluid page-body-wrapper">
          <div class="container" aligen="center">
            @if(session()->has('message'))
            <div class="alert alert-sucess">
              <button type="button" class="close" data-dismiss="alert"></button>
              {{session()->get('message')}}
            </div>
            @endif
      
   <table>
              <tr style="background-color:red;">
      <th style="padding:10px;">Customer Name</th>
                <th style="padding:10px;">Phone</th>
                <th style="padding:10px;">Address</th>
                <th style="padding:10px;">Product Title</th>
                <th style="padding:10px;">Price</th>
                <th style="padding:10px;">Quantity</th>
                <th style="padding:10px;">Total Prce</th>
                <th style="padding:10px;">Status</th>
                <th style="padding:10px;">Action</th>
              </tr>
              @foreach($order as $orders)
              <tr  align="center" style="background-color:black;">
  <td style="padding:10px;" >{{$orders->name}}</td>
  <td style="padding:10px;">{{$orders->phone}}</td>
  <td style="padding:10px;">{{$orders->address}}</td>
  <td style="padding:10px;">{{$orders->price}}</td>
  <td style="padding:10px;">{{$orders->quantity}}</td>
  <td style="padding:10px;">{{$orders->product_name}}</td>
  <td style="padding:10px;">Rs.{{$orders->price*$orders->quantity}}</td>
  <td style="padding:20px;">{{$orders->status}}</td>
  <td style="padding:20px;">
  <a class="btn btn-success" href="{{url('updatestatus',$orders->id)}}">Deliverd</a>

  </td>
              </tr>
              @endforeach
            </table>


          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <!--  @include('admin.adminfooter') -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
   @include('admin.adminscript')
    <!-- End custom js for this page -->
  </body>
</html>