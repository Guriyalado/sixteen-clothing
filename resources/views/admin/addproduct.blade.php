<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add product</title>
  
    
  
   <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
input[type=text], select, textarea {
  width: 100%;
  padding: 20px;
  border: 2px solid #ccc;
  border-radius:2px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize:vertical;
  color: black;
  font-size:+6;
}

.submit{
  background-color:green;
  color:green;
  padding: 12px 20px;
  border: none;
  border-radius:2px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 4px;
  background-color:cyan;
  padding: 10px;
  width:500px;
  margin-left:200px;
  font-size:25px;
  color: black;

}
</style>
</head>
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
         
  
  <!-- Trigger the modal with a button -->
  <div class="container">
        
            <form action="{{url('uploaddata')}}" method="POST" enctype="multipart/form-data">
              @csrf
         <center>    <b> Add Product </b></center>
            <br>
            <level>Title</level>
            
            <input type="text" name="title" placeholder="Enter the title name" required><br>
             <level>Price</level><br>
            <input type="text" name="price" placeholder="Enter the price" required><br>
             <level>Quantity</level><br>
            <input type="text" name="quantity" placeholder="Enter the quantity" required><br>
             <level>Description</level><br>
            <input type="text" name="description" placeholder="Enter the description" required>
            <br> <level>Image</level><br>
            <input type="file" name="file" required><br><br>
            <button type="submit" class="btn btn-success" name="save">
              <h1>Submit</h1></button>
            </form>
        </div>
       
      
      </div>
      
    </div>
  </div>
  
</div>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.adminfooter')
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





