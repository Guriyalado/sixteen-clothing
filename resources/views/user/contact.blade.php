<!DOCTYPE html>
<html lang="en">

  <head>

    @include('user.usercss')

  <title>contactus</title>

 
  <style>
    .id{
        background-color:white;
        width:100%;
        height: auto;

    }
    .id2{
        width:auto;
        height:auto;
    }
     /* Remove the navbar's default margin-bottom and rounded borders */ 
     /*.navbar {
      margin-bottom: -40px;
      border-radius: 0;
      margin-top: -30px;
      color: white;
            background-color: black;
            font-weight: bold;
            font-size: 20px;
        

       }*/
     /* Add a gray background color and some padding to the footer */
   /*  footer {
      background-color: black;
      padding: 20px;
    }*/
    form{
            
            padding: 60px 70px;
       }
        input[type="text"],input[type="password"],input[type="submit"]
        {
            padding: 15px;
            border-radius: 20px;
            width: 100%;
            margin-top: 5px;
        }
        input[type="submit"]{
            margin-left: 20px;
            color: white;
            background: linear-gradient(45deg,white,blue);
            font-weight: bold;
            font-size: 20px;
        }
</style>
</head>
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
    <br><br>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
  <div class="id">
        <div class="row">
            <div class="col-sm-6" style="margin-left:0%;" >
              <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets6.lottiefiles.com/packages/lf20_7wwm6az7.json"  background="transparent"  speed="1"  style="width: 600px; height: 700px;" hover loop  autoplay></lottie-player>
             
               
            </div>
            <div class="col-sm-6">
                 <div>
                <br><br><br><br>
               <form action="{{url('contactus')}}" method="POST">
                @csrf
               <h1><b>Contact Us</b></h1><br>
               <h4>We have love to hear from you,please drop us a line if you have any query.</h4>
               <hr>
               <div class="form-group">
                <label for="email"><h3><b>Name:</b></h3></label>
                <input type="text" placeholder="Name" class="form-control"  name="name" id="email">
              </div>
              <div class="form-group">
              <label for="email"><h3><b>Email Address:</b></h3></label>
                <input type="text" placeholder="Email Address" class="form-control" name="email" id="email">
              </div>
              <div class="form-group">
                <label for="email"><h3><b>Message:</b></h3></label>
                <textarea type="text" placeholder="Write something..." style="height:100px;"class="form-control" name="message"  id="email">
                </textarea>
              </div>
             <input type="submit" class="btn btn-default">
            </form>
        </div>
       </div>
      </div>





  @include('user.footer')
    
    


    <!-- Bootstrap core JavaScript -->
  @include('user.script')

  </body>

</html>
