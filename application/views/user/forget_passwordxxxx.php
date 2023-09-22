<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
  
   <head>
      <meta charset="utf-8" />
      <title>Reset Password | Square Markets</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="" name="description" />
      <meta content="" name="author" />
      <!-- App favicon -->
      <link rel="shortcut icon" href="<?=BASEURL?>assets/images/logo.jpg">
      <!-- Layout config Js -->
      <script src="<?=BASEURL?><?=BASEURL?>assets/js/layout.js"></script>
      <!-- Bootstrap Css -->
      <link href="<?=BASEURL?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <!-- Icons Css -->
      <link href="<?=BASEURL?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
      <!-- App Css-->
      <link href="<?=BASEURL?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
      <!-- custom Css-->
      <link href="<?=BASEURL?>assets/css/custom.min.css" rel="stylesheet" type="text/css" />
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      
      <style>
          .send-otp{
              margin-top:45px;
          }
          @media screen and (max-width:451px){
              .send-otp{
              margin-top:11px !important;
          }
          }
          
          /*@media screen and (min-width:768px) and (max-width:991px){*/
          /*    .send-otp{*/
          /*    margin-top:11px !important;*/
          /*}*/
          /*}*/
          
          /*@media screen and (min-width:992px) and (max-width:1199px){*/
          /*    .send-otp{*/
          /*    margin-top:44px !important;*/
          /*}*/
          /*}*/
          /*@media screen and (min-width:1200px){*/
          /*    .send-otp{*/
          /*    margin-top:11px !important;*/
          /*}*/
          /*}*/
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
                     <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div>
                           <a href="index.html" class="d-inline-block auth-logo">
                           <img style="height:100px;" src="<?=BASEURL?>assets/images/logo.jpg" alt="" height="20">
                           </a>
                        </div>
                        
                     </div>
                  </div>
               </div>
               <!-- end row -->
               <div class="row justify-content-center">
                  <div class="col-md-8 col-lg-8 col-xl-5">
                     <div class="card mt-4">
                        <div class="card-body p-4">
                           <div class="text-center mt-2">
                              <h5 class="text-primary">Forgot Password?</h5>
                              <p class="text-muted">Reset password with Square Markets</p>
                              <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop" colors="primary:#0ab39c" class="avatar-xl">
                              </lord-icon>
                           </div>
                           <div class="alert alert-borderless alert-warning text-center mb-2 mx-2" role="alert">
                              OTP will send to user Registered mail ID !
                           </div>
                           <?php echo $this->session->flashdata('error_message');  ?>
                            <?php echo $this->session->flashdata('success_message');  ?>
                            <?=form_open_multipart('user/send_otp'); ?>
                           <div class="p-2">
                             

                                  <div class="row">
                                 <div class="col-lg-12 col-8 mb-4">
                                    <label class="form-label">User ID</label>
                                    <input type="text" class="form-control" id="email" name="account_id" placeholder="Enter User ID" value="91010261">
                                 </div>
                                 <!-- <div class="col-lg-4 col-4">-->
                                 <!--     <label  class="form-label send-otp"></label>-->
                                 <!--     <button type="submit" class="btn btn-sm btn-info btn-load" name="btn_otp" id="btn_otp">-->
                                          
                                 <!--                       <span class="d-flex align-items-center">-->
                                                            <!--<i class="fa-solid fa-arrow-right me-1"></i>-->
                                 <!--                           <span class="flex-grow-1 me-2" >-->
                                 <!--                               Send OTP-->
                                 <!--                           </span>-->
                                 <!--                           <span class="spinner-grow flex-shrink-0" role="status">-->
                                 <!--                               <span class="visually-hidden">Loading...</span>-->
                                 <!--                           </span>-->
                                 <!--                       </span>-->
                                 <!--                   </button>-->
                                 <!--</div>-->
                                 </div>
                                 <div class="text-center mt-4">
                                    <button class="btn btn-success w-100" type="submit">Send Reset Link</button>
                                 </div>
                              
                              <!-- end form -->
                           </div>
                            <?= form_close() ?>
                        </div>
                        <!-- end card body -->
                     </div>
                     <!-- end card -->
                     <div class="mt-4 text-center">
                        <p class="mb-0">Wait, I remember my password... <a href="<?=BASEURL?>user" class="fw-semibold text-primary text-decoration-underline"> Click here </a> </p>
                     </div>
                  </div>
               </div>
               <!-- end row -->
            </div>
            <!-- end container -->
         </div>
         <!-- end auth page content -->
         <!-- footer -->
         <!--<footer class="footer">-->
         <!--   <div class="container">-->
         <!--      <div class="row">-->
         <!--         <div class="col-lg-12">-->
         <!--            <div class="text-center">-->
         <!--               <p class="mb-0 text-muted">-->
         <!--                  &copy;-->
         <!--                  <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand-->
         <!--               </p>-->
         <!--            </div>-->
         <!--         </div>-->
         <!--      </div>-->
         <!--   </div>-->
         <!--</footer>-->
         <!-- end Footer -->
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
   </body>
   <!-- Mirrored from themesbrand.com/velzon/html/minimal/auth-pass-reset-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Mar 2023 06:44:27 GMT -->
</html>
<script>
    
        $("#btn_otp").click(function(){
           var timeleft = 120;
           var downloadTimer = setInterval(function(){
           if(timeleft <= 0){
            //   alert('hai');
               $('#btn_otp').prop('disabled', false);
               $('#countdown').prop('disabled', true);
            clearInterval(downloadTimer);
            
            document.getElementById("countdown").innerHTML = "Finished";
          } else {
               $('#btn_otp').prop('disabled', true);
            document.getElementById("countdown").innerHTML = timeleft + " seconds";
          }
          timeleft -= 1;
        }, 1000);
        
          var user=$('#email').val();
            //   alert(user);
          $.post('<?=BASEURL?>user/send_otp', {
                'email': user
            })
            .done(function(res) {
                $('.toast').toast('show');
            });
        });
</script>
