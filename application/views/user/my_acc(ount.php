<?php include 'header.php';?>


  <!-- Sweet Alert css-->
    <link href="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    
       <!-- plugin css -->
    <link href="<?=BASEURL?>assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <link href="<?=BASEURL?>assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" />
    
    <style>
        .view-btn{
    padding-right:27px !important;
}
.col-sm-12 {
    overflow: auto;
}
.input-group-text{
    background-color: #FE8E4C;
    color:#fff;
}
.addfund-btn{
    background-color: #f25a00 !important;
    border-color: var(--vz-gray-400);
}
.bal-badge{
    padding: 10px;
    font-size: 13px;
}
.bal-badge{
    border:1px solid !important;
}

    </style>


<!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    
     <!-- Sweet Alert css-->
    <link href="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />




<div class="container-fluid">



<div class="card">
    <div class="card-header">
        <h4 class="card-title">My Account</h4>
    </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <div class="search-box">
                                        <input type="text" class="form-control search" placeholder="Search accounts...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-auto ms-auto">
                                    <div class="d-flex hastck gap-2 flex-wrap">
                                        <!--<div class="d-flex align-items-center gap-2">-->
                                        <!--    <span class="text-muted">Sort by: </span>-->
                                        <!--    <select class="form-control mb-0" data-choices data-choices-search-false id="choices-single-default">-->
                                        <!--        <option value="Owner">Owner</option>-->
                                        <!--        <option value="Company">Company</option>-->
                                        <!--        <option value="Date">Date</option>-->
                                        <!--    </select>-->
                                        <!--</div>-->
                                        <button data-bs-toggle="modal" data-bs-target="#adddeals" class="btn btn-success"><i class="ri-add-fill align-bottom me-1"></i>Create Account</button>
                                        <!--<div class="dropdown">-->
                                        <!--    <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">-->
                                        <!--        <i class="ri-settings-4-line"></i>-->
                                        <!--    </button>-->
                                        <!--    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">-->
                                        <!--        <li><a class="dropdown-item" href="#">Copy</a></li>-->
                                        <!--        <li><a class="dropdown-item" href="#">Move to pipline</a></li>-->
                                        <!--        <li><a class="dropdown-item" href="#">Add to exceptions</a></li>-->
                                        <!--        <li><a class="dropdown-item" href="#">Switch to common form view</a></li>-->
                                        <!--        <li><a class="dropdown-item" href="#">Reset form view to default</a></li>-->
                                        <!--    </ul>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <!--end card-->



                       <!-- Modal Starts-->
                    <div class="modal fade" id="adddeals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form class="needs-validation" novalidate id="regist" method="post" action="<?=BASEURL?>user/my_account">
                                    <div id="accounterror"></div>
                                      <div id="message" class="text-danger text-center"></div>
                                    <div class="modal-body">
                                        <!--<div class="mb-3">-->
                                        <!--    <input type="hidden" class="form-control"  name="account_type" placeholder="" required="" value="live">-->
                                        <!--    <input type="hidden" class="form-control"  name="page_name" placeholder="" required="" value="my_account">-->
                                        <!--    <label for="deatType" class="form-label">Package Type</label>-->
                                        <!--    <select class="form-select" id="deatType" name="package" data-choices aria-label="Default select example" required>-->
                                        <!--        <option value="" data-custom-properties="[object Object]">Select Package type</option>-->
                                        <!--        <option value="standard">Standard</option>-->
                                        <!--        <option value="diamond">Diamond</option>-->
                                        <!--        <option value="crystal">Crystal</option>-->
                                               
                                        <!--    </select>-->
                                        <!--    <div id="packageerror">-->
                                                
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="mb-3">-->
                                        <!--    <label for="dealTitle" class="form-label">First Name <span><?=form_error('fname');?></span></label>-->
                                        <!--    <input type="text" class="form-control" name="fname" id="" placeholder="Enter first name" required>-->
                                        <!--    <div id="fnameerror">-->
                                                
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="mb-3">-->
                                        <!--    <label for="dealTitle" class="form-label">Middle Name <span><?=form_error('mname');?></span></label>-->
                                        <!--    <input type="text" class="form-control" name="mname" id="" placeholder="Enter middle name" required>-->
                                        <!--    <div id="fnameerror">-->
                                                
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="mb-3">-->
                                        <!--    <label for="dealTitle" class="form-label">Last Name <span><?=form_error('lname');?></span></label>-->
                                        <!--    <input type="text" class="form-control" name="lname" id="" placeholder="Enter last name" required>-->
                                        <!--    <div id="lnameerror">-->
                                                
                                        <!--    </div>-->
                                        <!--</div>-->
                                          <div class="mb-3">
                                            <label for="dealTitle" class="form-label">Deposit <span><?=form_error('deposit');?></span></label>
                                            <input type="number" class="form-control" name="deposit" value="" id="" placeholder="Enter Amount">
                                            <div id="phoneerror">
                                                
                                            </div>
                                            <?php $wallet = $this->db->select('sum(credit) - sum(debit) as balance')->where('user_id',$this->session->userdata('usquareusername'))->get('e_wallet')->row()->balance+0; ?>
                                            <div class="mt-3 d-flex justify-content-center"><span class="badge badge-soft-success badge-border bal-badge">Available Balance : <strong style="font-size:14px;color:orange;" class="w-balance">$<?=number_format($wallet,2);?></strong></span></div>
                                        </div>
                                        
                                      
                                        <!--<div class="mb-3">-->
                                        <!--    <label for="gender" class="form-label">Gender</label>-->
                                        <!--    <div class="d-flex">-->
                                        <!--        <div class="form-check mb-2 me-2">-->
                                        <!--            <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">-->
                                        <!--            <label class="form-check-label" for="flexRadioDefault1">-->
                                        <!--               Male-->
                                        <!--            </label>-->
                                        <!--        </div>-->
                                                
                                        <!--        <div class="form-check">-->
                                        <!--            <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2" checked="">-->
                                        <!--            <label class="form-check-label" for="flexRadioDefault2">-->
                                        <!--                Female-->
                                        <!--            </label>-->
                                        <!--        </div>-->
                                        <!--        </div>-->
                                        <!--</div>-->
                                        <!--<div id="gendererror"></div>-->
                                        <!--<div class="mb-3">-->
                                        <!--    <label for="ZipCode" class="form-label">Zip Code</label>-->
                                        <!--    <input type="text" class="form-control" name="pincode" id="dealOwner" required placeholder="Enter Zip Code">-->
                                        <!--    <div id="pinerror">-->
                                                
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!-- <div class="mb-3">-->
                                        <!--    <label for="deatType" class="form-label">Country</label>-->
                                        <!--    <input type="text" name="country" class="form-control" placeholder="Enter city name" required>-->
                                            <!--<select class="form-select" id="deatType" data-choices aria-label="Default select example" name="country" required>-->
                                            <!--    <option value="" data-custom-properties="[object Object]">Select a Country</option>-->
                                            <!--    <option value="india">India</option>-->
                                            <!--    <option value="Dubai">Dubai</option>-->
                                            <!--    <option value="saudhi">Saudhi</option>-->
                                               
                                            <!--</select>-->
                                        <!--    <div id="countryerror">-->
                                                
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="mb-3">-->
                                        <!--    <label for="dueDate" class="form-label">City</label>-->
                                        <!--    <input type="text" name="city" class="form-control" placeholder="Enter city name" required>-->
                                        <!--    <div id="cityerror">-->
                                                
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--   <div class="mb-3">-->
                                        <!--    <label for="dueDate" class="form-label">State</label>-->
                                        <!--    <input type="text" class="form-control" name="state" id="dueDate" data-provider="flatpickr" placeholder="Enter state name" required>-->
                                        <!--    <div id="stateerror">-->
                                                
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!-- <div class="mb-3">-->
                                        <!--    <label for="dueDate" class="form-label">Password</label>-->
                                        <!--    <input type="text" class="form-control" name="password" placeholder="Enter Password" required>-->
                                        <!--    <div id="passworderror">-->
                                                
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!-- <div class="mb-3">-->
                                        <!--    <label class="form-label" for="password-input">Password</label>-->
                                        <!--    <div class="position-relative auth-pass-inputgroup">-->
                                        <!--        <input type="password" name="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>-->
                                        <!--        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>-->
                                        <!--    </div>-->
                                        <!--    <div id="passwordInput" class="form-text">Must be at least 8 characters.</div>-->
                                        <!--</div>-->
                                        <!--<div id="passworderror">-->
                                                
                                        <!--    </div>-->
                                        <!--  <div id="password-contain" class="p-3 bg-light mb-2 rounded">-->
                                        <!--    <h5 class="fs-13">Password must contain:</h5>-->
                                        <!--    <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>-->
                                        <!--    <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>-->
                                        <!--    <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>-->
                                        <!--    <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>-->
                                        <!--</div>-->
                                        <!-- <div class="mb-3">-->
                                        <!--    <label for="dueDate" class="form-label">Confirm Password</label>-->
                                        <!--    <input type="text" class="form-control" name="con_password" placeholder="Confirm password" required>-->
                                        <!--    <div id="cpasserror">-->
                                                
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--  <div class="mb-3">-->
                                        <!--    <label for="deatType" class="form-label">ID Proof Type</label>-->
                                        <!--    <select class="form-select" id="deatType" name="proof_type" data-choices aria-label="Default select example" required>-->
                                        <!--        <option value="" data-custom-properties="[object Object]">Select</option>-->
                                        <!--        <option value="aadhar">Aadhar</option>-->
                                        <!--        <option value="passport">Passport</option>-->
                                        <!--        <option value="pan">PAN</option>-->
                                        <!--        <option value="voterid">Voter ID</option>-->
                                        <!--    </select>-->
                                        <!--    <div id="prooferror">-->
                                                
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="mb-3">-->
                                        <!--    <label for="formFile" class="form-label">ID Proof (Upload Here)</label>-->
                                        <!--    <input class="form-control" name="userfile" type="file" id="formFile">-->
                                        <!--</div>-->
                                    </div>
                                    <div class=" d-flex justify-content-center">
                                      <div  class="mb-4">
                                            <button type="button" class="btn btn-danger me-3" id="close-modal" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" id="" class="btn btn-success"> Submit</button>
                                      </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end modal-->
                    
                    
                    
                     <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Account Creation History</h5>
                                </div>
                                <div class="card-body">
                                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                
                                                <th>Sl.No</th>
                                                <th>Account ID</th>
                                                <th>Group</th>
                                                <th>Balance</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $accounts = $this->db->order_by('id','DESC')->where('user_id',$this->session->userdata('usquareusername'))->get('accounts')->result_array();
                                        $count = 1;
                                        foreach($accounts as $key => $acc){
                                            // $wallet = $this->db->select('sum(credit) - sum(debit) as balance')->where('user_id',$acc['account_id'])->get('e_wallet')->row()->balance+0;
                                            $wallet = $this->mt5->get_trade_balance($acc['account_id']);
                                            $userdetails = $this->db->where('username',$acc['user_id'])->get('user_role')->row_array(); 
                                        ?>
                                            <tr>
                                               
                                                <td><?=$count++;?></td>
                                                <td><?php if($acc['account_id'] !=""){ echo $acc['account_id']; }else{ echo "--"; }?></td>
                                                <td><?=$acc['package'];?></td>
                                                <td id="walletvalue">$<?=$wallet?></td>
                                                <td>
                                                    <?php 
                                                    if($acc['status'] == "Active"){ ?> 
                                                        <button type="button" class="btn btn-success waves-effect waves-light  edit_info" data-bs-toggle="modal" data-id='<?=$acc["account_id"]?>' data-bs-target="#varyingcontentModal" data-bs-whatever="@mdo"><i class="fa-solid fa-dollar-sign me-2"></i>Add Fund</button>
                                                       
                                                        <button type="button" class="btn btn-danger waves-effect waves-light  edit_infoo" data-bs-toggle="modal" data-id='<?=$acc["account_id"]?>' data-wvalue='<?=number_format($wallet,2);?>' data-bs-target="#Withdraw" ><i class="fa-solid fa-dollar-sign me-2"></i>Withdraw</button>
                                                        
                                                         <a href="<?=BASEURL?>user/view/<?=bin2hex($acc["id"]);?>"><button type="button" class="btn  btn-primary waves-effect waves-light"><i class="fa-solid fa-eye me-2"></i>View</button></a>
                                                    <?php } else { ?>
                                                        <a class="btn btn-info " href=""><i class="fa-solid fa-arrows-rotate me-2"></i> Refresh</a>
                                                    <?php } ?>
                                                    
                                                    
                                                    
                                                    </td>
                                                <!--<td><?=$acc['pwd_hint']?></td>-->
                                                <!--<td><?=$acc['investor_pwd']?></td>-->
                                                <!-- <td>-->
                                                <!--     <a href="<?=BASEURL?>user/acc_login/<?=bin2hex($acc['email']);?>/<?=bin2hex($acc['pwd_hint']);?>">-->
                                                <!--       <button type="button" class="btn btn-primary btn-label view-btn right rounded-pill"><i class="fa-solid fa-lock me-2"></i>Login</button>-->
                                                <!--     </a>-->
                                                <!--</td>-->
                                                
                                            </tr>
                                        <?php } ?>  
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

        <!--Modal for Add Fund Starts-->
        <!-- Varying modal content -->
        <div class="modal fade" id="varyingcontentModal" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!--<h5 class="modal-title" id="varyingcontentModalLabel">New message</h5>-->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--<form>-->
                              <div class="card">
                                <div class="card-body position-relative">
                                    <h5 class="mb-3">Add Fund</h5>
                                    <div class="vstack gap-2">
                                        <div class="form-check card-radio">
                                            <input id="listGroupRadioGrid1" name="listGroupRadioGrid" type="radio" class="form-check-input" checked>
                                            <label class="form-check-label" for="listGroupRadioGrid1">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xs">
                                                            <div class="avatar-title bg-soft-success text-success fs-18 rounded">
                                                                <i class="fa-solid fa-wallet"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1">Wallet Balance</h6>
                                                        <?php $wallet = $this->db->select('sum(credit) - sum(debit) as balance')->where('user_id',$this->session->userdata('usquareusername'))->get('e_wallet')->row()->balance+0; ?>
                                                        <b id="balan" class="pay-amount"><?=number_format($wallet,2)?></b>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <form action="<?=BASEURL?>user/transfer" method="post">        
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Add Fund: <?=form_error('amount');?></label>
                                            <div class="input-group">
                                                <input type="hidden" class="form-control" name="hids" id="hids">
                                                <span style="font-weight:900;" class="input-group-text">$</span>
                                                <input type="number" class="form-control" name="amount" aria-label="Amount (to the nearest dollar)">
                                                <span style="font-weight:900;" class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success w-100 mt-3" id="">Confirm</button>
                                    </form>
                                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                                        <div class="alert alert-warning" role="alert">
                                            Select at list one item
                                        </div>
                                    </div>
                                    <!-- notification-warning -->
                        
                                    <div class="notification-elem" id="notification-overlay">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                            <div class="mt-4 pt-2">
                                                <h3 class="text-center text-primary">Congratulations !!</h3>
                                                <!--<h5 class="mb-1 success-pay">$6,201 Payment added Successfully to your Wallet.</h5>-->
                                                <p class="text-muted mx-4">Aww yeah, you successfully added $789 to your Wallet</p>
                        
                                                <div>
                                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- notification-overlay -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                           
                            
                        <!--</form>-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
          </div>

  <!--Modal for Withdraw-->
        <div class="modal fade" id="Withdraw" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!--<h5 class="modal-title" id="Withdraw">New message</h5>-->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--<form>-->
                              <div class="card">
                                <div class="card-body position-relative">
                                    <h5 class="mb-3">Withdraw</h5>
                                    <div class="vstack gap-2">
                                        <div class="form-check card-radio">
                                            <input id="listGroupRadioGrid1" name="listGroupRadioGrid" type="radio" class="form-check-input" checked>
                                            <label class="form-check-label" for="listGroupRadioGrid1">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-xs">
                                                            <div class="avatar-title bg-soft-success text-success fs-18 rounded">
                                                                <i class="fa-solid fa-wallet"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-1">Account Balance</h6>
                                                        <b id="balance" class="pay-amount"></b>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <form action="<?=BASEURL?>user/account_withdraw" method="post">    
                                    
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Withdraw <span><?=form_error('amount');?></span></label>
                                            <div class="input-group">
                                                <input type="hidden" class="form-control" name="hids_id" id="hids_id">
                                                <span style="font-weight:900;" class="input-group-text">$</span>
                                                <input type="number" class="form-control" name="amount" aria-label="Amount (to the nearest dollar)">
                                                <span style="font-weight:900;" class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success w-100 mt-3" id="">Withdraw</button>
                                    </form>
                                    <div id="notification-warn" class="position-absolute top-0 start-0 end-0 d-none">
                                        <div class="alert alert-warning" role="alert">
                                            Select at list one item
                                        </div>
                                    </div>
                                    <!-- notification-warning -->
                        
                                    <div class="notification-elem" id="notification-overlay">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                            <div class="mt-4 pt-2">
                                                <h3 class="text-center text-primary">Congratulations !!</h3>
                                                <!--<h5 class="mb-1 success-pay">$6,201 Payment added Successfully to your Wallet.</h5>-->
                                                <p class="text-muted mx-4">Aww yeah, you successfully added $789 to your Wallet</p>
                        
                                                <div>
                                                    <button type="button" class="btn btn-success btn-sm w-sm" id="back-btn">Back to Home</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- notification-overlay -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                           
                            
                        <!--</form>-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
          </div>

</div>



<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>      -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

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
$(document).on('click', '.edit_info', function() {
    //alert("hiii");
    var dt_id = $(this).attr("data-id");
    $("#hids").val(dt_id);

});
</script>

<script>
$(document).on('click', '.edit_infoo', function() {
    //alert("hiii");
    var dt_id = $(this).attr("data-id");
    $("#hids_id").val(dt_id);
    var waalletvalue = $(this).attr("data-wvalue");
$("#balance").html('$'+waalletvalue);

});
</script>

  <!-- cleave.js -->
    <script src="<?=BASEURL?>assets/libs/cleave.js/cleave.min.js"></script>

    <script src="<?=BASEURL?>assets/js/pages/crm-deals.init.js"></script>

  
     <!-- Sweet Alerts js -->
    <!--<script src="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.js"></script>-->

    <!-- Sweet alert init js-->
    <!--<script src="<?=BASEURL?>assets/js/pages/sweetalerts.init.js"></script>-->
    
     <!-- password-addon init -->
    <script src="<?=BASEURL?>assets/js/pages/passowrd-create.init.js"></script>

<script>
//     $(document).ready(function() {
//         //alert("hiii");
//     $('#regist').submit(function(e) {
//         //alert("Hiiii");
//         e.preventDefault();
//         $("#account-create-success").prop("disabled", true);
//         $("#account-create-success").html('Wait...');
//         var formData = new FormData($(this)[0]);

//         $.ajax({
//             url: '<?php echo base_url('admin/account_register'); ?>',
//             type: 'POST',
//             data: formData,
//             processData: false,
//             contentType: false,
//             success: function(response) {
//                 response = JSON.parse(response);
//                 alert(response.status);
//                 if (response.status == 'success') {
//                     $('#regist')[0].reset();
//                     location.reload();
//                 } else {
//                     $('#fnameerror').html(response.fname_error);
//                     $('#lnameerror').html(response.lname_error);
//                     $('#emailerror').html(response.useremail_error);
//                     $('#phoneerror').html(response.phone_error);
//                     $("#account-create-success").prop("disabled", false);
//                     $("#account-create-success").html('Sign Up');
//                     //alert(response.message);
//                 }
//             }
//         });
//     });
// });
</script>

<!--Custom CSS-->

 <!-- apexcharts -->
    <script src="<?=BASEURL?>assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="<?=BASEURL?>assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="<?=BASEURL?>assets/libs/jsvectormap/maps/world-merc.js"></script>
    <script src="<?=BASEURL?>assets/libs/jsvectormap/maps/us-merc-en.js"></script>

    <!-- Swiper Js -->
    <script src="<?=BASEURL?>assets/libs/swiper/swiper-bundle.min.js"></script>

    <script src="<?=BASEURL?>assets/js/pages/form-input-spin.init.js"></script>

    <script src="<?=BASEURL?>assets/libs/card/card.js"></script>

    <!-- Widget init -->
    <script src="<?=BASEURL?>assets/js/pages/widgets.init.js"></script>

    <!-- App js -->
    <script src="<?=BASEURL?>assets/js/app.js"></script>


<?php include 'footer.php';?>