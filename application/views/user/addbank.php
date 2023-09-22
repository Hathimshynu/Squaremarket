
 
 <?php include 'header.php';?>

 <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

   <style>
   .nav-pills :is(.nav-link.active,.show>.nav-link) {
    background-color: #20604f !important;
   }
   .reset-pwd-tab{
       padding-top:11px !important;
       padding-bottom:11px !important;
   }
</style>

<div class="container-fluid">
                        <div class="col-xxl-12">
                            <h5 class="mb-3">Payment Methods</h5>
                            <div class="card">
                                <div class="card-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link active reset-pwd-tab" data-bs-toggle="tab" href="#pill-justified-home-1" role="tab">
                                                Bank
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link reset-pwd-tab" data-bs-toggle="tab" href="#pill-justified-profile-1" role="tab">
                                                UPI
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link reset-pwd-tab" data-bs-toggle="tab" href="#pill-justified-messages-1" role="tab">
                                                Crypto
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
                                                                                <button type="submit" class="btn submit-btn btn-green btn-primary waves-effect waves-light"><i class="fa-regular fa-circle-check me-2"></i>Submit</button>
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
                                       
                                                
                                                 <div class="row mt-5">
                                                             <div class="col-lg-12">
                                                                <div class="card">
                                                                   <div class="card-header">
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
                                                                               <!--<th>Action</th>-->
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
                                                                               <!--<td>-->
                                                                               <!--   <a href="<?=BASEURL?>user/change_bankstatus/<?=bin2hex($ba['id']);?>" class=" btn btn-<?=$col?>" >-->
                                                                               <!--             <?=$ba['status'];?>-->
                                                                               <!--             </a>-->
                                                                               <!--</td>-->
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
                                           <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-header align-items-center d-flex">
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
                                                                                <button type="submit" class="btn btn-green btn-primary waves-effect waves-light"><i class="fa-regular fa-circle-check me-2"></i>Submit</button>
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
                                           <div class="row mt-5">
                                             <div class="col-lg-12">
                                                <div class="card">
                                                   <div class="card-header">
                                                      <h5 class="card-title mb-0">UPI History</h5>
                                                   </div>
                                                   <div class="card-body">
                                                      <table id="scroll-horizontal1" class="table nowrap align-middle" style="width:100%">
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
                                        <div class="tab-pane" id="pill-justified-messages-1" role="tabpanel">
                                            <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-header align-items-center d-flex">
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
                                                                                <button type="submit" class="btn btn-green btn-primary waves-effect waves-light"><i class="fa-regular fa-circle-check me-2"></i>Submit</button>
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
                                           <div class="row mt-5">
                                             <div class="col-lg-12">
                                                <div class="card">
                                                   <div class="card-header">
                                                      <h5 class="card-title mb-0">Crypto History</h5>
                                                   </div>
                                                   <div class="card-body">
                                                      <table id="scroll-horizontal2" class="table nowrap align-middle" style="width:100%">
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
                                                            $upi_details = $this->db->where('user_id',$this->session->userdata('usquareusername'))->get('upi_details')->result_array();
                                                            foreach($upi_details as $key => $ud)
                                                            {
                                                               
                                                            ?>
                                                            <tr>
                                                               <td>1</td>
                                                               <td>30/5/23023</td>
                                                               <td>xxxxx</td>
                                                               <td>xxxx</td>
                                                                <td>
                                                                   <img style="max-height:50px;width:auto" src="<?=BASEURL?>assets/images/bitcoin.jpg">
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
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
</div>                        
                
               
                  <!-- particles js -->
    <script src="<?=BASEURL?>assets/libs/particles.js/particles.js"></script>

    <!-- particles app js -->
    <script src="<?=BASEURL?>assets/js/pages/particles.app.js"></script> 
    
    <!-- password-addon init -->
    <script src="<?=BASEURL?>assets/js/pages/passowrd-create.init.js"></script>
                
                
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
                
    <script>
        $(document).ready(function () {
    $('#scroll-horizontal1').DataTable();
});

 $(document).ready(function () {
    $('#scroll-horizontal2').DataTable();
});

    </script>
    
         

<?php include 'footer.php';?>