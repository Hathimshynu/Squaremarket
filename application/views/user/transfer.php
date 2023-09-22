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
   background-color: #4dd3ff6b !important;
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

<div class="container-fluid">
<div class="row">
   <div class="col-xxl-12 col-lg-12">
      <h5 class="mb-3">Transfer</h5>
      <div class="card">
         <div class="card-body">
            <!-- Tab panes -->
            <div class="tab-content text-muted">
               <div class="tab-pane active" id="pill-justified-home-1" role="tabpanel">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="card">
                           <div class="card-header align-items-center d-flex">
                              <h4 class="card-title mb-0 flex-grow-1">Transfer</h4>
                           </div>
                           <!-- end card header -->
                           <div class="card-body">
                              <div class="live-preview">
                                 <div class="row gy-4 d-flex justify-content-center">
                                    <div class="col-lg-6">
                                       <div class="row">
                                           <form action="<?=BASEURL?>user/transfer" method="post" id="hockey">
                                          <div class="col-xxl-12 col-md-12 mb-3">
                                                <label for="tid" class="form-label">From Account <span><?=form_error('from_account');?></span></label>
                                                <select class="form-select" name="from_account" id="my-select">
                                                   <option value="" selected>Select</option>
                                                   <?php 
                                                    $my_accounts = array();
                                                    $accounts = $this->db->where('email',$this->session->userdata('usquareemail'))->get('user_role')->result_array();
                                                    foreach($accounts as $key => $acc){
                                                        array_push($my_accounts,$acc['account_id']);
                                                        
                                                        if($acc['account_id'] != ""){
                                                            $acc_id = $acc['account_id'];
                                                        }else{
                                                            $acc_id = "Nill";
                                                        }
                                                    ?>
                                                   <option value="<?=$acc_id;?>"><?=$acc['fname']." ".$acc['lname'];?> (<?=$acc_id?>)</option>
                                                   <?php } ?>         
                                                </select>
                                          </div>  
                                          <div class="col-xxl-12 col-md-12 mb-3">
                                                <label for="tid" class="form-label">To Account <span><?=form_error('to_account');?></span></label>
                                                <select class="form-select" name="to_account" id="my-select">
                                                   <option value="" selected>Select</option>
                                                   <?php foreach($accounts as $key => $acc){
                                                        if($acc['account_id'] != ""){
                                                            $acc_idd = $acc['account_id'];
                                                        }else{
                                                            $acc_idd = "Nill";
                                                        }
                                                   ?>
                                                     <option value="<?=$acc_idd;?>"><?=$acc['fname']." ".$acc['lname'];?> (<?=$acc_idd?>)</option>
                                                   <?php } ?>
                                                </select>
                                          </div>      
                                                <div class="col-xxl-12 col-md-12 mb-3">
                                             <label for="tid" class="form-label">Amount <span><?=form_error('amount');?></span></label>
                                             <div class="input-group">
                                                <span class="input-group-text input-usd">$</span>
                                                <input type="text" class="form-control" name="amount" aria-label="Amount (to the nearest dollar)">
                                                <span class="input-group-text input-usd">USD</span>
                                             </div>
                                          </div>
                                           <div class="d-flex justify-content-center">
                                          <button type="submit" id="" class="btn btn-primary waves-effect waves-light">Submit</button>
                                       </div>
                                             </form>
                                          </div>
                                          <!--end col-->
                                          
                                         
                                       </div>
                                       <!--End Row-->
                                      
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
                  <div class="row mt-5">
                     <div class="col-lg-12">
                        <div class="card">
                           <div class="card-header">
                              <h5 class="card-title mb-0">History</h5>
                           </div>
                           <div class="card-body" style="overflow:auto;">
                              <table id="scroll-horizontal1" class="table nowrap align-middle" style="width:100%;overflow:auto;">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Date</th>
                                       <th>User ID</th>
                                       <th>From account</th>
                                       <th>To account</th>
                                       <th>Amount</th>
                                       <th>Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                    $count =1;
                                    $history = $this->db->where_in('user_id',$my_accounts)->where('remark','Transfer')->get('e_wallet')->result_array();
                                    foreach($history as $key => $his)
                                    {
                                        
                                    ?>
                                    <tr>
                                       <td><?=$count++;?></td>
                                       <td><?=$his['entry_date']?></td>
                                       <td><?=$his['transfer_by'];?></td>
                                       <td><?=$his['user_id'];?></td>
                                       <td><?=$his['description'];?></td>
                                       <td><?=$his['debit'];?></td>
                                       <td><span class="badge rounded-pill text-bg-success">Success</span></td>
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
<script>
   const select = document.getElementById('my-select');
   const divs = document.querySelectorAll('.my-div');
   
   select.addEventListener('change', (event) => {
     const selectedValue = event.target.value;
     
     divs.forEach(div => {
       if (div.id === selectedValue) {
         div.style.display = 'block';
       } else {
         div.style.display = 'none';
       }
     });
   });
</script>
<?php include 'footer.php';?>

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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

 <!-- Sweet alert init js-->
    <!--<script src="<?=BASEURL?>assets/js/pages/sweetalerts.init.js"></script>-->

<script>
   $(document).ready(function () {
       $('#scroll-horizontal1').DataTable();
   });
</script>

