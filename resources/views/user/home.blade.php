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
  @include('user.body')
  @include('user.footer')
    
    


    <!-- Bootstrap core JavaScript -->
  @include('user.script')

  </body>

</html>
