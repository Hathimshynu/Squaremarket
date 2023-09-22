

<?php include 'header.php';?>

<!--datatable css-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
<!--datatable responsive css-->
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">



<style>
    
    .col-sm-12 {
    overflow: auto;
}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: var(--vz-nav-pills-link-active-color);
    background-color: #20604F !important;
}
.profile-nav:hover{
    color:black !important;
}
.profile-nav.active:hover{
    color:#fff!important;
}
.gender-check .form-check-input:checked {
    background-color: black !important;
    border-color: white !important;
    padding: 6px !important;
}
.gender-check .form-check-input{
    border: 3px solid white !important;
}
.profile-card{
    background-color: #D8F1E9!important;
}
.profile-tab{
    border:1px solid #00b074 !important;
    background-color:white !important;
}
.form-control{
    border: 1px solid #00b074 !important;
}

.profile-container{
          font-family: 'Barlow', sans-serif !important;
}

 @keyframes marquee {
    0% {
      transform: translateX(0%);
    }
    100% {
      transform: translateX(-100%);
    }
  }

  /* Apply the animation to the marquee text */
  .marquee-text {
    display: inline-block;
    white-space: nowrap;
    animation: marquee 10s linear infinite;
  }
  @media screen and (max-width:500px){
      .profile-cardbody{
          padding:0 !important;
      }
  }

</style>

  <div class="row profile-container">
         <div class="col-xxl-12 col-lg-12">
                            <h5 class="mb-3">User Profile</h5>
                            <div class="card profile-card">
                                <div class="card-body profile-cardbody">
                                    <!--<p class="text-muted">Use <code>nav-pills nav-justified</code> class to generate equal-width elements without borders, all horizontal space will be occupied by nav links.</p>-->
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                        <li  class="nav-item profile-tab waves-effect waves-light me-2 me-sm-2 me-lg-3">
                                            <a style="padding-top:11px;padding-bottom:11px;border-radius:0;" class="nav-link active profile-nav" data-bs-toggle="tab" href="#pill-justified-home-1" role="tab">
                                                Profile
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect profile-tab waves-light">
                                            <a style="padding-top:11px;padding-bottom:11px;border-radius:0;" class="nav-link profile-nav" data-bs-toggle="tab" href="#pill-justified-profile-1" role="tab">
                                                KYC
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active " id="pill-justified-home-1" role="tabpanel">
                                             <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card profile-card">
                                                        <!--<div class="card-header align-items-center d-flex">-->
                                                        <!--    <h4 class="card-title mb-0 flex-grow-1">Profile</h4>-->
                                                        <!--</div>-->
                                                        <!-- end card header -->
                                                        <?php $profile= $this->db->where('username',$this->session->userdata('usquareusername'))->get('user_role')->row_array(); ?>
                                                        
                                                        <?=form_open_multipart('user/profile_update'); ?>
                                                        <div class="card-body">
                                                            <div class="live-preview">
                                                                <div class="row gy-4">
                                                                    <div class="col-xxl-6 col-md-6">
                                                                        <div>
                                                                            <label for="basiInput" class="form-label">First Name <span><?=form_error('fname');?></span></label>
                                                                            <input type="text" class="form-control" value="<?=$profile['fname']?>" name="fname" id="" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xxl-6 col-md-6">
                                                                        <div>
                                                                            <label for="basiInput" class="form-label">Last Name <span><?=form_error('fname');?></span></label>
                                                                            <input type="text" class="form-control" value="<?=$profile['lname']?>" name="lname" id="" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                   <div class="col-xxl-6 col-md-6">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">E-mail <span><?=form_error('email');?></span></label>
                                                                            <input type="email" class="form-control" value="<?=$profile['email']?>" name="email" id="" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                     <div class="col-xxl-6 col-md-6">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">Date Of Birth<span><?=form_error('dob');?></span></label>
                                                                            <input type="date" class="form-control" value="<?=$profile['dob']?>" name="dob" id="" readonly>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                <!--    <div class="col-xxl-4 col-md-4">-->
                                                                <!--<label for="gender" class="form-label">Gender <span><?=form_error('gender');?></span></label>-->
                                                                <!--            <div class="mb-3 d-flex pt-2">-->
                                                                                <!-- Gender -->
                                                                                
                                                                <!--            <div class="form-check gender-check mb-2 me-3 me-lg-5">-->
                                                                <!--                <input class="form-check-input" type="radio" name="gender" id="" value="male" <?php if($profile['gender'] == 'male') { echo "checked"; } ?> disabled checked>-->
                                                                <!--                <label class="form-check-label" for="flexRadioDefault1">-->
                                                                <!--                    Male-->
                                                                <!--                </label>-->
                                                                <!--            </div>-->
                                                                <!--            <div class="form-check gender-check">-->
                                                                <!--                <input class="form-check-input" type="radio" name="gender" id="" value="female" <?php if($profile['gender'] == 'female') { echo "checked"; } ?> disabled >-->
                                                                <!--                <label class="form-check-label" for="flexRadioDefault2">-->
                                                                <!--                    Female-->
                                                                <!--                </label>-->
                                                                <!--            </div>-->
                                                                <!--            </div>-->
                                                                <!--    </div>-->
                                                                    <!--end col-->
                                                                
                                                                    <!--end col-->
                                                                     <div class="col-xxl-4 col-md-4">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">Phone Number <span><?=form_error('mobile');?></span></label>
                                                                            <input type="text" name="mobile" class="form-control"  value="<?=$profile['phone']?>" id="" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                   
                                                                    <div class="col-xxl-4 col-md-4">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">Zip Code <span><?=form_error('pincode');?></span></label>
                                                                            <input type="number" class="form-control" value="<?=$profile['pin_code']?>" name="pincode" id="" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                     <div class="col-xxl-4 col-md-4">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">Country <span><?=form_error('country');?></span></label>
                                                                            <input type="text" class="form-control" value="<?=$profile['country']?>"  name="country" id="" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-xxl-4 col-md-4">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">City <span><?=form_error('city');?></span></label>
                                                                            <input type="text" class="form-control" value="<?=$profile['city']?>"  name="city" id="" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <!--<div class="col-xxl-4 col-md-4">-->
                                                                    <!--    <div>-->
                                                                    <!--        <label for="placeholderInput" class="form-label">State <span><?=form_error('state');?></span></label>-->
                                                                    <!--        <input type="text" class="form-control" value="<?=$profile['state']?>" name="state" id="" readonly>-->
                                                                    <!--    </div>-->
                                                                    <!--</div>-->
                                                                    <!--end col-->
                                                                  
                                                                    <!--<div class="d-flex justify-content-center">-->
                                                                    <!--    <button type="submit" class="btn btn-primary waves-effect waves-light"><i class="fa-solid fa-rotate me-2"></i>Update Profile</button>-->
                                                                    <!--</div>-->
                                                               
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                        </div>
                                                         <?= form_close() ?>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="tab-pane " id="pill-justified-profile-1" role="tabpanel">
                                             <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card profile-card">
                                                        <div class="card-header profile-card align-items-center d-flex">
                                                            <h4 class="card-title mb-0 flex-grow-1">KYC</h4>
                                                        </div><!-- end card header -->
                                                        
                                                    <?php 
                                                    $check = $this->db->select('status')->order_by('id','desc')->where('username',$this->session->userdata('usquareusername'))->get('kyc')->row()->status;
                                                    if($check == 'Rejected'){
                                                    ?>
                                                        
                                                        <?=form_open_multipart('user/kyc_update'); ?>
                                                        <div class="card-body">
                                                            <div class="live-preview">
                                                                <div class="row gy-4 d-flex justify-content-center">
                                                                    <div class="col-lg-6">
                                                                    <div class="col-xxl-12 col-md-12">
                                                                        <label for="basiInput" class="form-label text-primary">ID Type</label>
                                                                        <select class="form-select mb-3" aria-label="Default select example" name="nation">
                                                                            <option >Select National ID</option>
                                                                            <option <?php if($profile['id_proof_type'] =="Aadhar"){ echo "selected"; } ?> value="Aadhar">Aadhar</option>
                                                                            <option <?php if($profile['id_proof_type'] =="Passport"){ echo "selected"; } ?> value="Passport">Passport</option>
                                                                            <option <?php if($profile['id_proof_type'] =="Pan"){ echo "selected"; } ?> value="Pan">Pan</option>
                                                                            <option <?php if($profile['id_proof_type'] =="Voter ID"){ echo "selected"; } ?> value="Voter ID">Voter ID</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end col-->
                                                                   
                                                                    <div class="col-xxl-12 col-md-12">
                                                                       <div>
                                                                            <label for="formFile" class="form-label text-primary">Upload ID Image</label>
                                                                            <input class="form-control" type="file" id="formFile" name="userfile">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                     
                                                                   
                                                                    <div class="d-flex justify-content-center mt-3">
                                                                        <button type="submit" class="btn submit-btn btn-primary waves-effect waves-light"><i class="fa-regular fa-circle-check me-2"></i>Submit</button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                        </div>
                                                        <?= form_close();?>
                                                        <?php }else if($check == 'Accepted'){ ?>
                                                          <div class="card-body">
                                                            <div class="live-preview">
                                                                <div class="row gy-4 d-flex justify-content-center">
                                                                    <div class="col-lg-6">
                                                                    <div class="col-xxl-12 col-md-12 ">
                                                                        <label for="basiInput" class="form-label text-primary">ID Type</label>
                                                                         <select class="form-select mb-3" aria-label="Default select example" name="nation">
                                                                            <option >Select National ID</option>
                                                                            <option <?php if($profile['id_proof_type'] =="Aadhar"){ echo "selected"; }else{ echo "disabled"; } ?> value="Aadhar">Aadhar</option>
                                                                            <option <?php if($profile['id_proof_type'] =="Passport"){ echo "selected"; }else{ echo "disabled"; } ?> value="Passport">Passport</option>
                                                                            <option <?php if($profile['id_proof_type'] =="Pan"){ echo "selected"; }else{ echo "disabled"; } ?> value="Pan">Pan</option>
                                                                            <option <?php if($profile['id_proof_type'] =="Voter ID"){ echo "selected"; }else{ echo "disabled"; } ?> value="Voter ID">Voter ID</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end col-->
                                                                   
                                                                    <div class="col-xxl-12 col-md-12">
                                                                       <div>
                                                                            <label for="formFile" class="form-label text-primary">Upload ID Image</label>
                                                                             <div class="text-center"><a href="<?=BASEURL?>assets/images/<?=$profile['id_proof'];?>" target="_blank"><img src="<?=BASEURL?>assets/images/<?=$profile['id_proof'];?>" width="100px"></a></div>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                     
                                                                   
                                                                    </div>
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                        </div>
                                                        <?php }else{ ?>
                                                        <div class="card-body">
                                                            <div class="live-preview">
                                                                <div class="row gy-4 d-flex justify-content-center">
                                                                    <div class="col-lg-12">
                                                                         <input style="color:#ff0000;" type="text" id="marquee-input" class="form-control" value="Your KYC verification is pending. Please wait for admin response." name="msg-response" readonly>
                                                                        </div>
                                                                        
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                        </div>
                                        
                                
                                           
                                             <div class="row mt-3">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="card-title mb-0">KYC History</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <table id="example" class="table nowrap align-middle" style="width:100%">
                                                                 <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Date</th>
                                                                        <th>ID Type</th>
                                                                        <th>Image</th>
                                                                       <th>Status</th>
                                                                       <th>Remark</th>
                                                                    </tr>
                                                                </thead>
                                                              <tbody>
                                                                    <?php 
                                                                    $count =1;
                                                                    $history = $this->db->where('username',$this->session->userdata('usquareusername'))->get('kyc')->result_array();
                                                                    foreach($history as $key => $his)
                                                                    {
                                                                       if($his['status'] == 'Accepted')
                                                                       {
                                                                           $col = "success";
                                                                       }else{
                                                                           $col = "warning";
                                                                       }
                                                                    ?>
                                                                    <tr>
                                                                        <td><?=$count++;?></td>
                                                                        <td><?=$his['entry_date']?></td>
                                                                        <td><?=$his['national_id']?></td>
                                                                        <td><a href="<?=BASEURL?>assets/images/<?=$his['upload_id'];?>" target="_blank"><img src="<?=BASEURL?>assets/images/<?=$his['upload_id'];?>" width="100px"></a></td>
                                                                        <td><span class="badge rounded-pill text-bg-<?=$col?>"><?=$his['status'];?></span></td>
                                                                        <td><?=$his['remark'];?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                  
                                            
                                            
                                            
                                            
                                            
                                            
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
    </div>
    
</div>    


    

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

<?php include 'footer.php';?>




