<?php include 'header.php';?>

<style>
.my-div {
  display: none;
}
    .acc-details, .qr-code{
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    
.col-sm-12 {
    overflow: auto;
}

.custom-amount-doll{
    border:2px solid #FE8E4C !important;
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
	color: #FE8E4C !important;
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
	background: #809ce2;
}
.copy-text button:before {
	content: "Copied";
	position: absolute;
	top: -45px;
	right: 0px;
	background: #5c81dc;
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
	background: #5c81dc;
	transform: rotate(45deg);
	display: none;
}
.copy-text.active button:before,
.copy-text.active button:after {
	display: block;
}

/* Border Animation */
.gradient-border {
    border:2px solid transparent;
    background: linear-gradient(white, white) padding-box,
              linear-gradient(to right, orange, orangered) border-box;
    }
    .copy-text button{
        background-image: linear-gradient(259deg, #1a1919 0%, #f18d48 50%, #f18d48 100%);
        font-size: 11px;
        padding: 9px;
    }
    .copy-icon{
        font-size: 17px;
    } 
    

</style>

 <!-- dropzone css -->
    <link rel="stylesheet" href="<?=BASEURL?>assets/libs/dropzone/dropzone.css" type="text/css" />

    <!-- Filepond css -->
    <link rel="stylesheet" href="<?=BASEURL?>assets/libs/filepond/filepond.min.css" type="text/css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">

 <!-- aos css -->
    <link rel="stylesheet" href="<?=BASEURL?>assets/libs/aos/aos.css" />
    
    <!--Custom CSS-->
   <link href="<?=BASEURL?>assets/css/deposit.css" rel="stylesheet" type="text/css" />
   <link href="<?=BASEURL?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
   
 
 <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    
     <!-- Sweet Alert css-->
    <link href="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    
   


<div class="container-fluid">
    
    
    <div class="row">
         <div class="col-xxl-12 col-lg-12">
                            <h5 class="mb-3">Deposit</h5>
                            <!--<div class="card">-->
                            <!--    <div class="card-body">-->
                                   
                                    <!--<ul class="nav nav-pills nav-justified mb-3" role="tablist">-->
                                    <!--    <li class="nav-item waves-effect waves-light">-->
                                    <!--        <a class="nav-link active" data-bs-toggle="tab" href="#pill-justified-home-1" role="tab">-->
                                    <!--            Manual Deposit-->
                                    <!--        </a>-->
                                    <!--    </li>-->
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
                                                    <div class="card">
                                                        <div class="card-header align-items-center d-flex">
                                                            <h4 class="card-title mb-0 flex-grow-1">Manual Deposit</h4>
                                                        </div>
                                                        <!-- end card header -->
                                                         
                                                         <form action="<?=BASEURL?>User/deposit_test" role="form" method="post" id="hockey">
                                                         <input type="text" class="form-control" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">
                                             
                                                        <div class="card-body">
                                                            <div class="live-preview">
                                                                <div class="row gy-4">
                                                                   
                                                                    <div class="col-lg-6">
                                                                        <div class="row">
                                                                            
                                                                    <?php  /*    <div class="col-xxl-12 col-md-12 mb-3">
                                                                             <!--<form action="#" method="post" id="hockey">-->
                                                                        <label for="tid" class="form-label">Accounts <span><?=form_error('account');?></span></label>
                                                                        
                                                                     <select class="form-select"  name="account">
                                                                        <option selected value = "">Select Account</option>
                                                                        <?php
                                                                        $count = 1;
                                                                        $accounts = $this->db->where('email',$this->session->userdata('usquareemail'))->get('user_role')->result_array();
                                                                        foreach($accounts as $key => $acc)
                                                                        {
                                                                            if($acc['account_id'] != "")
                                                                            {
                                                                                $ac_id = $acc['account_id'];
                                                                            }else{
                                                                                $ac_id = "Nill";
                                                                            }
                                                                        ?>
                                                                        <option value="<?=$acc['username']?>"><?=$count++." "?><?=$acc['fname']." ".$acc['lname']." ";?>(<?=$ac_id?>)</option>
                                                                        <?php } ?>
                                                                     </select>    
                                                                     <!--</form>-->
                                                                    </div>  */?>
                                                                        
                                                                    <div class="col-xxl-12 col-12 col-md-12 mb-3">
                                                                             <!--<form action="#" method="post" id="hockey">-->
                                                                     <label for="tid" class="form-label">Payment Mode <span><?=form_error('mode');?></span></label>
                                                                     <select class="form-select"  id="my-select" name="mode">
                                                                        <option selected value = "">Select Paymode</option>
                                                                        <option value="Bank Transfer">Bank Transfer</option>
                                                                        <option value="UPI">UPI</option>
                                                                        <option value="USDT TRC20 Wallet">USDT TRC20 Wallet</option>
                                                                     </select>    
                                                                     <!--</form>-->
                                                                    </div>
                                                                    <!--end col-->
                                                                   <div id="error" class="text-center text-danger currency-error"></div>
                                                                         <div class="col-xxl-6 col-5 col-md-6 mb-3 currency-container">
                                                                        <label for="tid" class="form-label currency-error">Currency <span class="currency-error"><?=form_error('currency');?></span></label>
                                                                     <select class="form-select"  id="currency" name="currency">
                                                                        <option selected value = "">Select Currency</option>
                                                                        <option value="USD">USD</option>
                                                                        <option value="INR">INR</option>
                                                                        <!--<option value="">RUB</option>-->
                                                                     </select>    
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-xxl-6 col-7 col-md-6 mb-3 amount-inputcontrol">
                                                                          <label for="tid" class="form-label amount-error">Amount <span><?=form_error('amount');?></span></label>
                                                                   <div style="background-color:#FE8E4C;" class="input-group">
                                                                       
                                                                        <span id="mntype" class="input-group-text input-usd custom-amount-doll">$</span>
                                                                        <input type="text" class="form-control amount-input" name="amount" id="amount">
                                                                        <span id="mnname" class="input-group-text input-usd custom-amount-doll">USD</span>
                                                                    </div>  
                                                                    </div>  
                                                                    
                                                                    <div class="col-xxl-12 col-md-12 mb-3">
                                                                    <div>
                                                                        <label for="" class="form-label d-none">Value</label>
                                                                            <input type="hidden" id="value" name="" value="" class="form-control" readonly>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-xxl-12 col-md-12 mb-3">
                                                                      
                                                                    <div class="deposit-input-container">
                                                                            <label for=""  class="form-label">Deposit  <span><?=form_error('deposit');?></span></label>
                                                                            <input type="text" id="deposit" name="deposit" class="form-control deposit-input" readonly >
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-xxl-12 col-md-12 mb-3">
                                                                        <div>
                                                                            <label for="tid"  class="form-label">Transaction ID <span><?=form_error('utr');?></span></label>
                                                                            <input type="text" id="utr" name="utr" class="form-control" >
                                                                        </div>
                                                                        <div class="text-danger" id="utr_error"></div>
                                                                    </div>
                                                                    
                                                                    <!--end col-->
                                                                    <!--end col-->
                                                                    </div>
                                                                    <!--End Row-->
                                                                    <div class="d-flex justify-content-center">
                                                                        <button type="submit" id="" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="col-lg-6" >
                                                                    
                                                                    <div class="card mt-4 border-animation acc-details  colors my-div" id="div1" data-aos="">
                                                                    <div class="card-body text-center">
                                                                       <h4 class="text-primary text-center">Bank Transfer | Account Details</h4>
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
                                                                                       <div id="card-holder-elem" class="fw-medium fs-14">Square Market</div>
                                                                                    </div>
                                                                                 </div>
                                                                                 <div class="col-6 col-lg-4">
                                                                                    <div class="expiry">
                                                                                       <div class="text-white-50">Bank Name</div>
                                                                                       <div class="fw-medium fs-14">
                                                                                          <!--<span id="expiry-month-elem">00</span>-->
                                                                                          <!--/-->
                                                                                          <!--<span id="expiry-year-elem">0000</span>-->
                                                                                          <div id="card-holder-elem" class="fw-medium fs-14">ICICI</div>
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
                                                                
                                                       
                                                       
                                                                <div class="card border-animation qr-code my-div"  id="div2">
                                                                     <div class="card-body">
                                                                         <h4 class="text-primary text-center">UPI</h4>

                                                                    </div>
                                                                    <div class="text-center mb-4">
                                                                    <img style="width:300px;height:261px;"  src="<?=BASEURL?>assets/images/upi.png" class="card-img-top" alt="...">
                                                                   </div>
                                                                </div>
                                                                
                                                                  <div class="card border-animation-trc mt-4   trc-20-wallet my-div" id="div3" style="background-image: url('<?=BASEURL?>assets/images/nft/bg-pattern.png');">
                                                                     <div class="row" >
                                                                     <div class="col-lg-8 wallet-address-container text-center" >
                                                                               <h3 style="text-align:center;" class="text-primary mt-3 d-flex justify-content-center lh-base">TRC20 USDT Wallet</h3>
                                                                                <div class="container-copy text-center d-flex justify-content-center align-items-center w-50 mt-3 ms-md-3 ms-lg-3 ms-3">
                                                                                <div class="copy-text gradient-border" id="gradient-border">
                                                                                    <input type="text" class="text" value="TTjL4KPCd3csjEpwcsn2fJTD9ejJY7iGbi"/>
                                                                                    <button type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click to Copy"><i class="fa fa-clone copy-icon"></i></button>
                                                                                </div>
                                                                            </div>
                                                                   
                                                                    </div>
                                                                     <div class="col-lg-4 trc-qrcode text-center">
                                                                     
                                                                      <div class="text-center d-flex justify-content-center align-items-center">
                                                                    <img style="max-width:200px;margin-right:18px;" src="<?=BASEURL?>assets/images/trc20-qrcode.png" class="card-img-top my-3" alt="...">
                                                                   </div>
                                                                    </div>
                                                                </div>  
                                                                
                                                                </div>
                                                                </div>    
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                        </div>
                                                         <?= form_close(); ?> 
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                            <div class="row mt-5">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="card-title mb-0">Deposit History</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                                                <thead>
                                                                    <tr>
                                                                        
                                                                        <th>#</th>
                                                                        <th>Deposit Date</th>
                                                                        <th>Paymode</th>
                                                                         <!--<th>To</th>-->
                                                                        <th>Currency</th>
                                                                        <th>Deposited Amount</th>
                                                                        <th>Credited Amount</th>
                                                                        <!--<th>Conversion Charge</th>-->
                                                                        <th>Transaction ID</th>
                                                                        <th>View</th>
                                                                        <!--<th>Action Date</th>-->
                                                                       <th>Remark</th>
                                                                        <th>Status</th>
                                                                       
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $history = $this->db->where('user_id',$this->session->userdata('usquareusername'))->get('admin_request')->result_array();
                                                                    $count = 1;
                                                                    foreach($history as $key => $his)
                                                                    {
                                                                        if($his['status'] == 'Accepted'){
                                                                            $col = 'success';
                                                                        }else if($his['status'] == 'Rejected'){
                                                                            $col = 'danger';
                                                                        }else{
                                                                            $col = 'warning';
                                                                        }
                                                                    ?>
                                                                    <tr>
                                                                       
                                                                        <td><?=$count++;?></td>
                                                                        <td><?=$his['entry_date']?></td>
                                                                        <td><?=$his['pay_mode']?></td>
                                                                        <!--<td><?=$his['user_id']?></td>-->
                                                                        <td><?php if($his['currency'] != ""){ echo $his['currency']; }else{ echo "---"; }?></td>
                                                                        <td><?=$his['wallet_value']?></td>
                                                                        <td><?=$his['updated_amount']?></td>
                                                                        <!--<td><?=$his['conversion_charge']?></td>-->
                                                                        <td><span class="me-2"><?=$his['utr']?></span></td>
                                                                         <td><button data-bs-toggle="modal" data-bs-target=".bs-example-modal-center" data-img="<?=$his['filename']?>" type="button" class="btn btn-primary btn-icon eye-icon waves-effect waves-light">
                                                                             <i class="fa-solid fa-eye"></i></button>
                                                                        </td>
                                                                       
                                                                         <!--<td><?php if($his['approve_date'] != NULL){ echo $his['approve_date']; }else{ echo "---"; }?></td>-->
                                                                          <td><?php if($his['remark'] != ""){ echo $his['remark']; }else{ echo "---"; }?></td>
                                                                           <td><span class="badge text-bg-<?=$col?>"><?=$his['status'];?></span></td>
                                                                          
                                                                    </tr>
                                                                   <?php } ?>
                                                                   <!--Modal Starts for Eye Icon-->
                                                            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body text-center p-4">
                                                                            <div class="mt-4">
                                                                                    <div class="card">
                                                                                         <div class="text-danger" id="image_error"></div>
                                                                                    <div class="card-body" id="append_div">
                                                                                        
                                                                                       
                                                                                        <!--<div class="d-flex align-items-center border border-dashed p-2 rounded">-->
                                                                                        <!--    <div class="flex-shrink-0 avatar-sm">-->
                                                                                        <!--        <div class="avatar-title bg-light rounded">-->
                                                                                                    <!--<i class="ri-file-zip-line fs-20 text-primary"></i>-->
                                                                                        <!--            <a href="#"><img style="width:50px;height:50px;" class="img-responsive rounded" src="<?=BASEURL?>assets/images/bitcoin.jpg"></a>-->
                                                                                        <!--        </div>-->
                                                                                        <!--    </div>-->
                                                                                        <!--    <div class="flex-grow-1 ms-3">-->
                                                                                        <!--        <h6 class="mb-1"><a href="javascript:void(0);">Velzon-admin.zip</a></h6>-->
                                                                                        <!--        <small class="text-muted">3.2 MB</small>-->
                                                                                        <!--    </div>-->
                                                                                        <!--    <div class="hstack gap-3 fs-16 align-items-center">-->
                                                                                        <!--        <a href="javascript:void(0);" class="text-muted"><i class="fa-solid fa-eye"></i></a>-->
                                                                                               
                                                                                        <!--    </div>-->
                                                                                        <!--</div>-->
                                                                                        <!--<div class="d-flex align-items-center border border-dashed p-2 rounded mt-2">-->
                                                                                        <!--    <div class="flex-shrink-0 avatar-sm">-->
                                                                                        <!--        <div class="avatar-title bg-light rounded">-->
                                                                                                    <!--<i class="ri-file-ppt-2-line fs-20 text-danger"></i>-->
                                                                                        <!--            <a href="#"><img style="width:50px;height:50px;" class="img-responsive rounded" src="<?=BASEURL?>assets/images/bitcoin.jpg"></a>-->
                                                                                        <!--        </div>-->
                                                                                        <!--    </div>-->
                                                                                        <!--    <div class="flex-grow-1 ms-3">-->
                                                                                        <!--        <h6 class="mb-1"><a href="javascript:void(0);">Velzon-admin.ppt</a></h6>-->
                                                                                        <!--        <small class="text-muted">4.5 MB</small>-->
                                                                                        <!--    </div>-->
                                                                                        <!--    <div class="hstack gap-3 fs-16 align-items-center">-->
                                                                                        <!--        <a href="javascript:void(0);" class="text-muted"><i class="fa-solid fa-eye fs-20"></i></a>-->
                                                                                                
                                                                                        <!--    </div>-->
                                                                                        <!--</div>-->
                                                                                    </div>
                                                                                </div>
                                                                                <!--<div class="text-center">-->
                                                                                <!--    <img class="img-responsive img-fluid" src="<?=BASEURL?>assets/images/bitcoin.jpg">-->
                                                                                <!--</div>-->
                                                                                <div class="hstack gap-2 justify-content-center mt-5">
                                                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                                                    <!--<button type="button" class="btn btn-primary waves-effect waves-light" id="sa-success-eye-icon">Submit</button>-->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div><!-- /.modal -->
                                                                   
                                                                  
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


<script>
  const selectElement = document.getElementById('my-select');
  const errorElement = document.getElementById('error');
  const amountInput = document.getElementById('amount');

  selectElement.addEventListener('change', function() {
    if (selectElement.value === 'USDT TRC20 Wallet') {
      errorElement.style.display = 'none';
      amountInput.type = 'number';
    } else {
      errorElement.style.display = 'block';
      amountInput.type = 'number';
    }
  });
  amountInput.addEventListener('input', function() {
    const value = amountInput.value;
    amountInput.value = value.replace(/\D/g, ''); // Remove non-numeric characters
  });
</script>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
    var modeSelect = document.getElementById('my-select');
    var currencyContainer = document.querySelector('.currency-container');
    var depositInputContainer = document.querySelector('.deposit-input-container');
    var amountInputControl = document.querySelector('.amount-inputcontrol');
    var amountError = document.querySelector('.amount-error');
    var currencyError = document.querySelector('#error');
   
    
    modeSelect.addEventListener('change', function() {
      if (modeSelect.value === 'USDT TRC20 Wallet') {
        currencyContainer.style.display = 'none';
        depositInputContainer.style.display = 'none';
        amountInputControl.classList.remove('col-xxl-6', 'col-7', 'col-md-6', 'mb-3');
        amountInputControl.classList.add('col-xxl-12', 'col-12', 'col-md-12', 'mb-0 mt-2');
        amountError.style.display = 'none';
        currencyError.style.display = 'none';
        mntype.textContent = '₮';
        mnname.textContent = 'USDT';
      } else {
        currencyContainer.style.display = 'block';
        depositInputContainer.style.display = 'block';
        amountInputControl.classList.remove('col-xxl-12', 'col-12', 'col-md-12', 'mb-0');
        amountInputControl.classList.add('col-xxl-6', 'col-7', 'col-md-6', 'mb-3');
        amountError.style.display = 'block';
        currencyError.style.display = 'block';
        mntype.textContent = '$';
        mnname.textContent = 'USD';
      }
    });
  });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#my-select').change(function() {
      var selectedOption = $(this).val();

      if (selectedOption === 'USDT TRC20 Wallet') {
        $('#mntype').text('₮');
        $('#mnname').text('USDT');
      } else {
        $('#mntype').text('$');
        $('#mnname').text('USD');
      }
    });
  });
</script>

<script type="text/javascript">
    window.addEventListener('resize', function() {
  var screenWidth = window.innerWidth;
  var divElement = document.querySelector('.wallet-address-container');
  
  if (screenWidth < 1379) {
    divElement.classList.remove('col-lg-8');
    divElement.classList.add('col-lg-12');
  } else {
    divElement.classList.remove('col-lg-12');
    divElement.classList.add('col-lg-8');
  }
});
</script>

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
const select = document.getElementById('my-select');
const divs = document.querySelectorAll('.my-div');

select.addEventListener('change', (event) => {
  const selectedValue = event.target.value;
  
  if(selectedValue == "Bank Transfer"){
      var val = "div1";
  }else if(selectedValue == "UPI"){
      var val = "div2";
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



<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>      -->
<?php $amount = $this->db->select('amount')->order_by('id','desc')->limit(1)->get('price_master')->row()->amount+0; ?>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
$(document).on('click', '.btn-icon', function() {
    //alert('hii');
    $('#append_div').empty();
     $('#image_error').html('');
    var filename = $(this).attr("data-img");
    //alert(filename);
    $.post('<?=BASEURL?>user/get_image_details', {
        'file_id': filename
    })
    .done(function(res) {
       // alert($.trim(res));
        if ($.trim(res) != 'error') {
        
        var obj = JSON.parse(res);   
        
        $.each(obj, function(index, item) {
          var filename = item.filename;
          var html = '<div class="d-flex align-items-center border border-dashed p-2 rounded mb-2">' +
            '<div class="flex-shrink-0 avatar-sm">' +
            '<div class="avatar-title bg-light rounded">' +
            '<a target="_blank" href="<?=BASEURL?>assets/receipt/'+ filename +'"><img style="width:50px;height:50px;" class="img-responsive rounded" src="<?=BASEURL?>assets/receipt/'+ filename +'"></a>' +
            '</div>' +
            '</div>' +
            '<div class="flex-grow-1 ms-3">' +
            '<h6 class="mb-1"><a href="javascript:void(0);">'+ filename +'</a></h6>' +
            '</div>' +
            '<div class="hstack gap-3 fs-16 align-items-center">' +
            '<a target="_blank" href="<?=BASEURL?>assets/receipt/'+ filename +' " class="text-muted"><i class="fa-solid fa-eye"></i></a>' +
            '</div>' +
            '</div>';

            $('#append_div').append(html);
          
        });
           
        } else {
              
             $('#image_error').html('No Receipts Found');
             
        }
    });


});
</script>  

<script>
$("#amount").on('input', function() {
 $("#error").html('');
 var curr =  $( "#currency option:selected" ).val();
 if(curr != ""){
  if(curr == "INR"){ 
        var amount = parseFloat($('#amount').val());
        var money_val = parseFloat(<?=$amount;?>);
        //var money_val = parseFloat(81.76);
        //var c_charge = parseFloat(2.50);
       // var in_currency = money_val+c_charge;
        var tot_money = (amount/money_val);
        var deposit = tot_money;
        
        // var num = parseInt(2);
        // var total = amount - num;
        //alert(tot_money);
        if(tot_money > 0){
              $('#value').val(tot_money.toFixed(2));
              $('#deposit').val(deposit.toFixed(2));
        } else {
              $('#value').val('');
              $('#deposit').val('');
        }
    }else if(curr == "USD"){
        var amount = parseFloat($('#amount').val());
        if(amount > 0)
        {
            $('#value').val(amount);
            $('#deposit').val(amount);
        }else{
            $('#value').val(0);
            $('#deposit').val(0); 
        }
    }
    
 }else{
      $("#error").html('Please select currency');
 }
    
  });
  
  $( "#currency" ).on( "change", function() {
   var curr =  $( "#currency option:selected" ).val();
   //alert(curr);
   $('#value').val('');
   $('#deposit').val('');
    $('#amount').val('');
   if(curr == "INR"){
       //alert(curr);
       $("#mntype").html('₹');
       $("#mnname").html(curr);
   }else if(curr == "USD"){
       //alert(curr);
       $("#mntype").html('$');
       $("#mnname").html(curr);
   }
} );
</script>

<script>
$("#utr").on('input', function() {
    $('#utr_error').html("");
    var utr=$('#utr').val();
   //alert(utr);
    $.post('<?=BASEURL?>user/get_utr_details', {
        'utr': utr
    })
    .done(function(res) {
        //alert($.trim(res));
        if ($.trim(res) == 'success') {
               
            $('#utr_error').html("");
        } else {
               //alert(res);
              // alert('Transaction ID already exist');
             $('#utr_error').html('Transaction ID already exist');
             
        }
    });
  });
</script>

      <!-- dropzone min -->
    <script src="<?=BASEURL?>assets/libs/dropzone/dropzone-min.js"></script>
    <!-- filepond js -->
    <script src="<?=BASEURL?>assets/libs/filepond/filepond.min.js"></script>
    <script src="<?=BASEURL?>assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script src="<?=BASEURL?>assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
    <script src="<?=BASEURL?>assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="<?=BASEURL?>assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>

    <script src="<?=BASEURL?>assets/js/pages/form-file-upload.init.js"></script>


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



  <!-- aos js -->
    <script src="<?=BASEURL?>assets/libs/aos/aos.js"></script>
    <!-- prismjs plugin -->
    <script src="<?=BASEURL?>assets/libs/prismjs/prism.js"></script>
    <!-- animation init -->
    <script src="<?=BASEURL?>assets/js/pages/animation-aos.init.js"></script>
    
     
    
    
    
     <!-- Sweet Alerts js -->
<!--    <script src="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.js"></script>-->

    <!-- Sweet alert init js-->
<!--    <script src="<?=BASEURL?>assets/js/pages/sweetalerts.init.js"></script>-->




<?php include 'footer.php';?>


