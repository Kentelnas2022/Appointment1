<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/general.css" rel="stylesheet" />
</head>
<body>
     

     <main>
      <div class="container-sm">
        <div class="row">
          <div class=".col">
            <div class="card">
                <div class="mb-5 pt-5  text-center"><a href="#">
                  <img class="icon" alt="" src="img/icon.png" />
                 </a></div>
                <div class="mb-5 text-center">
                  <h4 class="heading">Hi Kent Zorel Elnas</h4>
                </div>          
               <div class="nav">
                <ul class="list-unstyled pl-5">
                  <li class="pt-5 mb-2 pl-5 text-center"><a class="text-white" href="#">Dashboard</a></li>
                  <li class="pt-5 mb-2 pl-5 text-center"><a class="text-white" href="#">Appointment</a></li>
                  <li class="pt-5 mb-2 pl-5 text-center"><a class="text-white" href="#">Settings</a></li>
                  <li class="pt-5 mb-2 pl-5 text-center"><a class="text-white" href="#">Logout</a></li>
                </ul>
               </div>
            </div>
          </div>

           <div class="container">
            <div class="col-md-7">
              <div class="text-center pt-5 mt-5 pl-5 ">
                <a href="#">
                  <img class="icon" alt="" src="img/icon.png" />
                 </a>
              </div>  
              <div class="text-center mt-5 pl-5 ">
                <button  type="submit" class="btn  btn-lg">Change Profile</button>
               </div>
               <form class="form-password pl-5">
                <div class="mb-5 pt-5 my-3 col-auto pl-5">
                    <label for="password" class="form-label">New  Password:</label>
                    <input type="password" class="form-control form-control-lg" name="password" id="password" />
                </div>
                <div class="mb-5 mt-5 pl-5 col-auto">  
                    <label for="password_confirmation" class="form-label">Confirm Password:</label>
                    <input type="password" class="form-control form-control-lg" name="password_confirmation"
                        id="password_confirmation" />
                </div>
                <div class="mb-5 pt-5  text-right">
                  <button type="submit" class="btn  btn-lg">Back</button>
                  <button type="submit" class="btn  btn-lg">Done</button>      
                </div>
            </form>
             </div>
            </div>
           </div>
     </main>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>