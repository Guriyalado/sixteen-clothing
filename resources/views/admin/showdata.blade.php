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
      
  <table style="height:auto; width:auto;">
    <tr align="center" style="background-color:green;">
      <th style="padding:30px">Id</th>
      <th style="padding:30px">Title</th>
      <th style="padding:30px">Price</th>
      <th style="padding:30px">Quantity</th>
      <th style="padding:30px">Descreption</th>
      <th style="padding:30px">Image</th>
      <th style="padding:30px">Edit</th>
      <th style="padding:30px">Delete</th>
    </tr>
    @foreach($data as $data)
    <tr align="center" style="background-color:black;">
    <td>{{$data->id}}</td>
    <td>{{$data->title}}</td>
    <td>{{$data->price}}</td>
    <td>{{$data->quantity}}</td>
    <td>{{$data->description}}</td>
    <td>
      <img src="productimage/{{$data->image}}" width="100" height="100">
    </td>
    <td><a class="btn btn-success" href="{{url('updatedata/'.$data->id)}}">Update</a></td>
    <td>
      <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="{{url('deletedata/'.$data->id)}}">Delete</a>
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