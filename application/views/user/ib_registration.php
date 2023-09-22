<?php include 'header.php';?>



<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="<?=BASEURL?>assets/css/registration.css" />
<link rel="stylesheet" type="text/css" href="<?=BASEURL?>assets/css/deposit.css" />

 <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

<style>
    .input-group-text{
    background-color: #20604f;
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
.withdrawib-btn{
    background-color:#FE8E4C !important;
}
.ib-container{
    font-family: 'Barlow', sans-serif !important;
}
.form-control,.form-select{
    border: 1px solid #00b074 !important;
}
.portal-card{
    background-color: #D8F1E9!important;
}
@media screen and (max-width:500px){
    .ib-container{
        padding-left:0px !important;
        padding-right:0px !important;
    }
    .row>*{
        padding-left:10px !important;
        padding-right:10px !important;
    }
    #back-to-top{
        display:none !important;
    }
}
.commission-badge {
    background-color: #20604f !important;
    padding: 5px 10px !important;
}
.social-container{
    margin-top:0 !important;
}
.effect .buttons {
    margin-top: 0px !important;
}
.effect:nth-child(2) {
    margin-top: 28px !important;
}
@media screen and (max-width:575px){
    .effect:nth-child(2) {
      padding-left: 20px !important;
}
}
@media screen and (min-width: 992px){
.effect .buttons {
     padding: 0px 0px !important; 
}
}

.myclients-card{
    background-color: #D8F1E9!important;
}

tbody, td, tfoot, th, thead, tr {
    border-color: #00b074 !important;
}

td{
    color:#353b48 !important;
    font-size:14px !important;
    font-weight:600 !important;
}
th{
    font-size:16px !important;
}
table.dataTable td.dataTables_empty, table.dataTable th.dataTables_empty {
    
    --vz-table-accent-bg: #d8f1e9 !important;
}
.table-card{
    border: 2px solid #00b074;
    border-radius:0px !important;
}
</style>
   
 <div class="container-fluid ib-container">
    <div class="row">
    <div class="col-xxl-12">
                            <h5 class="mb-3 ms-2 ms-lg-0 ms-md-0">IB Registration</h5>
                            <div class="card portal-card mb-0">
                                <div class="card-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav animation-nav nav-pills mb-3" role="tablist">
                                        <li class="nav-item waves-effect waves-light me-2 me-sm-2 me-md-2 me-lg-4">
                                            <a class="nav-link active main-ib-tab" data-bs-toggle="tab" href="#pill-justified-home-1" role="tab">
                                                <i class="fa-solid fa-desktop me-2"></i>IB Dashboard
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link main-ib-tab" data-bs-toggle="tab" href="#pill-justified-profile-1" role="tab">
                                                <i class="fa-solid fa-users me-2"></i>My Clients
                                            </a>
                                        </li>

                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active" id="pill-justified-home-1" role="tabpanel">
                                            <!--<div class="row">-->
                                            <!--    <div class="d-flex justify-content-end">-->
                                                    
                                            <!--         <a href="#IBCommissionModal" data-bs-toggle="modal" type="button" class="btn-red btn btn-danger waves-effect waves-light"><i class="fa-solid fa-dollar-sign me-2"></i>Withdraw IB Commission</a> <!--href="<?=BASEURL?>user/withdraw_ib_commission"-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                             <!--Modal for IB Commission Starts-->
                                                    <div class="modal fade" id="IBCommissionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content border-0">
                                                            <div class="modal-header bg-white p-3">
                                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                            </div>
                                                            <form class="tablelist-form" autocomplete="off" method="post" action="#">
                                                                <div class="modal-body">
                                                                    <input type="hidden" id="tuser" name="user_id"/>
                                                                    <div class="row g-3">
                                                                  
            
                                                                        <!--end col-->
                                                                        <div class="col-lg-12">
                                                                            <div class="d-flex justify-content-end align-items-end mb-3 mt-0">
                                                                                <a href="<?=BASEURL?>user/ibcommission_withdraw_history"><span class="badge text-bg-success commission-badge"><i class="fa-solid fa-arrow-right-long me-2"></i>View IB Commission Withdraw History<i class="fa-solid fa-eye ms-1"></i></span></a>
                                                                                </div>
                                                                            <div class="mb-2">
                                                                                <label for="basiInput" class="form-label">Amount</label>
                                                                                <input type="number" class="form-control" id="" name="amount">
                                                                            </div>
                                                                               
                                                                            <div class="d-flex justify-content-center mt-3">
                                                                                <button type="submit" class="btn submit-btn btn-primary waves-effect waves-light"><i class="fa-regular fa-circle-check me-2"></i>Submit</button>
                                                                            </div>
                                                                            <button type="button" data-toast data-toast-text="Your Request Submitted Sucessfully !!" data-toast-gravity="top" data-toast-position="center" data-toast-className="success" data-toast-duration="3000" class="btn btn-light w-xs">Success</button>
                                                                            <button type="button" data-toast data-toast-text="Please Enter Amount" data-toast-gravity="top" data-toast-position="center" data-toast-className="danger" data-toast-duration="3000" class="btn btn-light w-xs">Error</button>
                                                                        </div>
                                                                       
                                                                        <!--end col-->
                                                                    </div>
                                                                    <!--end row-->
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <div class="hstack gap-2 justify-content-end">
                                                                        <button type="button" class="btn btn-light btn-red text-white" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <!--Modal for IB Commission Ends-->
                                            <div class="row mt-5">
                                            <div class="col-xl-4 col-md-6">
                                                <!-- card -->
                                                <?php $commission = $this->db->select('sum(credit) - sum(debit) as balance')->where('username',$this->session->userdata('usquareusername'))->get('account')->row()->balance+0;
                                                $ibbalance = $this->db->select('sum(credit) as balance')->where('username',$this->session->userdata('usquareusername'))->get('account')->row()->balance+0;?>
                                                
                                                <div style="background-color:#20604f;" class="card card-animate">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <p class="text-uppercase fw-medium text-white mb-0">Total IB Commission Received</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                                            <div>
                                                                <h4 class="fs-22 fw-semibold text-white ff-white mb-4">$<span class="counter-value ms-1" data-target="<?=$ibbalance;?>"><?=$commission;?></span></h4>
                                                                <a style="color:#dfe4ea;text-underline-offset:2px;" href="<?=BASEURL?>user/ib_commission_report" class="text-decoration-underline">View all commissions</a>
                                                            </div>
                                                            <div class="avatar-sm flex-shrink-0 ib-bg-avatar">
                                                                <span class="avatar-title bg-soft-success rounded fs-3">
                                                                    <img height="50" src="<?=BASEURL?>assets/images/svg/dollar-red.gif">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            </div><!-- end col -->
                    
                                            <div class="col-xl-4 col-md-6">
                                                <!-- card -->
                                                <div style="background-color:#20604f;" class="card card-animate">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <p class="text-uppercase fw-medium text-white mb-0">Total IB Commission Withdrawal</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                                            <div>
                                                                <?php $withdraw_his = $this->db->select_sum('credited_amount')->where('user_id',$this->session->userdata('usquareusername'))->get('ib_withdraw_request')->row()->credited_amount+0;?>
                                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-white">$<span class="counter-value ms-1" data-target="<?=$withdraw_his;?>"><?=$withdraw_his;?></span></h4>
                                                                <a style="color:#dfe4ea;text-underline-offset:2px;" href="<?=BASEURL?>user/ibcommission_withdraw_history" class="text-decoration-underline">View withdrawal history</a>
                                                            </div>
                                                            <div class="avatar-sm flex-shrink-0 ib-bg-avatar">
                                                                <span class="avatar-title bg-soft-success rounded fs-3">
                                                                   <img height="50" src="<?=BASEURL?>assets/images/svg/dollar-red.gif">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                            </div><!-- end col -->
                    
                                            <div class="col-xl-4 col-md-6">
                                                <!-- card -->
                                           <div style="cursor:pointer;background-color:#20604f;" data-bs-toggle="modal" data-bs-target="#Withdraw" class="card card-animate">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-grow-1">
                                                                <p class="text-uppercase fw-medium text-white mb-0">Available IB Balance</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                                            <div>
                                                                <h4 class="fs-22 text-white fw-semibold ff-secondary mb-4">$<span class="counter-value ms-1" data-target="<?=$commission;?>"><?=$commission;?></span></h4>
                                                                <a style="color:#dfe4ea;" href="#">Withdraw<i class="fa-solid fa-arrow-down ms-1"></i></a>
                                                            </div>
                                                            <div class="avatar-sm flex-shrink-0 ib-bg-avatar">
                                                                <span class="avatar-title bg-soft-success rounded fs-3">
                                                                  <img height="50" src="<?=BASEURL?>assets/images/svg/dollar-red.gif">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card body -->
                                                </div><!-- end card -->
                                                
                                                
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
                                                                                                <b id="balance" class="pay-amount"><?=$commission;?></b>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <form action="<?=BASEURL?>user/withdraw_ib_commission" method="post">    
                                                                            
                                                                                <div class="mb-3">
                                                                                    <label for="recipient-name" class="col-form-label">Withdraw <?=form_error('amount');?></label>
                                                                                    <div class="input-group">
                                                                                        <input type="hidden" class="form-control" name="hids_id" id="hids_id">
                                                                                        <span style="font-weight:900;" class="input-group-text input-usd text-white">$</span>
                                                                                        <input type="text" required class="form-control" name="amount" aria-label="Amount (to the nearest dollar)">
                                                                                        <span style="font-weight:900;" class="input-group-text input-usd text-white">.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                <button type="submit" class="btn btn-green btn-success w-100 mt-3" id=""><i class="fa-regular fa-circle-check me-2"></i>Withdraw</button>
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
                                                
                                            </div><!-- end col -->
                    
                                            
                                        </div> <!-- end row-->
                                        <div class="row mt-4">
                                            <div class="col-lg-6">
                                               <div class="social-container">
                                        <h4 style="font-family: 'Barlow', sans-serif !important;" class="text-center text-red">Share Registration Link to Social Media</h4>
                                            <div class="effect aeneas">
                                                <div class="buttons">
                                                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style row" data-a2a-url="<?=BASEURL?>admin/registration/live/<?=bin2hex($this->session->userdata('usquareusername'));?>" data-a2a-title="SQUARE MARKETS">
                                                  <div class="col-4 col-sm-3 col-lg-2 col-md-2 mb-3 mb-lg-4">     
                                                <a class="a2a_button_facebook fb" rel="nofollow noopener" href="/#facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Share to Facebook"  ><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>

                                                </div> 
                                                <div class="col-4 col-sm-3 col-lg-2 col-md-2 mb-3 mb-lg-4"> 
                                                <a class="a2a_button_whatsapp whatsapp" target="_blank" href="/#whatsapp" rel="nofollow noopener"  data-bs-toggle="tooltip" data-bs-placement="top" title="Share to Whatsapp"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>
                                                </div> 
                                               
                                                <div class="col-4 col-sm-3 col-lg-2 col-md-2 mb-3 mb-lg-4">
                                                <a class="a2a_button_twitter tw" target="_blank" href="/#twitter" rel="nofollow noopener" data-bs-toggle="tooltip" data-bs-placement="top" title="Share to Twitter" title="Join us on Twitter"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
                                                </div>

                                                <div class="col-4 col-sm-3 col-lg-2 col-md-2 mb-3 mb-lg-4"> 
                                                <a class="a2a_button_whatsapp whatsapp" target="_blank" href="/#whatsapp" rel="nofollow noopener" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Share to Whatsapp Business"  class="whatsapp" ><i class="fa-brands fa-square-whatsapp" aria-hidden="true"></i></a>
                                                </div> 
                                                <div class="col-4 col-sm-3 col-lg-2 col-md-2 mb-3 mb-lg-4">
                                                <a href="https://www.instagram.com/sharer.php?url=<?=BASEURL?>admin/registration/live/<?=bin2hex($this->session->userdata('usquareusername'));?>/"  rel="noopener" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Share to Instagram" class="insta" ><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="col-4 col-sm-3 col-lg-2 col-md-2 mb-3 mb-lg-4">
                                                <a class="a2a_button_linkedin in" target="_blank" href="/#linkedin" rel="nofollow noopener" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Share to Linked In" ><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
                                               </div>
                                              
                                                </div> 
                                                </div>
                                                <!--Button Ends-->
                                                </div>
                                             </div>
                                            </div>
                                            <div class="col-lg-6">
                                               <!-- Copy to Clipboard starts-->
                                                 <div style="padding-right:0;padding-left:0;" class="row d-flex justify-content-center">
                                                     <h4 style="font-family: 'Barlow', sans-serif !important;" class="text-center text-red">Referral Link</h4>
                                                     <div class="container-copy text-center w-50 mt-3">
                                                        <div class="copy-text gradient-border" id="gradient-border">
                                                            <input type="text" class="text" value="<?=BASEURL?>admin/registration/live/<?=bin2hex($this->session->userdata('usquareusername'));?>" />
                                                            <button data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click to Copy"><i class="fa fa-clone copy-icon"></i></button>
                                                        </div>
                                                     </div>
                                                 </div>
                                                 <!-- Copy to Clipboard ends-->
                                            </div>
                                        </div>
                                      </div>
                                           
                        
                                        <div class="tab-pane" id="pill-justified-profile-1" role="tabpanel">
                                             <!-- Table Starts -->
                                            <div class="row mt-2">
                                                  <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12">
                                                            <!-- Nav tabs -->
                                                            <ul class="nav nav-pills nav-pills-clients animation-nav clients-nav nav-justified mb-3 mt-3" role="tablist">
                                                                <li class="nav-item waves-effect waves-light me-3">
                                                                    <a style="padding-top:11px;padding-bottom:11px;" class="nav-link active-client active" data-bs-toggle="tab" href="#active-clients" role="tab">
                                                                        <i class="fa-solid fa-user-check me-2"></i>Active Clients
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item waves-effect waves-light">
                                                                    <a style="padding-top:11px;padding-bottom:11px;" class="nav-link inactive-client" data-bs-toggle="tab" href="#inactive-clients" role="tab">
                                                                        <i class="fa-solid fa-user-xmark me-2"></i>Inactive Clients
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <!-- Tab panes -->
                                                            <div class="tab-content text-muted">
                                                                <div class="tab-pane active" id="active-clients" role="tabpanel">
                                                                    <div class="row">
                                                                         <div class="col-lg-12">
                                                                            <div style="border: 2px solid #00b074;" class="card myclients-card my-2">
                                                                            <div class="card-header myclients-card">
                                                                                <h5 class="card-title mb-0">Active Users History</h5>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <table id="scroll-horizontal1" class="table nowrap align-middle" style="width:100%">
                                                                                    <thead>
                                                                                        <tr>
                                                                                        <th>Sl.No</th>
                                                                                        <th>Created Date</th>
                                                                                        <th>First Name</th>
                                                                                        <th>Middle Name</th>
                                                                                        <th>Last Name</th>
                                                                                        <th>Email</th>
                                                                                        <th>My Commision</th>
                                                                                        <th>Action</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    <?php
                                                                                    $count =1;
                                                                                    $accounts= $this->db->where('ref_id',$this->session->userdata('usquareusername'))->get('user_role')->result_array();
                                                                                    foreach($accounts as $key => $acc)
                                                                                    {
                                                                                        $acctive = $this->db->where('user_id',$acc['username'])->get('accounts')->row_array();
                                                                                        if(!empty($acctive)){
                                                                                    ?>
                                                                                        <tr>
                                                                                        <td><?=$count++;?></td>
                                                                                         <td>
                                                                                            <?=$acc['entry_date'];?>
                                                                                        </td>
                                                                                        <td><?=$acc['fname'];?></td>
                                                                                        <td><?=$acc['mname'];?></td>
                                                                                        <td><?=$acc['lname'];?></td>
                                                                                        <td><?=$acc['email'];?></td>
                                                                                       
                                                                                        <td>$0</td>
                                                                                        
                                                                                        <td>
                                                                                        <a href="<?=BASEURL?>user/ipview/<?=$acctive['id']?>"><button type="button" class="btn rounded-pill btn-primary waves-effect waves-light"><i class="fa-solid fa-eye me-2"></i>View</button></a>
                                                                                        </td>
                                                                                        </tr>
                                                                                       <?php }} ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="inactive-clients" role="tabpanel">
                                                                    <div class="row">
                                                                         <div class="col-lg-12">
                                                                            <div style="border: 2px solid #00b074;" class="card myclients-card my-2">
                                                                            <div class="card-header myclients-card">
                                                                                <h5 class="card-title mb-0">Inactive Users History</h5>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <table id="scroll-horizontal2" class="table nowrap align-middle" style="width:100%">
                                                                                    <thead>
                                                                                        <tr>
                                                                                        <th>Sl.No</th>
                                                                                        <th>Created Date</th>
                                                                                        <th>First Name</th>
                                                                                        <th>Middle Name</th>
                                                                                        <th>Last Name</th>
                                                                                        <th>Email</th>
                                
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    <?php
                                                                                    $count =1;
                                                                                    $accountsx= $this->db->where('ref_id',$this->session->userdata('usquareusername'))->get('user_role')->result_array();
                                                                                    foreach($accountsx as $key => $accx)
                                                                                    {
                                                                                        $acctivex = $this->db->where('user_id',$accx['username'])->get('accounts')->row_array();
                                                                                        if(empty($acctivex)){
                                                                                    ?>
                                                                                        <tr>
                                                                                        <td><?=$count++;?></td>
                                                                                         <td>
                                                                                            <?=$accx['entry_date'];?>
                                                                                        </td>
                                                                                        <td><?=$accx['fname'];?></td>
                                                                                        <td><?=$accx['mname'];?></td>
                                                                                        <td><?=$accx['lname'];?></td>
                                                                                        <td><?=$accx['email'];?></td>
                                                                                        </tr>
                                                                                       <?php }} ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                      
                                                </div>
                                                <!--end col-->
                                               
                                            </div>
                                        </div>
            
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
    </div>     

    </div>
<!-- container-fluid -->
   
<!-- Script for Copy to Clipboard -->
<script type="text/javascript">
    let copyText = document.querySelector(".copy-text");
copyText.querySelector("button").addEventListener("click", function () {
	let input = copyText.querySelector("input.text");
	input.select();
	document.execCommand("copy");
	copyText.classList.add("active");
	window.getSelection().removeAllRanges();
	setTimeout(function () {
		copyText.classList.remove("active");
	}, 3000);
});

</script>

 
    <script>
var a2a_config = a2a_config || {};
a2a_config.onclick = 1;
</script>


<script async="" src="https://static.addtoany.com/menu/page.js">

</script>
                
        <!-- prismjs plugin -->
   <script src="<?=BASEURL?>assets/libs/prismjs/prism.js"></script>

         
 
  

<?php include 'footer.php';?>
  
                 
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
    
     <!-- notifications init -->
    <script src="<?=BASEURL?>assets/js/pages/notifications.init.js"></script>
                
   
    <script>
      $(document).ready(function () {
    $('#scroll-horizontal1').DataTable();
});
        $(document).ready(function () {
    $('#scroll-horizontal2').DataTable();
});

</script>
  
  