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
@media screen and (max-width:767px){
    .ww-heading{
        display:none !important;
    }
}
@media screen and (max-width:500px){
    .withdraw-card-header{
        padding-top:0 !important;
    }
}

.payment-card{
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
.payment-nav{
    border-radius:0px !important;
}
.payment-tab{
    border-radius:0px !important;
    border:1px solid #00b074 !important;
    background-color:white !important;
}
.payment-nav.active:hover {
    color: #fff!important;
}

.payment-card{
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

  </style>

<div class="container-fluid withdraw-container">
<div class="row">
   <div class="col-xxl-12 col-lg-12">
      <h5 class="mb-2">Payment Methods</h5>
      <div class="card withdraw-card">
         <div class="card-body withdraw-cardbody">
            <ul class="nav nav-pills nav-pills-withdraw nav-justified mb-0" role="tablist" id="withdraw-pills">
               <li class="nav-item payment-tab waves-effect waves-light ">
                  <a class="nav-link active withdraw-tab-text payment-nav" data-bs-toggle="tab" href="#bank-tab" role="tab">
                  Bank
                  </a>
               </li>
                <li class="nav-item payment-tab waves-effect waves-light mx-2 mx-lg-3 mx-sm-2">
                   <a class="nav-link withdraw-tab-text payment-nav" data-bs-toggle="tab" href="#upi-tab" role="tab">
                       UPI
                   </a>
               </li>
                <li class="nav-item payment-tab waves-effect waves-light">
                   <a class="nav-link withdraw-tab-text payment-nav" data-bs-toggle="tab" href="#crypto-tab" role="tab">
                       Crypto
                   </a>
               </li>
              
            </ul>

            
            <!-- Tab panes -->
            <div class="tab-content text-muted">
               <div class="tab-pane active" id="bank-tab" role="tabpanel">
                   <div class="row">
                               <div class="col-lg-12">
                                   <div class="card withdraw-card">
                                       <div class="card-header pb-0 withdraw-card align-items-center d-flex">
                                           <h4 class="card-title mb-0 flex-grow-1">Add Bank</h4>
                                       </div><!-- end card header -->
                                       <div class="card-body">
                                           <form action="<?=BASEURL?>user/add_bank" method="post">
                                           <div class="live-preview">
                                               <div class="row gy-4 d-flex justify-content-center">
                                                   <div class="col-lg-6">
                                                       <div class="mb-3">
                                                           <label for="basiInput" class="form-label">Account Holder Name</label>
                                                           <input type="text" name="acc_name" class="form-control" id="">
                                                       </div>
                                                   <!--end col-->
                                                        <div class="mb-3">
                                                           <label for="basiInput" class="form-label">Account Number</label>
                                                           <input type="number" name="acc_no" class="form-control" id="">
                                                       </div>
                                                   <!--end col-->
                                                    <div class="mb-3">
                                                           <label for="basiInput" class="form-label">IFSC Code</label>
                                                           <input type="text" name="ifsc" class="form-control" id="">
                                                       </div>
                                                   <!--end col-->
                                                      <div>
                                                           <label for="basiInput" class="form-label">Bank Name</label>
                                                           <input type="text" name="bank_name" class="form-control" id="">
                                                       </div>
                                                   <!--end col-->
                                                  
                                                   <div class="d-flex justify-content-center mt-3">
                                                       <button type="submit" class="btn submit-btn btn-primary waves-effect waves-light"><i class="fa-regular fa-circle-check me-2"></i>Submit</button>
                                                   </div>
                                                   </div>
                                               </div>
                                               <!--end row-->
                                           </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                               <!--end col-->
                    </div>
                        <!--Form Ends-->
                     <div class="row mt-3">
                        <div class="col-lg-12">
                           <div style="border: 2px solid #00b074;" class="card payment-card">
                              <div class="card-header payment-card">
                                 <h5 class="card-title mb-0">My Bank Accounts</h5>
                              </div>
                              <div class="card-body">
                                 <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                    <thead>
                                       <tr>
                                          <th>#</th>
                                          <th>Date</th>
                                          <th>Account Holder Name</th>
                                          <th>Account Number</th>
                                          <th>IFSC Code</th>
                                          <th>Bank Name</th>
                                         
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                       $count =1;
                                       $banks = $this->db->where('user_id',$this->session->userdata('usquareusername'))->get('bank_details')->result_array();
                                       foreach($banks as $key => $ba)
                                       {
                                           if($ba['status'] == "Active")
                                           {
                                               $col = 'success';
                                           }else{
                                               $col = 'danger';
                                           }
                                       ?>
                                       <tr>
                                          <td><?=$count++;?></td>
                                          <td><?=$ba['entry_date'];?></td>
                                          <td><?=$ba['acc_name'];?></td>
                                          <td><?=$ba['acc_no'];?></td>
                                          <td><?=$ba['ifsc'];?></td>
                                          <td><?=$ba['bank_name'];?></td>
                                         
                                       </tr>
                                     <?php } ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
               <div class="tab-pane" id="upi-tab" role="tabpanel">
                     <div class="row">
                                   <div class="col-lg-12">
                                       <div class="card withdraw-card">
                                           <div class="card-header pb-0 withdraw-card align-items-center d-flex">
                                               <h4 class="card-title mb-0 flex-grow-1">UPI</h4>
                                           </div><!-- end card header -->
                                           <div class="card-body">
                                               <form action="<?=BASEURL?>user/upi_details" method="post" enctype="multipart/form-data">
                                               <div class="live-preview">
                                                   <div class="row gy-4 d-flex justify-content-center">
                                                       <div class="col-lg-6">
                                                           <div class="mb-3">
                                                               <label for="upi" class="form-label">UPI ID</label>
                                                               <input type="text" name="upi_id" class="form-control" id="">
                                                           </div>
                                                       <!--end col-->
                                                       <!-- File Input Sizing Default -->
                                                       <div>
                                                           <label for="upi" class="form-label">Upload QR Image</label>
                                                           <input class="form-control" id="formFileSm" type="file" name="userfile">
                                                       </div>
                                                      
                                                       <div class="d-flex justify-content-center mt-3">
                                                           <button type="submit" class="btn submit-btn btn-primary waves-effect waves-light"><i class="fa-regular fa-circle-check me-2"></i>Submit</button>
                                                       </div>
                                                       </div>
                                                   </div>
                                                   <!--end row-->
                                               </div>
                                               </form>
                                           </div>
                                       </div>
                                   </div>
                                   <!--end col-->
                               </div>
                     <div class="row mt-3">
                        <div class="col-lg-12">
                           <div style="border: 2px solid #00b074;" class="card payment-card">
                              <div class="card-header payment-card">
                                 <h5 class="card-title mb-0">UPI History</h5>
                              </div>
                              <div class="card-body">
                                 <table id="scroll-horizontal2" class="table nowrap align-middle" style="width:100%">
                                    <thead>
                                       <tr>
                                          <th>#</th>
                                          <th>Date</th>
                                          <th>UPI ID</th>
                                          <th>Image</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                       $countt =1;
                                       $upi_details = $this->db->where('user_id',$this->session->userdata('usquareusername'))->get('upi_details')->result_array();
                                       foreach($upi_details as $key => $ud)
                                       {
                                          
                                       ?>
                                       <tr>
                                          <td><?=$countt++;?></td>
                                          <td><?=$ud['entry_date'];?></td>
                                          <td><?=$ud['upi'];?></td>
                                          <td>
                                              <a href="<?=BASEURL?>assets/upi/<?=$ud['filename'];?>"><img style="max-height:50px;width:auto" src="<?=BASEURL?>assets/upi/<?=$ud['filename'];?>"></a>
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
               <div class="tab-pane" id="crypto-tab" role="tabpanel">
                   <div class="row">
                                   <div class="col-lg-12">
                                       <div class="card withdraw-card">
                                           <div class="card-header pb-0 withdraw-card align-items-center d-flex">
                                               <h4 class="card-title mb-0 flex-grow-1">Crypto</h4>
                                           </div><!-- end card header -->
                                           <div class="card-body">
                                               <form action="<?=BASEURL?>user/crypto_details" method="post" enctype="multipart/form-data">
                                               <div class="live-preview">
                                                   <div class="row gy-4 d-flex justify-content-center">
                                                       <div class="col-lg-6">
                                                           <label for="crypto" class="form-label">Network</label>
                                                            <select name="network" class="form-select mb-3" aria-label="Default select example">
                                                               <option selected value="">Select Network</option>
                                                               <option value="TRC-20">TRC-20</option>
                                                               <option value="BEP-20">BEP-20</option>
                                                               <option value="ERC-20">ERC-20</option>
                                                           </select>
                                                           <div class="mb-3">
                                                               <label for="crypto" class="form-label">Crypto Address</label>
                                                               <input type="text" name="crypto" class="form-control" id="">
                                                           </div>
                                                       <!--end col-->
                                                       <!-- File Input Sizing Default -->
                                                       <div>
                                                           <label for="upi" class="form-label">Upload Crypto Image</label>
                                                           <input class="form-control" id="formFileSm" type="file" name="userfilee">
                                                       </div>
                                                      
                                                       <div class="d-flex justify-content-center mt-3">
                                                           <button type="submit" class="btn submit-btn btn-primary waves-effect waves-light"><i class="fa-regular fa-circle-check me-2"></i>Submit</button>
                                                       </div>
                                                       </div>
                                                   </div>
                                                   <!--end row-->
                                               </div>
                                               </form>
                                           </div>
                                       </div>
                                   </div>
                                   <!--end col-->
                                  </div>
                  <div class="row mt-3">
                    <div class="col-lg-12">
                       <div style="border: 2px solid #00b074;" class="card payment-card">
                          <div class="card-header payment-card">
                             <h5 class="card-title mb-0">Crypto History</h5>
                          </div>
                          <div class="card-body">
                             <table id="scroll-horizontal3" class="table nowrap align-middle" style="width:100%">
                                <thead>
                                   <tr>
                                      <th>#</th>
                                      <th>Date</th>
                                      <th>Network</th>
                                      <th>Wallet Address</th>
                                      <th>Image</th>
                                   </tr>
                                </thead>
                                <tbody>
                                 <?php
                                   $countt =1;
                                   $crypto_details = $this->db->where('user_id',$this->session->userdata('usquareusername'))->get('crypto_details')->result_array();
                                   foreach($crypto_details as $key => $ud)
                                   {
                                      
                                   ?>
                                   <tr>
                                      <td><?=$countt++;?></td>
                                      <td><?=$ud['entry_date'];?></td>
                                      <td><?=$ud['network'];?></td>
                                      <td><?=$ud['crypto'];?></td>
                                       <td>
                                          <a href="<?=BASEURL?>assets/upi/<?=$ud['filename'];?>" target="_blank">
                                            <img style="max-height: 50px; width: auto;" src="<?=BASEURL?>assets/upi/<?=$ud['filename'];?>" >
                                        </a>
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
            </div>
            <!-- end card-body -->
         </div>
         <!-- end card -->
      </div>
   </div>
</div>
</div>


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


</script>