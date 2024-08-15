<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Login</title>

  <link rel="stylesheet" href="dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="dist/css/demo.css">
  <link rel="stylesheet" href="dist/css/style.css">
   <link rel="stylesheet" href="sweetalert/sweetalert2.min.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div> <br>    
               <div class="text-center">
               <h6  class="d-block text-primary"><b>LOGIN APLIKASI <br>MIS AL-FATAH FIDITAN<br>KOTA TUAL</b></h6>
               </div>  
              <div class="card-body">
                <form method="POST" action="cek_login" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="Username" class="d-block text-primary">Username</label>
                    <input id="Username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                     Masukan Username Dengan Benar
                    </div>
                  </div>

                  <div class="form-group mb-5">
                    <label for="password" class="d-block text-primary">Password </label>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                      <div class="invalid-feedback">
                      Masukan Password Dengan Benar
                    </div>
                  </div>

                  <div class="form-group">
                    <button name="login" class="btn btn-primary btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="dist/modules/jquery.min.js"></script>
  <script src="dist/modules/popper.js"></script>
  <script src="dist/modules/tooltip.js"></script>
  <script src="dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="dist/modules/moment.min.js"></script>
  <script src="dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
  <script src="dist/js/sa-functions.js"></script>
  
  <script src="dist/js/scripts.js"></script>
  <script src="dist/js/custom.js"></script>
  <script src="dist/js/demo.js"></script>
   <script src="sweetalert/sweetalert2.min.js"></script>
  <?php 
 
   if (isset($_SESSION['login'])) { ?>


    <script>
        Swal.fire({
          icon: 'error',
          title: "<?php echo $_SESSION['login'] ?>"
          })
    </script>

     <?php 
     unset($_SESSION['login']);
   }

   ?>
</body>
</html>