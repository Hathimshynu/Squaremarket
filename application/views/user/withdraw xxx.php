<?php include 'header.php';?>

<style>
    .nav-pills-withdraw .nav-link.active {
    background-color: #20604f !important;
}
ul.nav.nav-pills.nav-pills-withdraw.nav-.mb-3 {
    display: flex;
    justify-content: space-between;
}
.nav-pills-withdraw .nav-link.active:hover{
    color:#fff !important;
}
.withdraw-tab-text:hover{
    color:black !important;
}
.withdraw-tab-text{
    padding-top:11px !important;
    padding-bottom:11px !important;
}
 .my-div {
   display: none;
   }
  
.form-control,.form-select{
    border: 1px solid #00b074 !important;
}
.withdraw-container{
          font-family: 'Barlow', sans-serif !important;
}
.input-usd {
    background-color: #20604F !important;
    border: 2px solid #20604f !important;
    color: white;
    font-weight: 700;
}
.withdraw-card{
    background-color: #D8F1E9!important;
}

/*Copy icon*/

.container-copy{
    width: fit-content !important;
}
.copy-text {
	position: relative;
	padding: 6px;
	background: #fff;
	border: 1px solid #ddd;
	border-radius: 10px;
	display: flex;
}
.copy-text input.text {
	/* padding: 10px; */
	font-size: 18px;
	color: #20604f !important;
	border: none;
	outline: none;
}
.copy-text button {
	padding: 10px;
	background: #5784f5;
	color: #fff;
	font-size: 18px;
	border: none;
	outline: none;
	border-radius: 10px;
	cursor: pointer;
}

.copy-text button:active {
	background: #ff0000;
}
.copy-text button:before {
	content: "Copied";
	position: absolute;
	top: -45px;
	right: 0px;
	background: #FF0000;
	color:#fff;
	padding: 8px 10px;
	border-radius: 20px;
	font-size: 15px;
	display: none;
}
.copy-text button:after {
	content: "";
	position: absolute;
	top: -20px;
	right: 25px;
	width: 10px;
	height: 10px;
	background: #FF0000;
	transform: rotate(45deg);
	display: none;
}
.copy-text.active button:before,
.copy-text.active button:after {
	display: block;
}

/* Border Animation */
.gradient-border {
    border:3px solid transparent;
    background: linear-gradient(white, white) padding-box, linear-gradient(to right, #20604f, #ff0000) border-box;
    }
    .copy-text button{
        background-image: linear-gradient(259deg, #20604f 0%, #20604f 50%, #20604f 100%);
        font-size: 11px;
        padding: 9px;
    }
    .copy-icon{
        font-size: 17px;
    } 
    
    .balance-badge{
        background-color: #20604f !important;
    font-weight: 800 !important;
    font-size: 16px !important;
    }
    @media screen and (max-width:500px){
    .row>* {
    padding-right: 7px !important;
    padding-left: 7px !important;
}
.paymode-select-container{
    padding-left: 8px !important;
    padding-top: 8px !important;
    padding-bottom: 8px !important;
}
.withdraw-cardbody{
    padding-left:5px !important;
    padding-right:5px !important;
}
}
.payment-mode .form-check-input:checked {
    background-color: #20604f;
    border-color: #20604f;
}
@media screen and (min-width:501px){
    .payment-mode .form-check-input {
    width: 22px;
    height: 22px;
}
.payment-mode .form-check label {
    font-size: 19px;
}
}
.paymode-select-container{
    border: 1px solid #00b074;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 8px;
    border-radius: 4px;
}
/*@media screen and (max-width:767px){*/
/*    .ww-heading{*/
/*        display:none !important;*/
/*    }*/
/*}*/
@media screen and (max-width:500px){
    .withdraw-card-header{
        padding-top:0 !important;
    }
}
    
</style>


<!-- aos css -->
<!--<link rel="stylesheet" href="<?=BASEURL?>assets/libs/aos/aos.css" />-->
<!--datatable css-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
<!--datatable responsive css-->
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

 <!--Custom CSS-->
   <link href="<?=BASEURL?>assets/css/deposit.css" rel="stylesheet" type="text/css" />
   <link href="<?=BASEURL?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

<!-- Sweet Alert css-->
<link href="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.css">
 <style>
    .green .flip-clock-wrapper ul li a div div.inn,
    .green .flip-clock-dot.top,
    .green .flip-clock-dot.bottom {
      background-color: #00FF00;
    }

    .red .flip-clock-wrapper ul li a div div.inn,
    .red .flip-clock-dot.top,
    .red .flip-clock-dot.bottom {
      background-color: #FF0000;
    }
    .flip-clock-wrapper ul li a div div.inn {

    background-color: #20604f!important;

}

  </style>

<div class="container-fluid withdraw-container">
<div class="row">
   <div class="col-xxl-12 col-lg-12">
      <h5 class="mb-3">Withdrawal</h5>
      <div class="card withdraw-card">
         <div class="card-body withdraw-cardbody">
            <ul class="nav nav-pills nav-pills-withdraw nav-justified mb-0" role="tablist" id="withdraw-pills">
               <li class="nav-item waves-effect waves-light ">
                  <a class="nav-link active withdraw-tab-text" data-bs-toggle="tab" href="#manual-withdrawl" role="tab">
                  Wallet Withdrawl
                  </a>
               </li>
                <li class="nav-item waves-effect waves-light">
                   <a class="nav-link withdraw-tab-text" data-bs-toggle="tab" href="#mt5withdraw" role="tab">
                       Meta Withdraw
                   </a>
               </li>
            </ul>

            
            <!-- Tab panes -->
            <div class="tab-content text-muted">
               <div class="tab-pane active" id="manual-withdrawl" role="tabpanel">
                  <div class="row">
                     <div class="col-lg-12">
                         <?php $wallet = $this->db->select('sum(credit) - sum(debit) as balance')->where('user_id',$this->session->userdata('usquareusername'))->get('e_wallet')->row()->balance+0;?>
                        <div class="card withdraw-card">
                           <div class="card-header withdraw-card withdraw-card-header align-items-center justify-content-between d-block d-sm-block d-lg-flex d-md-flex d-xl-flex d-xxl-flex">
                              <h4 class="card-title mb-0 flex-grow-1 ww-heading">Wallet Withdrawal</h4>
                              <h4 class="card-title mb-0 flex-grow-1 mt-3 mt-sm-3 mt-md-0 mt-lg-0 mt-xl-0 mt-xxl-0"><span class="">Balance:</span> <span class="badge balance-badge p-2"><span class="me-1">$</span><?=$wallet;?></span></h4>
                              <a href="<?=BASEURL?>user/wallet_withdraw_history" class="mt-sm-2 mt-2 mt-md-0 mt-lg-0 mt-xl-0 mt-xxl-0 btn btn-green fs-25 text-white">
                                                                <i class="fas fa-eye me-1"></i> Wallet Withdraw History
                                                            </a>
                           </div>
                           
  <!--          <div class="container">-->
  <!--  <div id="my-clock"></div>-->
  <!--  <div class="controls">-->
  <!--    <button onclick="startStopwatch()">Start</button>-->
  <!--    <button onclick="stopStopwatch()">Stop</button>-->
  <!--    <button onclick="resetStopwatch()">Reset</button>-->
  <!--  </div>-->
  <!--</div>-->
                           <!-- end card header -->
                           <div class="card-body">
                              <div class="live-preview">
                                 <div class="row gy-4">
                                    <div class="col-lg-6">
                                       <form action="<?=BASEURL?>user/withdraw" method="post" id="hockey"> 
                                       <div style="font-weight: 500;" id="message-div" class="text-warning text-center  fs-18"></div>
                                       <div class="row">
                                            
                                          <div class="col-xxl-12 col-md-12 mb-3 payment-mode">
                                            
                                                <label for="tid" class="form-label">Payment Mode <span><?=form_error('mode');?></span></label>
                                                <!--<select class="form-select" name="mode" id="my-select">-->
                                                <!--   <option selected value = "">Select Payment mode</option>-->
                                                <!--   <option value="Bank Transfer">Bank Transfer</option>-->
                                                <!--   <option value="UPI">UPI</option>-->
                                                <!--   <option value="Crypto">Crypto</option>-->
                                                <!--</select>-->
                                                <div class="d-flex align-items-center paymode-select-container">
                                                <div class="form-check">
                                                <input class="form-check-input me-1" type="radio" name="mode"  value="Bank Transfer">
                                                <label class="form-check-label text-dark" for="bank-transfer">
                                                    Bank Transfer
                                                </label>
                                            </div>
                                            
                                            <div class="form-check mx-2 mx-lg-4">
                                                <input class="form-check-input me-1" type="radio" name="mode"  value="UPI">
                                                <label class="form-check-label text-dark" for="upi">
                                                    UPI
                                                </label>
                                            </div>
                                            
                                            <div class="form-check">
                                                <input class="form-check-input me-1" type="radio" name="mode"  value="Crypto">
                                                <label class="form-check-label text-dark" for="crypto">
                                                    Crypto
                                                </label>
                                            </div>
                                             </div>
                                             
                                          </div>
                                          <!--end col-->
                                          
                                          
                                           <div class="col-xxl-12 col-md-12 mb-3">
                                             <label for="tid" class="form-label">Payment Method <span><?=form_error('account');?></span></label>
                                             <select class="form-select" name="account" id="account">
                                                   <option selected value = "">Select Payment Method</option>
                                                   
                                                </select>
                                          </div>
                                          
                                          
                                          
                                          <div class="col-xxl-12 col-md-12 mb-3">
                                             <label for="tid" class="form-label">Amount <span><?=form_error('amount');?></span></label>
                                             <div class="input-group">
                                                <span style="font-weight:900;background-color:#20604f;" class="input-group-text input-usd text-white">$</span>
                                                <input type="number" class="form-control" name="amount" aria-label="Amount (to the nearest dollar)" placeholder="Enter Amount (USD)">
                                                <span style="font-weight:900;background-color:#20604f;" class="input-group-text input-usd text-white">USD</span>
                                             </div>
                                          </div>
                                       
                                       </div>
                                       <!--End Row-->
                                       <div class="d-flex justify-content-center">
                                          <button type="submit" id="" class="btn submit-btn btn-primary waves-effect waves-light"><i class="fa-regular fa-circle-check me-2"></i>Submit</button>
                                       </div>
                                       </form> 
                                    </div>
                                       <div class="col-lg-6" >
                                                                    
                                                                    <div class="card withdraw-card mt-4 border-animation acc-details  colors my-div" id="div1" data-aos="">
                                                                    <div class="card-body text-center">
                                                                       <h4 class="text-red text-center">Bank Transfer | Account Details</h4>
                                                                    </div>
                                                                   
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
                                                                                 xxxx xxxx xxx xxxx
                                                                              </div>
                                                                              <div class="row mt-4">
                                                                                 <div class="col-6 col-lg-4">
                                                                                    <div>
                                                                                       <div class="text-white-50">Card Holder Name</div>
                                                                                       <div id="card-holder-elem" class="fw-medium fs-14">xxxx xxxx</div>
                                                                                    </div>
                                                                                 </div>
                                                                                 <div class="col-6 col-lg-4">
                                                                                    <div class="expiry">
                                                                                       <div class="text-white-50">Bank Name</div>
                                                                                       <div class="fw-medium fs-14">
                                                                                          <!--<span id="expiry-month-elem">00</span>-->
                                                                                          <!--/-->
                                                                                          <!--<span id="expiry-year-elem">0000</span>-->
                                                                                          <div id="card-bank-elem" class="fw-medium fs-14">xxxxx</div>
                                                                                       </div>
                                                                                    </div>
                                                                                 </div>
                                                                                 <div class="col-12 col-lg-4 mt-lg-0 mt-sm-3 mt-md-3 ifsc-details">
                                                                                    <div>
                                                                                       <div class="text-white-50">IFSC Code</div>
                                                                                       <div id="cvc-elem" class="fw-medium fs-14">xxxxx</div>
                                                                                    </div>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                           <!-- end card div elem -->
                                                                        </div>
                                                                  </div>
                                                                
                                                       
                                                       
                                                                <div class="card withdraw-card border-animation qr-code my-div"  id="div2">
                                                                     <div class="card-body">
                                                                         <h4 class="text-red text-center">UPI</h4>

                                                                    </div>
                                                                    <div class="text-center mb-4">
                                                                    <img id="upiimg" style="width:300px;height:261px;"  src="<?=BASEURL?>assets/images/upi.png" class="card-img-top" alt="...">
                                                                   </div>
                                                                </div>
                                                                
                                                                  <div class="card withdraw-card border-animation mt-4   trc-20-wallet my-div" id="div3" >
                                                                      <div style="background-image: url('<?=BASEURL?>assets/images/nft/bg-pattern.png');" class="m-1">
                                                                     <div class="row">
                                                                     <div class="col-lg-8 wallet-address-container text-center" >
                                                                               <h3 style="text-align:center;font-weight:700;" class="text-red mt-3 d-flex justify-content-center lh-base">TRC20 USDT Wallet</h3>
                                                                                <div class="container-copy text-center d-flex justify-content-center align-items-center w-50 mt-3 ms-md-3 ms-lg-3 ms-3">
                                                                                <div class="copy-text gradient-border" id="gradient-border">
                                                                                    <input type="text" class="text" value="TTjL4KPCd3csjEpwcsn2fJTD9ejJY7iGbi"/>
                                                                                    <button type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click to Copy"><i class="fa fa-clone copy-icon"></i></button>
                                                                                </div>
                                                                            </div>
                                                                   
                                                                    </div>
                                                                     <div class="col-lg-4 trc-qrcode text-center">
                                                                     
                                                                      <div class="text-center d-flex justify-content-center align-items-center">
                                                                    <img id="cryptoimg" style="max-width:200px;margin-right:18px;" src="<?=BASEURL?>assets/images/trc20-qrcode.png" class="card-img-top my-3" alt="...">
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
                                                        <!--<div id="message" class="hidden">-->
                                                        <!--  <p class="head">This card is blurred.</p>-->
                                                        <!--  <p id="timer">00:00:00</p>-->
                                                        <!--</div>-->
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
                                                            <button type="submit" id="wallet-success-msg" class="btn submit-btn btn-success"> Submit</button>
                                                         </div>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                          <!--end modal-->
                  
               </div>
               <div class="tab-pane" id="mt5withdraw" role="tabpanel">
                    <div class="row">
                     <div class="col-lg-12">
                       
                        <div class="card withdraw-card">
                           <div class="card-header withdraw-card align-items-center justify-content-between d-block d-sm-block d-lg-flex d-md-flex d-xl-flex d-xxl-flex">
                              <h4 class="card-title mb-0 flex-grow-1">Meta Withdraw</h4>
                                <a href="<?=BASEURL?>user/meta_withdraw_history" class="mt-sm-2 mt-2 mt-md-0 mt-lg-0 mt-xl-0 mt-xxl-0 btn btn-green fs-25 text-white">
                                                                <i class="fas fa-eye me-1"></i> Meta Withdraw History
                                                            </a>
                           </div>
                           <!-- end card header -->
                           <div class="card-body">
                              <div class="live-preview">
                                 <div class="row d-flex justify-content-center gy-4">
                                    <div class="col-lg-6">
                                       <form action="<?=BASEURL?>user/account_withdraw_mt5" method="post" id="hockey"> 
                                       <div class="row">
                                        
                                          <div class="col-xxl-12 col-md-12 mb-3">
                                             <?php $accounts = $this->db->where('user_id',$this->session->userdata('usquareusername'))->get('accounts')->result_array(); ?> 
                                             
                                                <label for="tid" class="form-label">Account ID</label>
                                                <select class="form-select" name="hids_id" id="my-select">
                                                   <option selected value = "">Select Account ID</option>
                                                    <?php foreach($accounts as $key => $acc){ ?>
                                                    <option value="<?=$acc['account_id'];?>"><?=$acc['account_id'];?></option>
                                                    <?php } ?>
                                                </select>
                                                
                                             
                                          </div>
                                          <!--end col-->
                                          
                                         
                                          
                                          <div class="col-xxl-12 col-md-12 mb-3">
                                             <label for="tid" class="form-label">Amount</label>
                                             <div class="input-group">
                                                <span style="font-weight:900;background-color:#20604f;" class="input-group-text input-usd text-white">$</span>
                                                <input type="number" class="form-control" name="amount" aria-label="Amount (to the nearest dollar)">
                                                <span style="font-weight:900;background-color:#20604f;" class="input-group-text input-usd text-white">USD</span>
                                             </div>
                                          </div>
                                       
                                       </div>
                                       <!--End Row-->
                                       <div class="d-flex justify-content-center">
                                          <button type="submit" id="" class="btn submit-btn btn-primary waves-effect waves-light"><i class="fa-regular fa-circle-check me-2"></i>Submit</button>
                                       </div>
                                       </form> 
                                    </div>
                                      
                                                                 </div>
                                                                 <!--end row-->
                                                              </div>
                                                           </div>
                                                        </div>
                                                     
                                                     </div>
                                                     <!--end col-->
                                                  </div>
               </div>
            </div>
            <!-- end card-body -->
         </div>
         <!-- end card -->
      </div>
   </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    const mediaQuery = window.matchMedia('(max-width: 870px)');
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

<script>
    
 $(document).ready(function () {
  $('input[name="mode"]').change(function() {
    var paymethod = $(this).val();
    $("#account").find("option:gt(0)").remove();
    // alert(paymethod);

    $.post('<?=BASEURL?>user/get_accounts', {
      'mode': paymethod
    })
    .done(function(res) {
      //console.log(res);
      if (res.length > 0) {
        var obj = JSON.parse(res);
        $.each(obj, function(index, value) {
          // console.log(value);
          if (paymethod == "Bank Transfer") {
            $('#account').append($("<option></option>").attr("value", value.id).text(value.acc_name + " - " + value.acc_no));
          } else if (paymethod == "UPI") {
            $('#account').append($("<option></option>").attr("value", value.id).text(value.upi));  
          } else {
            $('#account').append($("<option></option>").attr("value", value.id).text(value.crypto));  
          }
        });

      } else {
        // alert(res);
        $('#sub_cat').html('No Data Found. Please check the selected category.');
      }
    });
  });

  $('#account').change(function() {
    var account_id = $(this).val();
    var paymethod = $('input[name="mode"]:checked').val();
    // alert(account_id);
    // alert(paymethod);

    $.post('<?=BASEURL?>user/get_account_details', {
      'account_id': account_id,
      'mode': paymethod
    })
    .done(function(res) {
      //console.log(res);
      if (res.length > 0) {
        var obj = JSON.parse(res);
        // console.log(value);
        if (paymethod == "Bank Transfer") {
          $('#card-num-elem').html(obj.acc_no);
          $('#card-holder-elem').html(obj.acc_name);
          $('#card-bank-elem').html(obj.bank_name);
          $('#cvc-elem').html(obj.ifsc);
        } else if (paymethod == "UPI") {
          $("#upiimg").attr("src", "<?=BASEURL?>assets/upi/" + obj.filename);
        } else {
          $('.text').val(obj.crypto);
          $("#cryptoimg").attr("src", "<?=BASEURL?>assets/upi/" + obj.filename);
        }
      } else {
        // alert(res);
        $('#sub_cat').html('No Data Found. Please check the selected category.');
      }
    });
  });
});
    
    
    
</script>

<script>
//   $(document).ready(function () {
//      $('#my-select').change(function(){
//         $("#account").find("option:gt(0)").remove();
//         var paymethod = $(this).val();
//         // alert(paymethod);

//         $.post('<?=BASEURL?>user/get_accounts', {
//         'mode': paymethod
//         })
//         .done(function(res) {
//           //console.log(res);
//         if (res.length > 0) {
//             var obj = JSON.parse(res);
//             $.each(obj, function(index, value) {
//                 // console.log(value);
//                 if(paymethod == "Bank Transfer"){
//                  $('#account').append($("<option></option>").attr("value", value.id).text(value.acc_name + " - " + value.acc_no));
//                 }else if(paymethod == "UPI"){
//                   $('#account').append($("<option></option>").attr("value", value.id).text(value.upi));  
//                 }else{
//                   $('#account').append($("<option></option>").attr("value", value.id).text(value.crypto));  
//                 }
//             });
            
//         } else {
//              // alert(res);
//              $('#sub_cat').html('No Data Found Check recheck Category');
            
//         }
//     });
//     });
    
//       $('#account').change(function(){
//       // $("#account").find("option:gt(0)").remove();
//         var account_id = $(this).val();
//         var paymethod = $('#my-select').find(":selected").val();
//         //  alert(account_id);
//         //  alert(paymethod);

//         $.post('<?=BASEURL?>user/get_account_details', {
//         'account_id': account_id, 'mode': paymethod
//         })
//         .done(function(res) {
//           //console.log(res);
//         if (res.length > 0) {
//             var obj = JSON.parse(res);
//                 // console.log(value);
//                 if(paymethod == "Bank Transfer"){
//                  $('#card-num-elem').html(obj.acc_no);
//                  $('#card-holder-elem').html(obj.acc_name);
//                  $('#card-bank-elem').html(obj.bank_name);
//                  $('#cvc-elem').html(obj.ifsc);
//                 }else if(paymethod == "UPI"){
//                   $("#upiimg").attr("src","<?=BASEURL?>assets/upi/"+obj.filename);  
//                 }else{
//                   $('.text').val(obj.crypto);  
//                   $("#cryptoimg").attr("src","<?=BASEURL?>assets/upi/"+obj.filename);  
//                 }
//         } else {
//              // alert(res);
//              $('#sub_cat').html('No Data Found Check recheck Category');
            
//         }
//     });
//     });
//   });  
</script>


<script>
// const radios = document.querySelectorAll('input[name="mode"]');
// const divs = document.querySelectorAll('.my-div');

// radios.forEach(radio => {
//   radio.addEventListener('change', (event) => {
//     const selectedValue = event.target.value;
//     let val;

//     if (selectedValue === "Bank Transfer") {
//       val = "div1";
//     } else if (selectedValue === "UPI") {
//       val = "div2";
//     } else if (selectedValue === "Crypto") {
//       val = "div3";
//     }
    
//     divs.forEach(div => {
//       if (div.id === val) {
//         div.style.display = 'block';
//       } else {
//         div.style.display = 'none';
//       }
//     });
//   });
// });
</script>

<script>
// const radios = document.querySelectorAll('input[name="mode"]');
// const divs = document.querySelectorAll('.my-div');
// const messageDiv = document.getElementById('message-div');
// const paymentMethodSelect = document.getElementById('account');

// let selectedPaymentMethod = '';
// let selectedRadioValue = '';

// function handleSelectionChange() {
//   if (selectedRadioValue !== '') {
//     if (selectedPaymentMethod !== '') {
//       divs.forEach(div => {
//         div.style.display = 'none';
//       });

//       if (selectedRadioValue === "Bank Transfer") {
//         document.getElementById('div1').style.display = 'block';
//       } else if (selectedRadioValue === "UPI") {
//         document.getElementById('div2').style.display = 'block';
//       } else if (selectedRadioValue === "Crypto") {
//         document.getElementById('div3').style.display = 'block';
//       }

//       messageDiv.textContent = '';
//     } else {
//       divs.forEach(div => {
//         div.style.display = 'none';
//       });

//       messageDiv.textContent = 'Please select a payment method to continue.';
//     }
//   } else {
//     divs.forEach(div => {
//       div.style.display = 'none';
//     });

//     messageDiv.textContent = '';
//   }
// }

// radios.forEach(radio => {
//   radio.addEventListener('change', (event) => {
//     selectedRadioValue = event.target.value;
//     handleSelectionChange();
//   });
// });

// paymentMethodSelect.addEventListener('change', (event) => {
//   selectedPaymentMethod = event.target.value;
//   handleSelectionChange();
// });


// document.addEventListener('DOMContentLoaded', function() {
$(document).ready(function() {
  const radios = document.querySelectorAll('input[name="mode"]');
  const divs = document.querySelectorAll('.my-div');
  const messageDiv = document.getElementById('message-div');
  const paymentMethodSelect = document.getElementById('account');

  let selectedPaymentMethod = '';
  let selectedRadioValue = '';

  function handleSelectionChange() {
    divs.forEach(div => {
      div.style.display = 'none';
    });

    if (selectedPaymentMethod !== '') {
      if (selectedRadioValue === "Bank Transfer") {
        document.getElementById('div1').style.display = 'block';
      } else if (selectedRadioValue === "UPI") {
        document.getElementById('div2').style.display = 'block';
      } else if (selectedRadioValue === "Crypto") {
        document.getElementById('div3').style.display = 'block';
      }

      messageDiv.textContent = '';
    } else {
      messageDiv.textContent = 'Please select a payment method to continue.';
    }
  }

  radios.forEach(radio => {
    radio.addEventListener('change', (event) => {
      selectedRadioValue = event.target.value;
      selectedPaymentMethod = paymentMethodSelect.value;
      handleSelectionChange();
    });
  });

  paymentMethodSelect.addEventListener('change', (event) => {
    selectedPaymentMethod = event.target.value;
    handleSelectionChange();
  });
});
</script>



<script>
// const select = document.getElementById('my-select');
// const divs = document.querySelectorAll('.my-div');

// select.addEventListener('change', (event) => {
//   const selectedValue = event.target.value;
  
//   if(selectedValue == "Bank Transfer"){
//       var val = "div1";
//   }else if(selectedValue == "UPI"){
//       var val = "div2";
//   }else if(selectedValue == "Crypto"){
//       var val = "div3";
//   }
  
//   divs.forEach(div => {
//     if (div.id === val) {
//       div.style.display = 'block';
//     } else {
//       div.style.display = 'none';
//     }
//   });
// });
</script>

<?php include 'footer.php';?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>


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
   $(document).ready(function () {
      $('#scroll-horizontal3').DataTable();
    
  });
   $(document).ready(function () {
      $('#scroll-horizontal4').DataTable();
    
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.min.js"></script>
<script>
  // Initialize the flip clock
  var clock = new FlipClock($('#my-clock'), {
    clockFace: 'HourlyCounter',
    autoStart: false,
    callbacks: {
      interval: function() {
        var elapsed = clock.getTime().time;
        if (elapsed <= 10800) { // 3 hours = 10800 seconds
          $('#my-clock').removeClass('red').addClass('green');
        } else {
          $('#my-clock').removeClass('green').addClass('red');
        }
      }
    }
  });

  // Start the stopwatch
  function startStopwatch() {
    clock.start();
  }

  // Stop the stopwatch
  function stopStopwatch() {
    clock.stop();
  }

  // Reset the stopwatch
  function resetStopwatch() {
    clock.reset();
    $('#my-clock').removeClass('red').addClass('green');
  }

  // Apply color change to the specified element
  $('.flip-clock-wrapper ul li a div div.inn').css('background-color', '#ff0000');
</script>