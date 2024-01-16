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
   <title>Home-woolo</title>
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
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>
<body class="dashboard dashboard_1">
   <div class="full_container">
      <div class="inner_container">

        <!-- Sidebar  -->
         
          <?php include VIEWPATH.'include_backend/Menu.php'; ?>
         

         <div id="content">
            <!-- topbar -->

            <?php include VIEWPATH.'include_backend/Header.php'; ?>
            <?php
            //include('Header.php');
            ?>


       <div class="midde_cont">
               <div class="container-fluid">
                  <div class="row column_title">
                     <div class="col-md-12">
                        <div class="page_title">
                           <h2>Accueil / Tableau de bord</h2>
                        </div>
                     </div>
                  </div>
                  <div class="row column1">
                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                           <div class="couter_icon">
                              <div> 
                                 <i class="fa fa-mortar-board green_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <p class="total_no">3</p>
                                 <p class="head_couter">Cours</p>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                           <div class="couter_icon">
                              <div> 
                                 <i class="fa fa-calendar yellow_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <p class="total_no">5</p>
                                 <p class="head_couter">Programmation(s) cours</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                           <div class="couter_icon">
                              <div> 
                                 <i class="fa fa-pencil red_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <p class="total_no">9</p>
                                 <p class="head_couter">Inscription(s)</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  

                  </div>

                  
               </div>

  

               <br><br><br><br><br><br><br><br><br><br><br><br>
               <!-- footer -->
               <div class="container-fluid">
                  <div class="footer">
                     <p>Copyright © P.<br><br>
                        Tout droit reservé
                     </p>
                  </div>
               </div>
            </div>
            <!-- end dashboard inner -->
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
   <!-- owl carousel -->
   <script src="<?= base_url() ?>/templateBackEnd/js/owl.carousel.js"></script> 
   <!-- chart js -->
   <script src="<?= base_url() ?>/templateBackEnd/js/Chart.min.js"></script>
   <script src="<?= base_url() ?>/templateBackEnd/js/Chart.bundle.min.js"></script>
   <script src="<?= base_url() ?>/templateBackEnd/js/utils.js"></script>
   <script src="<?= base_url() ?>/templateBackEnd/js/analyser.js"></script>
   <!-- nice scrollbar -->
   <script src="<?= base_url() ?>/templateBackEnd/js/perfect-scrollbar.min.js"></script>
   <script>
      var ps = new PerfectScrollbar('#sidebar');
   </script>
   <!-- custom js -->
   <script src="<?= base_url() ?>/templateBackEnd/js/custom.js"></script>
   <script src="<?= base_url() ?>/templateBackEnd/js/chart_custom_style1.js"></script>
</body>
</html>