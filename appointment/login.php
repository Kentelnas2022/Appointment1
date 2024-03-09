<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

     
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/login.css" rel="stylesheet" />
</head>
<body>
    
    <div class="auth-wrapper d-flex my-5 py-5">
        <div class="col-md-4 m-auto">
            <div class="wrapper shadow p-3 mb-5 bg-body-tertiary  rounded">
                <div class="form-signup">
                    <p class="h1 text-center text-white p-4 ">Sign up</p>
                </div>
                <div class=" px-4 pt-4">
                    <form class="container">
                    <p class="h1 text-center p-4 font-weight-bold  text-white">Login</p>
                    <form class="container">
                     <div class=" mb-5">
                        <label for="email" class="form-text form-label"></label>
                        <input type="text" placeholder="Email:" class="form-control  form-control-lg" id="email" name="email" />
                     </div>
    
                     <div class=" mb-5">
                        <label for="password" class="form-text form-label"></label>
                        <input type="password"  class="form-control form-control-lg" placeholder="Password" id="password" name="password" />
                     </div>
    
                     <div class="mb-5 d-flex justify-content-between">
                        <a class="main-text text-white" href="#" > Forgot Password?</a>
                     </div>
    
                     <div class="mt-5 mb-5 d-grid ">
                        <button type="submit" class="btn btn-block btn-light form-control form-control-lg">Login</button>
                     </div>
                    </form>
                </div>
            </div>
        </div>
        </div>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>