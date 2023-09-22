
 
 <?php include 'header.php';?>

 <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

   <style>
   .nav-pills :is(.nav-link.active,.show>.nav-link) {
    background-color: #20604f !important;
   }
   .reset-pwd-tab{
       padding-top:11px !important;
       padding-bottom:11px !important;
       border: 1px solid #00b074 !important;
       background-color:#fff !important;
   }
   .form-control,.form-select{
    border: 1px solid #00b074 !important;
}
.reset-pwd-container{
    font-family: 'Barlow', sans-serif !important;
}
.reset-pwd-card{
    background-color: #D8F1E9!important;
    border:none !important;
}
.sub-pwd-card{
    border: 2px solid transparent;
    background: linear-gradient(white, white) padding-box, linear-gradient(to bottom, #ff0000, #20604f) border-box;
}
@media screen and (max-width:582px){
    .reset-investor-pwd-btn{
        margin-top:12px !important;
    }
}

@media screen and (max-width:380px){
    .reset-master-pwd-btn{
        margin-left:0px !important;
    }
}

@media screen and (max-width:380px){
    .reset-crm-pwd-btn{
        margin-right:10px !important;
    }
}

@media screen and (max-width:500px){
    .reset-pwd-card-body{
        padding:0 !important;
    }
    .reset-pwd-tab{
        font-size:12px !important;
    }
}


</style>

<?php $acc_details = $this->db->where('user_id',$this->session->userdata('usquareusername'))->get('accounts')->result_array();  ?>
                     <div class="container-fluid reset-pwd-container">
                         <div class="row">
                             <div class="col-xxl-12">
                            <h5 class="mb-3">Reset Password</h5>
                            <div class="card reset-pwd-card">
                                <div class="card-body reset-pwd-card-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                        <li class="nav-item waves-effect waves-light reset-crm-pwd-btn">
                                            <a class="nav-link active reset-pwd-tab" data-bs-toggle="tab" href="#pill-justified-home-1" role="tab">
                                                CRM PASSWORD
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light mx-3 reset-master-pwd-btn">
                                            <a class="nav-link reset-pwd-tab" data-bs-toggle="tab" href="#pill-justified-profile-1" role="tab">
                                                MASTER PASSSWORD
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light reset-investor-pwd-btn">
                                            <a class="nav-link reset-pwd-tab" data-bs-toggle="tab" href="#pill-justified-messages-1" role="tab">
                                                INVESTER PASSWORD
                                            </a>
                                        </li>
                                       
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active" id="pill-justified-home-1" role="tabpanel">
                                           <div class="row justify-content-center">
                                            <div class="col-md-8 col-lg-6 col-xl-5">
                                                <div class="card sub-pwd-card mt-4">
                                                     <div class="card-header reset-pwd-card-header align-items-center d-flex">
                                                        <h4 class="card-title mb-0 flex-grow-1 text-center text-white">Reset CRM Password</h4>
                                                        </div><!-- end card header -->
                                                        <form action="<?=BASEURL?>user/reset_pwd" method="post">
                                                            <div class="card-body p-4">
                                                                <div class="text-center mt-2">
                                                                    <h5 class="text-primary">Create new password</h5>
                                                                    <p class="text-muted">Your new password must be different from previous used password.</p>
                                                                </div>
                                
                                                                <div class="p-2">
                                                                    <form action="#">
                                                                         <div class="mb-3">
                                                                            <label class="form-label" for="password-input">Old Password <?=form_error('oldpw');?></label>
                                                                            <div class="position-relative auth-pass-inputgroup">
                                                                                <input type="password" class="form-control pe-5 password-input" placeholder="Enter old password" onpaste="return false" name="oldpw" nplaceholder="Enter password"  aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" >
                                                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                                            </div>
                                                                            <div id="passwordInput" class="form-text">Must be at least 8 characters.</div>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="password-input">New Password <?=form_error('newpw');?></label>
                                                                            <div class="position-relative auth-pass-inputgroup">
                                                                                <input type="password" class="form-control pe-5 password-input" onpaste="return false" name="newpw" placeholder="Enter new password" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" >
                                                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="confirm-password-input"><i class="ri-eye-fill align-middle"></i></button>
                                                                            </div>
                                                                            <div id="passwordInput" class="form-text">Must be at least 8 characters.</div>
                                                                        </div>
                                
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="confirm-password-input">Confirm New Password <?=form_error('cnewpw');?></label>
                                                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                                                <input type="password" class="form-control pe-5 password-input" onpaste="return false" name="cnewpw" placeholder="Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="confirm-password-input" >
                                                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="confirm-password-input"><i class="ri-eye-fill align-middle"></i></button>
                                                                            </div>
                                                                        </div>
                                
                                                                        <!--<div id="password-contain" class="p-3 bg-light mb-2 rounded">-->
                                                                        <!--    <h5 class="fs-13">Password must contain:</h5>-->
                                                                        <!--    <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>-->
                                                                        <!--    <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>-->
                                                                        <!--    <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>-->
                                                                        <!--    <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>-->
                                                                        <!--</div>-->
                                
                                
                                                                        <div class="mt-4">
                                                                            <button class="btn submit-btn btn-success w-100" id="" type="submit"><i class="fa-solid fa-key me-2"></i>Reset Password</button>
                                                                        </div>
                                                                    </form>
                                                                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog modal-dialog-centered">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-body text-center p-5">
                                                                                            <lord-icon src="https://cdn.lordicon.com/hrqwmuhr.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px"></lord-icon>
                                                                                            <div class="mt-4">
                                                                                                <h4 class="mb-3">The Credentials went wrong!</h4>
                                                                                                <p class="text-muted mb-4"> Password you've entered doesn't match !!</p>
                                                                                                <div class="hstack gap-2 text-center justify-content-center">
                                                                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">OK</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><!-- /.modal-content -->
                                                                                </div><!-- /.modal-dialog -->
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                    </div>
                                                            </div>
                                                     </div>
                                        <div class="tab-pane" id="pill-justified-profile-1" role="tabpanel">
                                           <div class="row justify-content-center">
                                                <div class="col-md-8 col-lg-6 col-xl-5">
                                                    <div class="card sub-pwd-card mt-4">
                                                         <div class="card-header reset-pwd-card-header align-items-center d-flex">
                                                                                        <h4 class="card-title mb-0 flex-grow-1 text-center text-white">Reset Master Password</h4>
                                                                                       
                                                                                    </div><!-- end card header -->
                                                                                    <form action="<?=BASEURL?>user/reset_master_pwd" method="post">
                                                        <div class="card-body p-4">
                                                            <div class="text-center mt-2">
                                                                <h5 class="text-primary">Create new password</h5>
                                                                <p class="text-muted">Your new password must be different from previous used password.</p>
                                                            </div>
                            
                                                            <div class="p-2">
                                                                <form action="#">
                                                                      <div class="mb-3">
                                                                    <label for="master_account_id" class="form-label">Package</label>
                                                                    <select class="form-select" id="master_account_id" name="master_account_id" required>
                                                                        <?php 
                                                                        
                                                                        foreach($acc_details as $x => $val) { ?>
                                                                        <option value="<?=$val['account_id']?>"><?=$val['account_id']?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                     <div class="mb-3">
                                                                        <label class="form-label" for="password-input">Old Password <?=form_error('master_oldpw');?></label>
                                                                        <div class="position-relative auth-pass-inputgroup">
                                                                            <input type="password" class="form-control pe-5 password-input" placeholder="Enter old password" onpaste="return false" name="master_oldpw" nplaceholder="Enter password"  aria-describedby="master_oldpw">
                                                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                                        </div>
                                                                        <div id="master_oldpw" class="form-text">Must be at least 8 characters.</div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="password-input">New Password <?=form_error('master_newpw');?></label>
                                                                        <div class="position-relative auth-pass-inputgroup">
                                                                            <input type="password" class="form-control pe-5 password-input" onpaste="return false" name="master_newpw" placeholder="Enter new password" id="password-input" aria-describedby="master_newpw">
                                                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="confirm-password-input"><i class="ri-eye-fill align-middle"></i></button>
                                                                        </div>
                                                                        <div id="master_newpw" class="form-text">Must be at least 8 characters.</div>
                                                                    </div>
                            
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="confirm-password-input">Confirm New Password <?=form_error('master_cnewpw');?></label>
                                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                                            <input type="password" class="form-control pe-5 password-input" onpaste="return false" name="master_cnewpw" placeholder="Confirm password" id="confirm-password-input" >
                                                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="confirm-password-input"><i class="ri-eye-fill align-middle"></i></button>
                                                                        </div>
                                                                    </div>
                                        <div class="mt-4">
                                            <button class="btn submit-btn btn-success w-100" id="" type="submit"><i class="fa-solid fa-key me-2"></i>Reset Password</button>
                                        </div>
                                        
                                        
                                    </form>
                                    
                                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body text-center p-5">
                                                            <lord-icon src="https://cdn.lordicon.com/hrqwmuhr.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px"></lord-icon>
                                                            <div class="mt-4">
                                                                <h4 class="mb-3">The Credentials went wrong!</h4>
                                                                <p class="text-muted mb-4"> Password you've entered doesn't match !!</p>
                                                                <div class="hstack gap-2 text-center justify-content-center">
                                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">OK</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div>
                               
                                    
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    

                    </div>
                </div>
                                        </div>
                                        <div class="tab-pane" id="pill-justified-messages-1" role="tabpanel">
                                           <div class="row justify-content-center">
           
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card sub-pwd-card mt-4">
                             <div class="card-header reset-pwd-card-header align-items-center d-flex">
                                                            <h4 class="card-title mb-0 flex-grow-1 text-center text-white">Reset Investor Password</h4>
                                                           
                                                        </div><!-- end card header -->
                                                        <form action="<?=BASEURL?>user/reset_invest_pwd" method="post">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Create new password</h5>
                                    <p class="text-muted">Your new password must be different from previous used password.</p>
                                </div>

                                <div class="p-2">
                                    <form action="#">
                                        <div class="mb-3">
                                        <label for="invest_account_id" class="form-label">Package</label>
                                        <select class="form-select" id="validationDefault04" name="invest_account_id" required>
                                            <?php 
                                            
                                            foreach($acc_details as $x => $val) { ?>
                                            <option value="<?=$val['account_id']?>"><?=$val['account_id']?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                         <div class="mb-3">
                                            <label class="form-label" for="password-input">Old Password <?=form_error('invest_oldpw');?></label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" class="form-control pe-5 password-input" placeholder="Enter old password" onpaste="return false" name="invest_oldpw" nplaceholder="Enter password"  aria-describedby="passwordInput" >
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                            <div id="passwordInput" class="form-text">Must be at least 8 characters.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">New Password <?=form_error('invest_newpw');?></label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" class="form-control pe-5 password-input" onpaste="return false" name="invest_newpw" placeholder="Enter new password" id="password-input" aria-describedby="passwordInput" >
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="confirm-password-input"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                            <div id="passwordInput" class="form-text">Must be at least 8 characters.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="confirm-password-input">Confirm New Password <?=form_error('invest_cnewpw');?></label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input" onpaste="return false" name="invest_cnewpw" placeholder="Confirm password"  id="confirm-password-input" >
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="confirm-password-input"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        
                                    

                                        <div class="mt-4">
                                            <button class="btn submit-btn btn-success w-100" id="" type="submit"><i class="fa-solid fa-key me-2"></i>Reset Password</button>
                                        </div>
                                        
                                        
                                    </form>
                                    
                                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body text-center p-5">
                                                            <lord-icon src="https://cdn.lordicon.com/hrqwmuhr.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px"></lord-icon>
                                                            <div class="mt-4">
                                                                <h4 class="mb-3">The Credentials went wrong!</h4>
                                                                <p class="text-muted mb-4"> Password you've entered doesn't match !!</p>
                                                                <div class="hstack gap-2 text-center justify-content-center">
                                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">OK</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div>
                               
                                    
                                </div>
                            </div>
                            </form>
                            
                        </div>
                        

                        

                    </div>
                </div>
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                          </div>    
                     </div>    
     
     
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    const mediaQuery = window.matchMedia('(max-width: 625px)');
    const ulElements = $('.nav-justified');

    function removeNavJustifiedClass(mediaQuery) {
      if (mediaQuery.matches) {
        ulElements.removeClass('nav-justified');
      } else {
        ulElements.addClass('nav-justified');
      }
    }
    removeNavJustifiedClass(mediaQuery); 
    mediaQuery.addListener(function(event) {
      removeNavJustifiedClass(mediaQuery);
    });
  });
</script>           
               
                  <!-- particles js -->
    <script src="<?=BASEURL?>assets/libs/particles.js/particles.js"></script>

    <!-- particles app js -->
    <script src="<?=BASEURL?>assets/js/pages/particles.app.js"></script> 
    
    <!-- password-addon init -->
    <script src="<?=BASEURL?>assets/js/pages/passowrd-create.init.js"></script>
                
                
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="<?=BASEURL?>assets/js/pages/datatables.init.js"></script>
                
    <script>
        $(document).ready(function () {
    $('#scroll-horizontal2').DataTable();
});

 $(document).ready(function () {
    $('#scroll-horizontal3').DataTable();
});

$(document).ready(function () {
    $('#scroll-horizontal4').DataTable();
});
    </script>
    
         

<?php include 'footer.php';?>