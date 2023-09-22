
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
    
    @media screen and (min-width:768px){
        .select-currency{
            padding: 11px 10px !important;
        }
    }
    .badge-soft-danger {
    color: #ff0000 !important;
    }
    .text-bg-info {
    background-color: #20604f !important;
}
.text-warning {
    --vz-text-opacity: 0 !important;
    color: #ff0000 !important;
}
.deposit-submit-btn{
    background-color:#00b074 !important;
    border-color:#00b074;
}
.deposit-submit-btn:hover{
    background-color:#ff0000 !important;
    border-color:#ff0000 !important;
}
.form-control,.form-select{
    border: 1px solid #00b074 !important;
}
.deposit-card{
    background-color: #D8F1E9!important;
}
.deposit-container{
    font-family: 'Barlow', sans-serif !important;
}
@media screen and (max-width:500px){
    .row>* {
    padding-right: 7px !important;
    padding-left: 7px !important;
}
.paymode-select-container{
    padding-left: 4px !important;
    padding-top: 8px !important;
    padding-bottom: 8px !important;
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
@media screen and (max-width:500px){
    
.currency-select-container{
    padding-left: 4px !important;
    padding-top: 8px !important;
    padding-bottom: 8px !important;
    border-radius:4px !important;
}
}
.currency-mode .form-check-input:checked {
    background-color: #20604f;
    border-color: #20604f;
}
@media screen and (min-width:501px){
    .currencyt-mode .form-check-input {
    width: 22px;
    height: 22px;
}
.currrency-mode .form-check label {
    font-size: 19px;
}
}
.currency-select-container{
    border: 1px solid #00b074;
    padding-top: 9px;
    padding-bottom: 9px;
    padding-left: 8px;
    border-radius: 0px;
}
@media screen and (min-width:768px){
    .currency-select-container{
    border: 3px solid #20604f !important;
    }
    .paymode-select-container{
    border: 3px solid #00b074;
    }
}
#error{
    color: #ff0000 !important;
    font-weight: 500;
    letter-spacing: 1px;
    background-color:#ffe6e6 !important;
    border-radius:4px !important;
}

</style>

 <!-- dropzone css -->
    <link rel="stylesheet" href="<?=BASEURL?>assets/libs/dropzone/dropzone.css" type="text/css" />
     <!-- Icons Css -->
    <link href="<?=BASEURL?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- Filepond css -->
    <link rel="stylesheet" href="<?=BASEURL?>assets/libs/filepond/filepond.min.css" type="text/css" />
    <link rel="stylesheet" href="<?=BASEURL?>assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">

 <!-- aos css -->
 <!--   <link rel="stylesheet" href="<?=BASEURL?>assets/libs/aos/aos.css" />-->
    
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
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<div class="container-fluid deposit-container">
    
    
    <div class="row">
         <div class="col-xxl-12 col-lg-12">
                            <!--<h5 class="mb-3">Deposit</h5>-->
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
                                                    <div class="card deposit-card">
                                                        <div class="card-header align-items-center d-flex deposit-card pb-0">
                                                            <h4 class="card-title mb-0 flex-grow-1">Wallet-Deposit</h4>
                                                            <div class="flex">
                                                            <a href="<?=BASEURL?>user/deposit_history" class="btn btn-green fs-25 text-white">
                                                                <i class="fas fa-eye me-1"></i> View Deposit-History
                                                            </a>
                                                        </div>
                                                        </div>
                                                        <!-- end card header -->
                                                         <div id="message" class="text-danger text-center"></div>
                                                         <form  method='post' id="hockey">
                                                         <!--<input type="hidden" class="form-control" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>">-->
                                             
                                                        <div class="card-body">
                                                            <div class="live-preview">
                                                                <div class="row gy-4">
                                                                   
                                                                    <div class="col-lg-6">
                                                                        <div class="row">
                                                                            
                                                                   
                                                                        
                                                                  <?php /*  <div class="col-xxl-12 col-12 col-md-12 mb-3">
                                                                             <!--<form action="#" method="post" id="hockey">-->
                                                                     <label for="tid" class="form-label">Payment Mode <span><?=form_error('mode');?></span></label>
                                                                     <div class="text-danger" id="mode_error"></div>
                                                                     <select class="form-select"  id="my-select" name="mode" value="<?=$this->input->post('mode');?>" >
                                                                        <option selected value = "">Select Paymode</option>
                                                                        <option value="Bank Transfer">Bank Transfer</option>
                                                                        <option value="UPI">UPI</option>
                                                                        <option value="USDT TRC20 Wallet">USDT TRC20 Wallet</option>
                                                                     </select>    
                                                                     <!--</form>-->
                                                                    </div>
                                                                    */ ?>
                                                                    
                                                                     <div class="col-xxl-12 col-md-12 mb-3 payment-mode">
                                            
                                                                        <label for="tid" class="form-label">Payment Mode <span><?=form_error('mode');?></span></label>
                                                                      
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
                                                                        <input class="form-check-input me-1" type="radio" name="mode"  value="USDT TRC20 Wallet" id ="trc20wallet">
                                                                        <label class="form-check-label text-dark" for="crypto">
                                                                           USDT TRC20 Wallet
                                                                        </label>
                                                                    </div>
                                                                     </div>
                                                                     
                                                                  </div>
                                                                  <div id="error" class="ms-2 d-flex justify-content-center text-center col-11 text-danger currency-error"></div>
                                                                  <div class="col-xxl-6 col-lg-6 col-12 col-xs-12 col-sm-12 col-md-6 mb-3 currency-container currency-mode">
                                                                               <label for="tid" class="form-label">Currency</label>
                                                                      
                                                                        <div class="d-flex align-items-center currency-select-container">
                                                                        <div class="form-check">
                                                                        <input class="form-check-input me-1" type="radio" name="currency"  value="USD">
                                                                        <label class="form-check-label text-dark" for="bank-transfer">
                                                                            USD
                                                                        </label>
                                                                    </div>
                                                                    
                                                                    <div class="form-check mx-2 mx-lg-4">
                                                                        <input class="form-check-input me-1" type="radio" name="currency"  value="INR">
                                                                        <label class="form-check-label text-dark" for="upi">
                                                                            INR
                                                                        </label>
                                                                    </div>
                                                                  
                                                                     </div>
                                                                </div>      
                                                                    <!--end col-->
                                                                   <!--<div id="error" class="text-center text-danger currency-error"></div>-->
                                                                   <!--      <div class="col-xxl-6 col-12 col-xs-12 col-sm-12 col-md-6 mb-3 currency-container">-->
                                                                   <!--     <label for="tid" class="form-label currency-error">Currency <span class="currency-error"><?=form_error('currency');?></span></label>-->
                                                                   <!--     <div class="text-danger" id="currency_error"></div>-->
                                                                   <!--  <select class="form-select select-currency"  id="currency" value="<?=$this->input->post('currency');?>" name="currency">-->
                                                                   <!--     <option selected value = "">Select Currency</option>-->
                                                                   <!--     <option value="USD">USD</option>-->
                                                                   <!--     <option value="INR">INR</option>-->
                                                                        <!--<option value="">RUB</option>-->
                                                                   <!--  </select>    -->
                                                                   <!-- </div>-->
                                                                    <!--end col-->
                                                                    <div class="col-xxl-6 col-12 col-xs-12 col-sm-12 col-md-6 mb-3 amount-inputcontrol">
                                                                          <label for="tid" class="form-label amount-error">Enter Amount <span><?=form_error('amount');?></span></label>
                                                                          <div class="text-danger" id="amount_error"></div>
                                                                   <div style="background-color:#20604f;" class="input-group">
                                                                       
                                                                        <span id="mntype" class="input-group-text input-usd custom-amount-doll">$</span>
                                                                        <input type="text" class="form-control amount-input" value="<?=$this->input->post('amount');?>" name="amount" id="amount">
                                                                        <span id="mnname" class="input-group-text input-usd custom-amount-doll">USD</span>
                                                                    </div>  
                                                                    </div>  
                                                                    
                                                                    <div class="col-xxl-12 col-md-12">
                                                                    <div>
                                                                        <label for="" class="form-label d-none">Value</label>
                                                                            <input type="hidden" id="value" name="" value="" class="form-control" readonly>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-xxl-12 col-md-12 col-lg-12 col-12  mb-3">
                                                                      
                                                                    <div class="deposit-input-container">
                                                                            <label for=""  class="form-label">Deposit  <span><?=form_error('deposit');?></span></label>
                                                                             <div class="text-danger" id="deposit_error"></div>
                                                                            <input style="color: #1e896c;font-weight: 600;letter-spacing: 1px;" type="text" id="deposit" name="deposit" value="<?=$this->input->post('deposit');?>" class="form-control deposit-input" readonly >
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-xxl-12 col-md-12 col-lg-12 col-12 mb-3" id="transaction-id">
                                                                        <div>
                                                                            <label for="tid"  class="form-label">Transaction ID <span><?=form_error('utr');?></span></label>
                                                                            <div class="text-danger" id="utr_error"></div>
                                                                            <input type="text" id="utr" value="<?=$this->input->post('utr');?>" name="utr" class="form-control" >
                                                                        </div>
                                                                        <!--<div class="text-danger" id="utr_error"></div>-->
                                                                    </div>
                                                                    
                                                                    <!--end col-->
                                                                    <div class="col-xxl-12 col-md-12 mb-3 mt-1">
                                                                        <div>
                                                                            <label for="formFile" class="form-label">Upload Reciept <small style="font-size:11px;">(Max File Size 2MB)</small></label>
                                                                            <input class="form-control" type="file" value="<?=$this->input->post('userfile[]');?>" name="userfile[]" id="formFile" multiple >
                                                                            <span class="badge badge-soft-danger mt-2 fs-13">Only JPG,JPEG,PNG and PDF files are supported</span>
                                                                        </div>
                                                                     
                                                                    </div>
                                                                    <!--end col-->
                                                                    </div>
                                                                    <!--End Row-->
                                                                    <div class="d-flex justify-content-center">
                                                                        <button type="submit" id="sbmt" class="btn btn-primary deposit-submit-btn waves-effect waves-light"><i class="fa-regular fa-circle-check me-2"></i>Submit</button>
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="col-lg-6" >
                                                                    
                                                                    <div class="card mt-4 border-animation deposit-card acc-details  colors my-div" id="div1" data-aos="">
                                                                    <div class="card-body text-center">
                                                                       <h4 class="text-red text-center">Bank Transfer | Account Details</h4>
                                                                    </div>
                                                                   
                                                                    <div class="p-lg-4 p-2 pt-0 ">
                                                                           <div class="text-bg-info bg-gradient p-4 bank-transfer-bg rounded-3">
                                                                              <div class="d-flex">
                                                                                 <div class="flex-grow-1">
                                                                                    <i class="bx bxs-bank h1 text-white"></i>
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
                                                                
                                                       
                                                       
                                                                <div class="card deposit-card border-animation qr-code my-div"  id="div2">
                                                                     <div class="card-body">
                                                                         <h4 class="text-red text-center">UPI</h4>

                                                                    </div>
                                                                    <div class="text-center mb-4">
                                                                    <img class="px-2" style="width:300px;height:261px;"  src="<?=BASEURL?>assets/images/upi.png" class="card-img-top" alt="...">
                                                                   </div>
                                                                </div>
                                                                
                                                                  <div class="card deposit-card border-animation mt-4   trc-20-wallet my-div" id="div3" >
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
                                                                    <img style="max-width:200px;margin-right:18px;" src="<?=BASEURL?>assets/images/trc20-qrcode.png" class="card-img-top my-3" alt="...">
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
                                                        </form>
                                                        
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                           
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
//  $(document).ready(function () {
//     $('#tabrow').DataTable();
// });   
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <script src="<?=BASEURL?>assets/js/pages/sweetalerts.init.js"></script>
 <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Include SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
  $(document).ready(function() {
    $('#hockey').submit(function(event) {
      event.preventDefault();
        $('#mode_error').html(''); 
        $('#currency_error').html(''); 
        $('#amount_error').html(''); 
        $('#deposit_error').html('');  
        $('#utr_error').html(''); 
        $('#message').html('');
      $("#sbmt").prop("disabled", true);
    //   $("#sbmt").html('Wait...');

      var formData = new FormData($(this)[0]);
      var fileInput = document.getElementById('formFile');
        if (fileInput.files.length === 0) {
          Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'Please upload a file'
          });
          $("#sbmt").prop("disabled", false);
          $("#sbmt").html('Submit');
          return;
        }
      $.ajax({
        url: '<?=BASEURL?>user/deposit',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          response = JSON.parse(response);
          if (response.status == 'success') {
            $('#hockey')[0].reset();
            $("#sbmt").prop("disabled", false);
            Swal.fire({
              icon: 'success',
              title: 'Success!',
              text: response.message
            });
             getData(); 
          } else {
            $('#mode_error').html(response.mode_error);
            $('#currency_error').html(response.currency_error);
            $('#amount_error').html(response.amount_error);
            $('#deposit_error').html(response.deposit_error);
            $('#utr_error').html(response.utr_error);
            $('#message').html(response.message);
            $("#sbmt").prop("disabled", false);
            $("#sbmt").html('Submit');
          }
        },
        error: function() {
          alert('An error occurred. Please try again.');
          $("#sbmt").prop("disabled", false);
          $("#sbmt").html('Submit');
        }
      });
    });
  });
});
</script>



   <!--Viewing Table data-->

<script>
    $(document).ready(function() {
        getData(); // Call the function to fetch and update the table data on page load
    });

    function getData() {
        $.ajax({
            url: '<?=BASEURL?>user/getHistory',
            type: 'POST',
            dataType: 'json',
            success: function(response) {
                dataview(response); // Call the function to append the table with the fetched data
                initializeDataTable(); // Initialize DataTables after populating the table
            },
            error: function() {
                // alert('Error occurred while fetching data.');
                console.log(response);
            }
        });
    }
    

    function dataview(data) {
        var tableBody = $('#reqdata');
        tableBody.empty(); // Clear the table body

        $.each(data, function(index, history) {
            var col;
            if (history.status === 'Accepted') {
                col = 'success';
            } else if (history.status === 'Rejected') {
                col = 'danger';
            } else {
                col = 'warning';
            }

            var row = '<tr>' +
                '<td>' + (index + 1) + '</td>' +
                '<td>' + history.entry_date + '</td>' +
                '<td>' + history.pay_mode + '</td>' +
                '<td>' + history.currency + '</td>' +
                '<td>' + history.wallet_value + '</td>' +
                '<td>' + history.updated_amount + '</td>' +
                '<td>' + history.utr + '</td>' +
                '<td><button data-bs-toggle="modal" data-bs-target=".bs-example-modal-center" data-img="' + history.filename + '" type="button" class="btn btn-primary btn-icon eye-icon waves-effect waves-light"><i class="fa-solid fa-eye"></i></button></td>' +
                '<td>' + (history.remark !== "" ? history.remark : "---") + '</td>' +
                '<td><span class="badge text-bg-' + col + '">' + history.status + '</span></td>' +
                '</tr>';

            tableBody.append(row); // Append the row to the table body
        });
    }
     function initializeDataTable() {
        $('#tabrow').DataTable();
        responsive: true
    }
</script>





<script>
//   const selectElement = document.getElementById('my-select');
  const selectElement = document.querySelectorAll('input[name="mode"]');
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

// $(document).ready(function() {
//   $('input[name="mode"]').on("change", function() {
//     var selectedMode = $(this).val();
    
//     if (selectedMode === "USDT TRC20 Wallet") {
//       $("#error").hide();
//       $("#amount").attr("type", "number");
//     } else {
//       $("#error").show();
//       $("#amount").attr("type", "text");
//     }
//   });
  
//   $("#amount").on("input", function() {
//     var value = $(this).val();
//     $(this).val(value.replace(/\D/g, ""));
//   });
// });
</script>

<script type="text/javascript">

//   document.addEventListener('DOMContentLoaded', function() {
//     // var modeSelect = document.getElementById('my-select');
//     var modeSelect = document.querySelectorAll('input[name="mode"]');
//     var currencyContainer = document.querySelector('.currency-container');
//     var depositInputContainer = document.querySelector('.deposit-input-container');
//     var amountInputControl = document.querySelector('.amount-inputcontrol');
//     var amountError = document.querySelector('.amount-error');
//     var currencyError = document.querySelector('#error');
   
    
//     modeSelect.addEventListener('change', function() {
//       if (modeSelect.value === 'USDT TRC20 Wallet') {
//         currencyContainer.style.display = 'none';
//         depositInputContainer.style.display = 'none';
//         amountInputControl.classList.remove('col-xxl-6', 'col-7', 'col-md-6', 'mb-3');
//         amountInputControl.classList.add('col-xxl-12', 'col-12', 'col-md-12', 'mb-0 mt-2');
//         amountError.style.display = 'none';
//         currencyError.style.display = 'none';
//         mntype.textContent = '₮';
//         mnname.textContent = 'USDT';
//       } else {
//         currencyContainer.style.display = 'block';
//         depositInputContainer.style.display = 'block';
//         amountInputControl.classList.remove('col-xxl-12', 'col-12', 'col-md-12', 'mb-0');
//         amountInputControl.classList.add('col-xxl-6', 'col-12', 'col-md-6', 'mb-3');
//         amountError.style.display = 'block';
//         currencyError.style.display = 'block';
//         mntype.textContent = '$';
//         mnname.textContent = 'USD';
//       }
//     });
//   });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
  var modeSelect = document.querySelectorAll('input[name="mode"]');
  var currencyContainer = document.querySelector('.currency-container');
  var depositInputContainer = document.querySelector('.deposit-input-container');
  var amountInputControl = document.querySelector('.amount-inputcontrol');
  var amountError = document.querySelector('.amount-error');
  var currencyError = document.querySelector('#error');
  var mntype = document.getElementById('mntype');
  var mnname = document.getElementById('mnname');

  modeSelect.forEach(function(radio) {
    radio.addEventListener('change', function() {
      if (radio.value === 'USDT TRC20 Wallet') {
        currencyContainer.style.display = 'none';
        depositInputContainer.style.display = 'none';
        amountInputControl.classList.remove('col-xxl-6', 'col-7', 'col-md-6', 'mb-3');
        amountInputControl.classList.add('col-xxl-12', 'col-12', 'col-md-12', 'mb-0', 'mt-2');
        amountError.style.display = 'none';
        currencyError.style.display = 'none';
        mntype.textContent = '₮';
        mnname.textContent = 'USDT';
      } else {
        currencyContainer.style.display = 'block';
        depositInputContainer.style.display = 'block';
        amountInputControl.classList.remove('col-xxl-12', 'col-12', 'col-md-12', 'mb-0', 'mt-2');
        amountInputControl.classList.add('col-xxl-6', 'col-12', 'col-md-6', 'mb-3');
        amountError.style.display = 'block';
        currencyError.style.display = 'block';
        mntype.textContent = '$';
        mnname.textContent = 'USD';
      }
    });
  });
});  
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // $('#my-select').change(function() {
    $('input[name="mode"]').change(function() {
      var selectedOption = $(this).val();

      if (selectedOption === 'USDT TRC20 Wallet') {
        $("input[name='currency'][value='USD']").prop("checked",true); 
        $("#error").html('');
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
	}, 2000);
});

</script>


<script>
// const select = document.getElementById('my-select');
// const select = document.querySelectorAll('input[name="mode"]');
// const divs = document.querySelectorAll('.my-div');

// select.addEventListener('change', (event) => {
//   const selectedValue = event.target.value;
  
//   if(selectedValue == "Bank Transfer"){
//       var val = "div1";
//   }else if(selectedValue == "UPI"){
//       var val = "div2";
//   }else if(selectedValue == "USDT TRC20 Wallet"){
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


const select = document.querySelectorAll('input[name="mode"]');
const divs = document.querySelectorAll('.my-div');

select.forEach(radio => {
  radio.addEventListener('change', (event) => {
    const selectedValue = event.target.value;
    let val;

    if (selectedValue === "Bank Transfer") {
      val = "div1";
    } else if (selectedValue === "UPI") {
      val = "div2";
    } else if (selectedValue === "USDT TRC20 Wallet") {
      val = "div3";

    }

    divs.forEach(div => {
      if (div.id === val) {
        div.style.display = 'block';
      } else {
        div.style.display = 'none';
      }
    });
  });
});

document.getElementById('amount').addEventListener('input', (event) => {
  const selectedMode = document.querySelector('input[name="mode"]:checked').value;
  if (selectedMode === "USDT TRC20 Wallet") {
    const amount = event.target.value;
    depositInput.value = amount;
  }
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
// $("#amount").on('input', function() {
//  $("#error").html('');
// //  var curr =  $( "#currency option:selected" ).val();
// var curr = $('input[name="currency"]:checked').val();
//  var selectedMode = document.querySelector('input[name="mode"]:checked').value;
// //  if (curr != "" || curr != "USDT TRC20 Wallet") {
//  if(curr != ""){
//   if(curr == "INR"){ 
//         var amount = parseFloat($('#amount').val());
//         var money_val = parseFloat(<?=$amount;?>);
//         //var money_val = parseFloat(81.76);
//         //var c_charge = parseFloat(2.50);
//       // var in_currency = money_val+c_charge;
//         var tot_money = (amount/money_val);
//         var deposit = tot_money;
        
//         // var num = parseInt(2);
//         // var total = amount - num;
//         //alert(tot_money);
//         if(tot_money > 0){
//               $('#value').val(tot_money.toFixed(2));
//               $('#deposit').val(deposit.toFixed(2));
//         } else {
//               $('#value').val('');
//               $('#deposit').val('');
//         }
//     }else if(curr == "USD"){
//         var amount = parseFloat($('#amount').val());
//         if(amount > 0)
//         {
//             $('#value').val(amount);
//             $('#deposit').val(amount);
//         }else{
//             $('#value').val(0);
//             $('#deposit').val(0); 
//         }
//     }
    
//  }
//  else if (selectedMode == "USDT TRC20 Wallet") {
//         var amount = parseFloat($('#amount').val());
//         if (amount > 0) {
//             $('#value').val(amount);
//             $('#deposit').val(amount);
//         } else {
//             $('#value').val(0);
//             $('#deposit').val(0);
//         }
//     }
    
//  else{
//       $("#error").html('Please select currency');
//  }
    
//   });
  
// //   $( "#currency" ).on( "change", function() {
// //   var curr =  $( "#currency option:selected" ).val();
// $("input[name='currency']").on("change", function() {
//     var curr = $('input[name="currency"]:checked').val();
//   //alert(curr);
//   $('#value').val('');
//   $('#deposit').val('');
//     $('#amount').val('');
//   if(curr == "INR"){
//       //alert(curr);
//       $("#mntype").html('₹');
//       $("#mnname").html(curr);
//   }else if(curr == "USD"){
//       //alert(curr);
//       $("#mntype").html('$');
//       $("#mnname").html(curr);
//   }
// } );
</script>


<script>
$("#amount").on('input', function() {
    $("#error").html('');
    var curr = $('input[name="currency"]:checked').val();
    var selectedMode = document.querySelector('input[name="mode"]:checked');

    if (curr === undefined) {
        $("#error").html('Please select a currency');
        return;
    }

    if (selectedMode === null) {
        $("#error").html('Please select a payment mode');
        return;
    }

    var amount = parseFloat($('#amount').val());

    if (isNaN(amount) || amount <= 0) {
        $('#value').val('');
        $('#deposit').val('');
        return;
    }

    if (curr === "INR") {
        var money_val = parseFloat(<?=$amount;?>);
        var tot_money = amount / money_val;
        var deposit = tot_money;

        if (tot_money > 0) {
            $('#value').val(tot_money.toFixed(2));
            $('#deposit').val(deposit.toFixed(2));
        } else {
            $('#value').val('');
            $('#deposit').val('');
        }
    } else if (curr === "USD" || selectedMode.value === "USDT TRC20 Wallet") {
        $('#value').val(amount.toFixed(2));
        $('#deposit').val(amount.toFixed(2));
    }
});

$("input[name='currency']").on("change", function() {
    var curr = $('input[name="currency"]:checked').val();
    var selectedMode = document.querySelector('input[name="mode"]:checked');

    $('#value').val('');
    $('#deposit').val('');
    $('#amount').val('');

    if (curr === "INR") {
        $("#mntype").html('₹');
        $("#mnname").html(curr);
    } else if (curr === "USD") {
        $("#mntype").html('$');
        $("#mnname").html(curr);
    }

    if (selectedMode === null) {
        $("#error").html('Please select a payment mode');
    } else {
        $("#error").html('');
    }
});

$("input[name='mode']").on("change", function() {
    var selectedMode = document.querySelector('input[name="mode"]:checked');
    var curr = $('input[name="currency"]:checked').val();

    if (selectedMode === null) {
        $("#error").html('Please select a payment mode');
    } else if (curr === undefined) {
        $("#error").html('Please select a currency');
    } else {
        $("#error").html('');
    }
});
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




<script>
//  $(document).ready(function() {
//   $('input[name="mode"]').on("change", function() {
//     var selectedMode = $(this).val();
    
//     if (selectedMode === "Bank Transfer") {
//       $("#div1").show();
//       $("#div2").hide();
//       $("#div3").hide();
//       $("#currency").closest(".currency-container").show();
//       $("#amount").closest(".amount-inputcontrol").show();
//     } else if (selectedMode === "UPI") {
//       $("#div1").hide();
//       $("#div2").show();
//       $("#div3").hide();
//       $("#currency").closest(".currency-container").show();
//       $("#amount").closest(".amount-inputcontrol").show();
//     } else if (selectedMode === "USDT TRC20 Wallet") {
//       $("#div1").hide();
//       $("#div2").hide();
//       $("#div3").show();
//       $("#currency").closest(".currency-container").hide();
//       $("#amount").closest(".amount-inputcontrol").removeClass("col-xxl-6 col-12 col-xs-12 col-sm-12 col-md-6").addClass("col-xxl-12 col-12 col-xs-12 col-sm-12 col-md-12");
//     }
//   });
// });
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
    <!--<script src="<?=BASEURL?>assets/js/pages/animation-aos.init.js"></script>-->

    <script src="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.js"></script>

   

<?php include 'footer.php';?>


