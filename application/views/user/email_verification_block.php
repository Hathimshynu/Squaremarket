<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<head>

    <meta charset="utf-8" />
    <title>Verification Block | Square Markets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=BASEURL?>assets/images/logo.jpg">

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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <!-- Sweet Alert css-->
      <link href="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <style>
        
            @media screen and (max-width:437px){
                .resend-btn{
                    margin-bottom: 12px;
            }
        }
    </style>

</head>

<body>

    <!-- auth-page wrapper -->
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <!-- auth-page content -->
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="card overflow-hidden">
                            <div class="card-body p-4">
                                <div class="text-center">
                                <lord-icon src="https://cdn.lordicon.com/hrqwmuhr.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px"></lord-icon>
                                    <h1 class="text-primary mb-4">Sorry !</h1>
                                    <h4 class="text-uppercase my-2 mb-3">Your email address is not yet verified <img style="width:35px;" src="<?=BASEURL?>assets/images/emojis/shock.png" class="ms-1"></h4>
                                    <p class="text-muted mb-4">Please verify your email address before logging in to ensure the security of your account and prevent unauthorized access. </p>
                                    <div class="d-lg-flex d-sm-block d-block justify-content-between">
                                    <a type="button" href="<?=BASEURL?>user/resend_verification" class="btn btn-success resend-btn me-2" id="resend-mail-success"><i class="fa-solid fa-envelope me-2" ></i>Resend the verification email</a>
                                    <!--<button type="button" class="btn btn-sm rounded-pill btn-danger waves-effect waves-light" id="error-msg">Error Msg</button>-->
                                    <a href="<?=BASEURL?>user/logout" class="btn btn-primary"><i class="fa-solid fa-right-from-bracket me-2"></i>Sign in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->
    </div>
    <!-- end auth-page-wrapper -->

    <!--Success Popup for Resend email Verification Button-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
<?php
if($this->session->flashdata('resuccess_message') != "")
{
?>
    <script type="text/javascript">
      $( document ).ready(function() {
    Swal.fire({
        title: "Verification link has been sent to your Email Successfully!",
        icon: "success",
        confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
        buttonsStyling: !1,
        showCloseButton: !0
    })
})
    </script>
<?php } ?>    
    <!--Success Popup for Resend email Verification Button-->
 
    <!-- Error Msg Popup-->
<?php
if($this->session->flashdata('reerror_message') != "")
{
?>
    <script type="text/javascript">
 $( document ).ready(function() {
    Swal.fire({
        title: "Please try after sometime.",
        icon: "info",
        showCloseButton: !0,
        confirmButtonClass: "btn btn-success me-2",
        buttonsStyling: !1,
        confirmButtonText: '<i class="ri-thumb-up-fill align-bottom me-1"></i> OK',
    })
})
</script>
<?php } ?>
<!-- Error Msg Popup-->

<!-- Sweet Alerts js -->
<script src="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.js"></script>

<!-- Sweet alert init js-->
<script src="<?=BASEURL?>assets/js/pages/sweetalerts.init.js"></script>
    <!-- JAVASCRIPT -->
    <script src="<?=BASEURL?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=BASEURL?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?=BASEURL?>assets/libs/node-waves/waves.min.js"></script>
    <script src="<?=BASEURL?>assets/libs/feather-icons/feather.min.js"></script>
    <script src="<?=BASEURL?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="<?=BASEURL?>assets/js/plugins.js"></script>

</body>



</html>