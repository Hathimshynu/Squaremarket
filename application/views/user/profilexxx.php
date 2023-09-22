<?php include 'header.php';?>


<div class="container-fluid">
    
    
    <div class="row">
         <div class="col-xxl-12 col-lg-12">
                            <h5 class="mb-3">User Profile</h5>
                            <div class="card">
                                <div class="card-body">
                                    <!--<p class="text-muted">Use <code>nav-pills nav-justified</code> class to generate equal-width elements without borders, all horizontal space will be occupied by nav links.</p>-->
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#pill-justified-home-1" role="tab">
                                                Profile
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-profile-1" role="tab">
                                                KYC
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active" id="pill-justified-home-1" role="tabpanel">
                                             <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header align-items-center d-flex">
                                                            <h4 class="card-title mb-0 flex-grow-1">Profile</h4>
                                                        </div><!-- end card header -->
                                                        <?php $profile= $this->db->where('username',$this->session->userdata('usquareusername'))->get('user_role')->row_array(); ?>
                                                        
                                                        <?=form_open_multipart('user/profile_update'); ?>
                                                        <div class="card-body">
                                                            <div class="live-preview">
                                                                <div class="row gy-4">
                                                                    <div class="col-xxl-6 col-md-6">
                                                                        <div>
                                                                            <label for="basiInput" class="form-label">First Name <span><?=form_error('fname');?></span></label>
                                                                            <input type="text" class="form-control" value="<?=$profile['fname']?>" name="fname" id="basiInput">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-xxl-6 col-md-6">
                                                                        <div>
                                                                            <label for="basiInput" class="form-label">Last Name <span><?=form_error('lname');?></span></label>
                                                                            <input type="text" class="form-control" value="<?=$profile['lname']?>" name="lname" id="basiInput">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-xxl-6 col-md-6">
                                                                        <div>
                                                                            <label for="labelInput" class="form-label">User ID </label>
                                                                            <input type="text" class="form-control" value="<?=$profile['account_id']?>"  id="labelInput" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-xxl-6 col-md-6">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">E-mail </label>
                                                                            <input type="email" class="form-control" value="<?=$profile['email']?>"   id="placeholderInput" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                     <div class="col-xxl-6 col-md-6">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">Mobile Number <span><?=form_error('mobile');?></span></label>
                                                                            <input type="tel" class="form-control" value="<?=$profile['phone']?>" name="mobile" id="placeholderInput">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                     <div class="col-xxl-6 col-md-6">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">Country <span><?=form_error('country');?></span></label>
                                                                            <input type="text" class="form-control" value="<?=$profile['country']?>" name="country" id="placeholderInput">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                     <div class="col-xxl-6 col-md-6">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">Sponser Name</label>
                                                                            <input type="text" class="form-control" value=""  id="placeholderInput">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                     <div class="col-xxl-6 col-md-6">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">Sponser ID</label>
                                                                            <input type="text" class="form-control" value=""  id="placeholderInput">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                     <div class="col-xxl-6 col-md-6">
                                                                        <div>
                                                                            <label for="placeholderInput" class="form-label">Joining Date</label>
                                                                            <input type="text" class="form-control" value="<?=$profile['entry_date']?>"  id="placeholderInput" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <!-- <div class="col-xxl-6 col-md-6">-->
                                                                    <!--    <div>-->
                                                                    <!--        <label for="placeholderInput" class="form-label">Active Date</label>-->
                                                                    <!--        <input type="date" class="form-control" value="" id="placeholderInput">-->
                                                                    <!--    </div>-->
                                                                    <!--</div>-->
                                                                    <!--end col-->
                                                                    <div class="d-flex justify-content-center">
                                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                    </div>
                                                               
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
                                        <div class="tab-pane" id="pill-justified-profile-1" role="tabpanel">
                                             <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header align-items-center d-flex">
                                                            <h4 class="card-title mb-0 flex-grow-1">KYC</h4>
                                                        </div><!-- end card header -->
                                                         <?php echo $this->session->flashdata('error_message');  ?>
                                                         <?php echo $this->session->flashdata('success_message');  ?>
                                                         <?=form_open_multipart('user/kyc_update'); ?>
                                                        <div class="card-body">
                                                            <div class="live-preview">
                                                                <div class="row gy-4 d-flex justify-content-center">
                                                                    <div class="col-lg-6">
                                                                    <div class="col-xxl-12 col-md-12">
                                                                        <label for="basiInput" class="form-label">National ID</label> 
                                                                        <input type="hidden" class="form-control" id="basiInput" name="account_id" value="<?=$this->session->userdata('usquareuserid')?>">
                                                                        <select class="form-select mb-3" aria-label="Default select example" name="nation">
                                                                            <option selected>Select National ID</option>
                                                <option value="Aadhar">Aadhar</option>
                                                <option value="Passport">Passport</option>
                                                <option value="Pan">Pan</option>
                                                <option value="Voter ID">Voter ID</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-xxl-12 col-md-12 mb-3">
                                                                       <div>
                                                                            <label for="basiInput" class="form-label">ID No</label>
                                                                           
                                                                            <input type="text" class="form-control" id="basiInput" name="id_no">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-xxl-12 col-md-12">
                                                                       <div>
                                                                            <label for="formFile" class="form-label">Upload ID</label>
                                                                            <input class="form-control" type="file" id="formFile" name="userfile">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                     
                                                                   
                                                                    <div class="d-flex justify-content-center mt-3">
                                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                        </div>
                                                        <?= form_close() ?>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
    </div>
    
    
    
    
    
    
    
</div>    
    


















<?php include 'footer.php';?>