<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
   
   <head>
      <meta charset="utf-8" />
      <title>Email Verification Success Message | Square Markets</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="" name="description" />
      <meta content="" name="author" />
      <!-- App favicon -->
      <link rel="shortcut icon" href="<?=BASEURL?>assets/images/logo.png">
      <!-- Layout config Js -->
      <script src="<?=BASEURL?>assets/js/layout.js"></script>
      <!-- Bootstrap Css -->
      <link href="<?=BASEURL?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <!-- Icons Css -->
      <link href="<?=BASEURL?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
      <!-- App Css-->
      <link href="<?=BASEURL?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
      <!-- custom Css-->
      <link href="<?=BASEURL?>assets/css/custom.min.css" rel="stylesheet" type="text/css" />

      <style>
          .avatar-title {
    border: 2px dashed #00bd9d;
   
          }
          .verification-msg-container{
            background-color: #dfe4eaa8;
            text-align: justify;
            border-left: 5px solid #55efc4;
          }
          .verification-msg{
            font-size:15px;
          }
          .email-verified-already{
            border-left: 5px solid #ffa500 !important;
          }
      </style>
   </head>
   <body>
      <div class="auth-page-wrapper pt-5">
         <!-- auth page bg -->
         <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>
            <div class="shape">
               <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                  <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
               </svg>
            </div>
         </div>
         <!-- auth page content -->
         <div class="auth-page-content">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="text-center mb-4 text-white-50">
                        <div>
                           <a href="<?=BASEURL?>user/dashboard" class="d-inline-block auth-logo">
                           <img src="<?=BASEURL?>assets/images/logo.jpg" alt="" height="100">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end row -->
               <div class="row justify-content-center">
                  <div class="col-md-8 col-lg-8 col-xl-6">
                     <div class="card mt-4">
                    <?php if($status == "New"){ ?>
                        <div class="card-body p-4 text-center">
                           <div class="avatar-lg mx-auto mt-2">
                              <div class="avatar-title bg-light text-success display-3 rounded-circle">
                                 <i class="ri-checkbox-circle-fill"></i>
                              </div>
                           </div>
                           <div class="mt-4 pt-2">
                              <h4>Email verified Successfully !</h4>
                           </div>
                        </div>
                        <!-- end card body -->
                        <div class="verification-msg-container p-3 pb-1">
                              <p class="verification-msg">We are pleased to inform you that your email address has been successfully verified. This means that you can now use our services and receive important updates, notifications, and other communication from us.</p>
                              <p class="mt-2 text-muted text-center">Thank you for taking the time to verify your email address. If you have any questions or concerns, please do not hesitate to contact us.</p>
                          </div>
                          <div class="col-md-12 col-lg-12 col-xl-12 text-center mt-2 mb-2">
                              <a class="text-center btn btn-primary" href="<?=BASEURL?>user">Home</a>
                          </div>
                         <?php } ?>
                          <!-- Already Email Verified Message -->
                        <?php if($status == "Old"){ ?>
                          <div class="card-body p-4 text-center">
                           <div class="avatar-lg mx-auto mt-2">
                              <img class="img-fluid" src="<?=BASEURL?>assets/images/warning-icon.png">
                           </div>
                           <div class="mt-3">
                              <h4>Email has Already Verified !</h4>
                           </div>
                        </div>
                        <div class="verification-msg-container email-verified-already p-3 pb-1">
                              <p class="verification-msg">We would like to inform you that your email address has already been successfully verified. You can now use our services and receive important updates, notifications, and other communication from us.</p>
                              <p class="mt-2 text-muted text-center">If you have any questions or concerns, please do not hesitate to contact us.
                             <span class="text-center">Thank you for choosing our service.</span></p>
                          </div>
                          <div class="col-md-12 col-lg-12 col-xl-12 text-center mt-2 mb-2">
                              <a class=" btn btn-primary" href="<?=BASEURL?>user">Home</a>
                          </div>
                          <?php } ?>
                           <!-- Already Email Verified Message Ends-->
                     </div>
                     <!-- end card -->
                  </div>
               </div>
               <!-- end row -->
            </div>
            <!-- end container -->
         </div>
         <!-- end auth page content -->
      
      </div>
      <!-- end auth-page-wrapper -->
      <!-- JAVASCRIPT -->
      <script src="<?=BASEURL?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="<?=BASEURL?>assets/libs/simplebar/simplebar.min.js"></script>
      <script src="<?=BASEURL?>assets/libs/node-waves/waves.min.js"></script>
      <script src="<?=BASEURL?>assets/libs/feather-icons/feather.min.js"></script>
      <script src="<?=BASEURL?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
      <script src="<?=BASEURL?>assets/js/plugins.js"></script>
      <!-- particles js -->
      <script src="<?=BASEURL?>assets/libs/particles.js/particles.js"></script>
      <!-- particles app js -->
      <script src="<?=BASEURL?>assets/js/pages/particles.app.js"></script>
      <!-- password-addon init -->
      <script src="<?=BASEURL?>assets/js/pages/password-addon.init.js"></script>
   </body>
  
</html>