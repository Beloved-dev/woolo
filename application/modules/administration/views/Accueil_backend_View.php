<!DOCTYPE html>
  <html lang="en">
  <head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Login</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="<?= base_url() ?>/templateBackEnd/images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url() ?>/templateBackEnd/css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="<?= base_url() ?>/templateBackEnd/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="<?= base_url() ?>/templateBackEnd/css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="<?= base_url() ?>/templateBackEnd/css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>/templateBackEnd/css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="<?= base_url() ?>/templateBackEnd/css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="<?= base_url() ?>/templateBackEnd/css/custom.css" />
    <!-- calendar file css -->
    <link rel="stylesheet" href="<?= base_url() ?>/templateBackEnd/js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="inner_page login">
    <div class="full_container">
     <div class="container">
      <div class="center verticle_center full_height">
       <div class="login_section">
        <div class="logo_login">
         <div class="center">
          <img width="100" src="<?= base_url() ?>/templateBackEnd/images/WOOLO_Web.png" alt="#" />
        </div>
        <div class="center">
          <h1 class="text-light">LOGIN</h1>
        </div>
      </div>
      <div class="login_form">
      <form action="<?= base_url('Login/do_login') ?>" method="POST" id="Myform">
                    <div class="form-group">
                      <label><strong>User name</strong></label>
                      <input type="text" autofocus="" class="form-control" name="inputUsername" id="inputUsername">
                    </div>
                    <div class="form-group">
                      <label><strong >Password</strong></label>
                      <input type="password" id="inputPassword" class="form-control" name="inputPassword">
                    </div>
                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                      <div class="form-group">
                        <div class="form-check ml-2">
                          <input class="form-check-input" type="checkbox" onclick="show_password()" id="basic_checkbox_1">
                          <label class="form-check-label" for="basic_checkbox_1">Show the password</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <a href="<?=base_url('Recover_pwd')?>" style="color: blue;">Forgot your password ?</a>
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="button" onclick="login()" id="sign" class="btn btn-success btn-block">CONNEXION</button>
                    </div>
                  </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- jQuery -->
              <script src="<?= base_url() ?>/templateBackEnd/js/jquery.min.js"></script>
              <script src="<?= base_url() ?>/templateBackEnd/js/popper.min.js"></script>
              <script src="<?= base_url() ?>/templateBackEnd/js/bootstrap.min.js"></script>
              <!-- wow animation -->
              <script src="<?= base_url() ?>/templateBackEnd/js/animate.js"></script>
              <!-- select country -->
              <script src="<?= base_url() ?>/templateBackEnd/js/bootstrap-select.js"></script>
              <!-- nice scrollbar -->
              <script src="<?= base_url() ?>/templateBackEnd/js/perfect-scrollbar.min.js"></script>
              <script>
               var ps = new PerfectScrollbar('#sidebar');
             </script>
             <!-- custom js -->
             <script src="j<?= base_url() ?>/templateBackEnd/s/custom.js"></script>
           </body>

           <script type="text/javascript">

        // $(document).ready(function(){ 
        //   $('#message').delay(5000).hide('slow');
        // });


        function show_password() {
          var x = document.getElementById("inputPassword");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }


      </script>

          </html>