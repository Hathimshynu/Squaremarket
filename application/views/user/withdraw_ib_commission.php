<?php include 'header.php';?>

<style>
.banktable{
    overflow :auto;
}
   .my-div {
   display: none;
   }
   .acc-details, .qr-code{
   box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
   }
   .col-sm-12 {
   overflow: auto;
   }
   .eye-icon{
   width:20px !important;
   height:19px !important;
   }
   i.fa-solid.fa-eye {
   font-size: 11px !important;
   }
   .bank-transfer-bg, .trc-20-wallet{
   box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
   }
   .qr-code{
   box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
   }
   @media screen and (max-width:768px){
   .ifsc-details{
   margin-top:10px !important;
   }
   .deposit-methods{
   padding-right:5px !important;
   padding-left:5px !important;
   }
   }
   @media screen and (min-width:300px) and (max-width:430px){
   span.badge.bg-primary.text-center.fw-medium.mb-3.fs-15{
   font-size:11px !important;
   }
   }
   @media screen and (min-width:431px) and (max-width:768px){
   span.badge.bg-primary.text-center.fw-medium.mb-3.fs-15{
   font-size:13px !important;
   }
   }
   /*Border Animation*/
   @property --angle {
   syntax: '
   <angle>
   ';
   initial-value: 90deg;
   inherits: true;
   }
   @property --gradX {
   syntax: '
   <percentage>
   ';
   initial-value: 50%;
   inherits: true;
   }
   @property --gradY {
   syntax: '
   <percentage>
   ';
   initial-value: 0%;
   inherits: true;
   }
   :root {
   --d: 2500ms;
   --angle: 90deg;
   --gradX: 100%;
   --gradY: 50%;
   --c1: rgba(168, 239, 255, 1);
   --c2: rgba(168, 239, 255, 0.1);
   }
   .border-animation{
   border: 0.35rem solid;
   border-image: conic-gradient(from var(--angle), var(--c2), var(--c1) 0.1turn, var(--c1) 0.15turn, var(--c2) 0.25turn) 30;
   animation: borderRotate var(--d) linear infinite forwards;
   }
   @keyframes borderRotate {
   100% {
   --angle: 420deg;
   }
   }
   @keyframes borderRadial {
   20% {
   --gradX: 100%;
   --gradY: 50%;
   }
   40% {
   --gradX: 100%;
   --gradY: 100%;
   }
   60% {
   --gradX: 50%;
   --gradY: 100%;
   }
   80% {
   --gradX: 0%;
   --gradY: 50%;
   }
   100% {
   --gradX: 50%;
   --gradY: 0%;
   }
   }
   .input-usd{
   background-color:#FE8E4C !important;
   }
   .badge-gradient-success {
    border: 2px solid #ffa567;
    border-radius: 7px;
}
.commission-card{
    background-color: #D8F1E9!important;
}
.form-control,.form-select{
    border: 1px solid #00b074 !important;
}
.commission-container{
    font-family: 'Barlow', sans-serif !important;
}
.balance-badge {
    background-color: #20604f !important;
    font-weight: 800 !important;
    font-size: 16px !important;
}
@media screen and (max-width:500px){
    .row>* {
        padding-right: 8px !important;
        padding-left: 8px !important;
    }
}
</style>
<!-- aos css -->
<link rel="stylesheet" href="<?=BASEURL?>assets/libs/aos/aos.css" />
<!--Custom CSS-->
<link href="<?=BASEURL?>assets/css/deposit.css" rel="stylesheet" type="text/css" />
<!--datatable css-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
<!--datatable responsive css-->
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">



<!-- Sweet Alert css-->
<link href="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
<div class="container-fluid commission-container">
<div class="row">
   <div class="col-xxl-12 col-lg-12">
      <h5 class="mb-3">Withdrawl</h5>
      <!--<div class="card">-->
      <!--   <div class="card-body">-->
            <!--<ul class="nav nav-pills nav-justified mb-3" role="tablist">-->
            <!--   <li class="nav-item waves-effect waves-light">-->
            <!--      <a class="nav-link active" data-bs-toggle="tab" href="#pill-justified-home-1" role="tab">-->
            <!--      Manual Withdrawl-->
            <!--      </a>-->
            <!--   </li>-->
               <!--<li class="nav-item waves-effect waves-light">-->
               <!--    <a class="nav-link" data-bs-toggle="tab" href="#pill-justified-profile-1" role="tab">-->
               <!--        Auto Deposit-->
               <!--    </a>-->
               <!--</li>-->
            <!--</ul>-->
            <!-- Tab panes -->
            <div class="tab-content text-muted">
               <div class="tab-pane active" id="pill-justified-home-1" role="tabpanel">
                  <div class="row">
                     <div class="col-lg-12">
                         <?php $wallet = $this->db->select('sum(credit) - sum(debit) as balance')->where('username',$this->session->userdata('usquareusername'))->get('account')->row()->balance+0;?>
                        <div class="card commission-card">
                           <div class="card-header commission-card align-items-center d-block d-sm-block d-lg-flex d-md-flex d-xl-flex d-xxl-flex">
                              <h4 class="card-title mb-0 flex-grow-1">IB Commission Withdrawl</h4>
                              <h4 class="card-title mb-0 flex-grow-1 mt-3 mt-sm-3 mt-md-0 mt-lg-0 mt-xl-0 mt-xxl-0"><span class="">Balance:</span> <span class="badge balance-badge p-2"><span class="me-1">$</span><?=$wallet;?></span></h4>
                           </div>
                           <!-- end card header -->
                           <div class="card-body">
                              <div class="live-preview">
                                 <div class="row gy-4">
                                    <div class="col-lg-6">
                                       <form action="<?=BASEURL?>user/withdraw_ib_commission" method="post" id="hockey"> 
                                       <div class="row">
                                            
                                          <div class="col-xxl-12 col-md-12 mb-3">
                                            
                                                <label for="tid" class="form-label">Payment Mode <span><?=form_error('mode');?></span></label>
                                                <select class="form-select" name="mode" id="my-select">
                                                   <option selected value = "">Select Paymode</option>
                                                   <option value="Bank Transfer">Bank Transfer</option>
                                                   <!--<option value="div2">UPI</option>-->
                                                   <!--<option value="USDT TRC20 Wallet">USDT TRC20 Wallet</option>-->
                                                </select>
                                             
                                          </div>
                                          <!--end col-->
                                          <div class="col-xxl-12 col-md-12 mb-3">
                                             <label for="tid" class="form-label">Amount <span><?=form_error('amount');?></span></label>
                                             <div class="input-group">
                                                <span style="font-weight:900;background-color:#20604f;" class="input-group-text input-usd text-white">$</span>
                                                <input type="number" class="form-control" name="amount" aria-label="Amount (to the nearest dollar)">
                                                <span style="font-weight:900;background-color:#20604f;" class="input-group-text input-usd text-white">USD</span>
                                             </div>
                                          </div>
                                          
                                           <div class="col-xxl-12 col-md-12 mb-3">
                                             <label for="tid" class="form-label">Account <span><?=form_error('account');?></span></label>
                                             <select class="form-select" name="account" id="">
                                                   <option selected value = "">Select Account</option>
                                                   <?php $acc_name = $this->db->where('user_id',$this->session->userdata('usquareusername'))->get('bank_details')->result_array();
                                                   foreach($acc_name as $key => $acc_nn){
                                                   ?>
                                                   <option value="<?=$acc_nn['id']?>"><?=$acc_nn['acc_name'];?> - <?=$acc_nn['acc_no'];?></option>
                                                   <?php } ?>
                                                </select>
                                          </div>
                                       
                                       </div>
                                       <!--End Row-->
                                       <div class="d-flex justify-content-center">
                                          <button type="submit" id="" class="btn btn-primary submit-btn waves-effect waves-light"><i class="fa-regular fa-circle-check me-2"></i>Submit</button>
                                       </div>
                                       </form> 
                                    </div>
                                    <div class="col-lg-6" >
                                       <div class="card commission-card mt-4 border-animation acc-details  colors my-div" id="div1" data-aos="">
                                          <div class="card-body text-center">
                                             <h3 style="color:#ff0000;" class="text-red text-center">Bank Transfer | Account Details</h3>
                                          </div>
                                          <div class="card-body text-center">
                                                
                                             
                                          </div>
                                          <!-- Modal Starts-->
                                          <div class="modal fade" id="adddeals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                             <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                   <div class="modal-header bg-light p-3">
                                                      <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <form action="<?=BASEURL?>user/add_bank" method="POST" >
                                                      <div class="modal-body">
                                                         <div class="mb-3">
                                                            <label for="dealTitle" class="form-label">Account Name <span><?=form_error('acc_name');?></span></label>
                                                            <input type="text" class="form-control" id="" name="acc_name"  required>
                                                            <div class="invalid-feedback">
                                                               Account Name.
                                                            </div>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="dealTitle" class="form-label">Account Number <span><?=form_error('acc_no');?></span></label>
                                                            <input type="text" class="form-control" id="" name="acc_no" required>
                                                            <div class="invalid-feedback">
                                                               Account Number.
                                                            </div>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="dealTitle" class="form-label">Bank Name <span><?=form_error('bank_name');?></span></label>
                                                            <input type="text" class="form-control" id="" name="bank_name" value="" required>
                                                            <div class="invalid-feedback">
                                                               Bank Name.
                                                            </div>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="dealTitle" class="form-label">IFSC Code <span><?=form_error('ifsc');?></span></label>
                                                            <input type="text" class="form-control" id="" name="ifsc" value="" required>
                                                            <div class="invalid-feedback">
                                                               IFSC Code
                                                            </div>
                                                         </div>
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
                                          
                                          <?php $bank = $this->db->where('user_id',$this->session->userdata('usquareusername'))->where('status','Active')->get('bank_details')->row_array(); ?>
                                          
                                          <div class="p-lg-4 p-2 pt-0 ">
                                             <div class="text-bg-info bg-gradient p-4 bank-transfer-bg rounded-3">
                                                <div class="d-flex">
                                                   <div class="flex-grow-1">
                                                      <i class="bx bx-chip h1 text-warning"></i>
                                                   </div>
                                                   <div class="flex-shrink-0">
                                                      <i class="bx bxl-visa display-2 mt-n3"></i>
                                                   </div>
                                                </div>
                                                <div class="card-number fs-20 text-center" id="card-num-elem">
                                                   <?=$bank['acc_no'];?>
                                                </div>
                                                <div class="row mt-4">
                                                   <div class="col-6 col-lg-4">
                                                      <div>
                                                         <div class="text-white-50">Card Holder Name </div>
                                                         <div id="card-holder-elem" class="fw-medium fs-14"><?=$bank['acc_name'];?></div>
                                                      </div>
                                                   </div>
                                                   <div class="col-6 col-lg-4">
                                                      <div class="expiry">
                                                         <div class="text-white-50">Bank Name</div>
                                                         <div class="fw-medium fs-14">
                                                           
                                                            <div id="card-holder-elem" class="fw-medium fs-14"><?=$bank['bank_name'];?></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-12 col-lg-4 mt-lg-0 mt-sm-3 mt-md-3 ifsc-details">
                                                      <div>
                                                         <div class="text-white-50">IFSC Code</div>
                                                         <div id="cvc-elem" class="fw-medium fs-14"><?=$bank['ifsc'];?></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- end card div elem -->
                                          </div>

                                       </div>
                                      <?php $last_wallet = $this->db->order_by('id','desc')->where('user_id',$this->session->userdata('usquareusername'))->get('wallet_details')->row_array(); ?>
                                      <div class="row my-div" id="div3">
                                       <div class="card commission-card  mt-4   trc-20-wallet">
                                          <div class="row" style="background-image: url('<?=BASEURL?>assets/images/nft/bg-pattern.png');">
                                               <div class="card-body text-center">
                                                  <h3 class="text-primary text-center">TRC20 USDT Wallet</h3>
                                                  <span class="badge bg-primary text-center fw-medium mb-3 fs-15"><?=$last_wallet['wallet']?></span>
                                               </div>
                                                <div class="card-body text-end">
                                             <h4 class="text-primary text-center"><button data-bs-toggle="modal" data-bs-target="#adddeals1" class="btn btn-success"><i class="ri-add-fill align-bottom me-1"></i> Add TRC20 Wallet</button></h4>
                                          </div>
                                          
                                          </div>
                                        </div>
                                        <div class="row mt-5">
                                             <div class="col-lg-12">
                                                <div class="card">
                                                   <div class="card-header">
                                                      <h5 class="card-title mb-0">History</h5>
                                                   </div>
                                                   <div class="card-body" style="overflow-x:auto;">
                                                      <table id="scroll-horizontal2" id="bankdetail"class="table nowrap align-middle" style="width:100%;">
                                                         <thead>
                                                            <tr>
                                                               <th>#</th>
                                                               <th> Date & Time</th>
                                                               <th>Wallet Address</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                              <?php
                                                             $wallet_history = $this->db->where('user_id',$this->session->userdata('usquareusername'))->get('wallet_details')->result_array();
                                                             $countt=1;
                                                             foreach($wallet_history as $key => $whis)
                                                             {
                                                             ?>
                                                            <tr>
                                                               <td><?=$count++;?></td>
                                                               <td><?=$whis['entry_date'];?></td>
                                                               <td><?=$whis['wallet'];?></td>
                                                            
                                                            </tr>
                                                             <?php } ?>
                                                         </tbody>
                                                      </table>
                                                      
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                        
                                       </div>
                                       
                                    </div>
                                 </div>
                                 <!--end row-->
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--end col-->
                  </div>
                  <!--end row-->
                   <!-- Modal Starts-->
                                          <div class="modal fade" id="adddeals1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                             <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                   <div class="modal-header bg-light p-3">
                                                      <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <form action="<?=BASEURL?>user/add_wallet" method="POST">
                                                      <div class="modal-body">
                                                        
                                                         <div class="mb-3">
                                                            <label for="dealTitle" class="form-label">TRC20 Wallet Address</label>
                                                            <input type="text" class="form-control" name="trc" id="dealTitle" value="" required>
                                                            <div class="invalid-feedback">
                                                               Add TRC20 Wallet Address
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class=" d-flex justify-content-center">
                                                         <div  class="mb-4">
                                                            <button type="button" class="btn btn-danger me-3" id="close-modal" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" id="wallet-success-msg" class="btn btn-success"> Submit</button>
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
                              <h5 class="card-title mb-0">History</h5>
                           </div>
                           <div class="card-body banktable">
                              <table id="scroll-horizontal1" class="table nowrap align-middle" style="width:100%">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Date & Time</th>
                                       <th>Requested Amount</th>
                                       <th>Credited Amount</th>
                                       <th>Account Details</th>
                                       <th>Paymode</th>
                                       <th>Request Status</th>
                                     
                                    </tr>
                                 </thead>
                                 <tbody>
                                   <?php $withdraw_his = $this->db->where('user_id',$this->session->userdata('usquareusername'))->get('ib_withdraw_request')->result_array();
                                   $count = 1;
                                   foreach($withdraw_his as $key => $wh)
                                   {
                                         $req_status = $this->db->where('user_id',$wh['user_id'])->get('bank_details')->row_array();
                                         
                                         if($wh['status'] == 'Accepted'){
                                             $col = 'success';
                                         }else if($wh['status'] == 'Rejected'){
                                              $col = 'danger';
                                         }else{
                                              $col = 'warning';
                                         }
                                   ?>  
                                    <tr>
                                       <td><?=$count++;?></td>
                                       <td><?=$wh['entry_date']?></td>
                                       <td><?=$wh['amount']?></td>
                                       <td><?=$wh['credited_amount']?></td>
                                       <td><?=$req_status['acc_name'];?> 
                                                 <br>
                                                     <span class="me-2"><?php if($wh['mode'] == 'Bank Transfer'){ echo $wh['acc_no']; }else{ echo $wh['wallet_address']; } ?></span>
                                                 <br> 
                                                           <?=$req_status['ifsc'];?>  
                                                                         
                                                                        </td>
                                       <td><?=$wh['mode']?></td>
                                       <td>
                                          <span class="badge badge-gradient-<?=$col;?>"><?=$wh['status']?></span>
                                        </td>
                       
                                    </tr>
                                   <?php } ?> 
                                 
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="pill-justified-profile-1" role="tabpanel">
               </div>
            </div>
            <!-- end card-body -->
         <!--</div>-->
         <!-- end card -->
      <!--</div>-->
   </div>
</div>
</div>
<script>
   const select = document.getElementById('my-select');
   const divs = document.querySelectorAll('.my-div');
   
   select.addEventListener('change', (event) => {
     const selectedValue = event.target.value;
     
     if(selectedValue == "Bank Transfer"){
         var val = "div1";
     }else if(selectedValue == "USDT TRC20 Wallet"){
         var val = "div3";
     }
     
     divs.forEach(div => {
       if (div.id === val) {
         div.style.display = 'block';
       } else {
         div.style.display = 'none';
       }
     });
   });
</script>
<?php include 'footer.php';?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
<script src="<?=BASEURL?>assets/js/pages/modal.init.js"></script>
<!--<script src="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.js"></script>-->
<!--<script src="https://code.jquery.com/jquery-3.5.1.js"></script>-->
<!--<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>-->


   <!-- Sweet Alerts js -->
    <!--<script src="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.js"></script>-->

    <!-- Sweet alert init js-->
    <!--<script src="<?=BASEURL?>assets/js/pages/sweetalerts.init.js"></script>-->

<script>
   $(document).ready(function () {
       $('#scroll-horizontal1').DataTable();
    
   });
   
    $(document).ready(function () {
       $('#scroll-horizontal2').DataTable();
    
   });
</script>


