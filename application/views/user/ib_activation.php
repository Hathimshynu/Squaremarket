<?php include 'header.php';?>


<style>
.form-control,.form-select{
    border: 1px solid #00b074 !important;
}
.card.ib{
    height:auto;
}
    @media screen and (max-width:768px){
        .ib-portal-col{
            padding-left:0 !important;
            padding-right:0 !important;
        }
    }
    @media screen and (max-width:500px){
        .row>* {
            padding-left:0px !important;
            padding-right:0px !important;
        }
    }
    .portal-activation-card{
        background-color:#d8f1e9 !important;
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
.history-table-card{
    border: 2px solid #00b074;
    border-radius:0px !important;
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
               
                    
                    
                    
                    
                    <div class="row">
   <div class="col-lg-12">
      <div class="card ib portal-activation-card">
         <div class="card-header align-items-center d-flex portal-activation-card">
            <h4 class="card-title mb-0 flex-grow-1">IB active</h4>
         
         </div>
         <!-- end card header -->
         <div class="card-body">
               <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-6 ib-portal-col">
                        <div style="border: 1px solid #0ed8a3 !important;" class="card mt-4">
                             <div class="card-header align-items-center d-flex">
                                   <h4 class="card-title mb-0 flex-grow-1 ms-2">IB Portal Activation</h4>                         
                            </div>
                            <!-- end card header -->
                            <div class="card-body p-4">
                                <form class="needs-validation was-validated" novalidate>  <!--action="<?=BASEURL?>user/ib_registration" method="post"-->
                                 <div class="row d-flex justify-content-center align-items-center"> 
                                  <div class="col-lg-8">  
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                    I agree with IB terms & conditions.
                                    </label>
                                    <div id="error_msg" class="text-danger">
                                        
                                    </div>
                                </div>
                                <div class="mt-4">
                                <button id="activate-ib" type="button" class="btn btn-primary submit-btn" >
                                <i class="fa-solid fa-check me-1"></i> Activate IB Account</span>
                                </button>
                                </div>
                                </div>
                                </div> 
                                </form>   
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
         </div>
      </div>
   </div>
   <!--end col-->
</div>


    <div class="row mt-0">
                        <div class="col-lg-12">
                            <div class="card history-table-card portal-activation-card">
                                <div class="card-header portal-activation-card">
                                    <h5 class="card-title mb-0"> History</h5>
                                </div>
                                <div class="card-body">
                                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                                
                                                <th>#</th>
                                                <th>Date & Time</th>
                                                <th>Remark</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $count = 1;
                                        $history = $this->db->where('user_id',$this->session->userdata('usquareusername'))->get('ib_status_change_history')->result_array();
                                        foreach($history as $key => $his)
                                        {
                                            if($his['status'] == 'Pending'){
                                                $status = 'Processing';
                                                $col = 'warning';
                                            }else if($his['status'] == 'Accepted'){
                                                $status = 'Accepted';
                                                $col = 'success';
                                            }else if($his['status'] == 'Rejected'){
                                                $status = 'Rejected';
                                                $col = 'danger';
                                                
                                            }
                                        ?>  
                                            <tr>
                                               
                                                <td><?=$count++;?></td>
                                                <td><?=date('d-m-Y h:i a',strtotime($his['changed_date']));?></td>
                                                <td><?php if($his['remark'] != ''){ echo $his['remark']; }else{ echo "--"; } ?></td>
                                                <td><span class="badge text-bg-<?=$col;?>"><?=$status;?></span></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
   


                </div>
                <!-- end Container Fluid -->
                
               





<!--================================================-->
<!--         PopUp for Activate IB Account          -->
<!--================================================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
$( "#activate-ib" ).click(function() {
    //alert('Hii');
    $("#error_msg").html('');
    check = $("#invalidCheck").is(":checked");
    if(check) {
         Swal.fire({
            title: "Are you sure?",
            text: "Now your IB account will be created!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, create it!",
            cancelButtonText: "No, cancel!",
            confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
            cancelButtonClass: "btn btn-danger w-xs mt-2",
            buttonsStyling: false,
            showCloseButton: true
        }).then((result) => {
          if (result.isConfirmed) {
            // The user clicked the "Yes, create it!" button
            // Redirect to the specified URL
            window.location.href = "<?=BASEURL?>user/activate_ib";
          }
        });
    } else {
        $("#error_msg").html('You must agree our terms and conditions.');
    }

});
</script>

<?php if($this->session->flashdata('ib_success_message') != ""){
 $user = $this->db->where('account_id',$this->session->userdata('usquareuserid'))->get('user_role')->row_array();
 ?>
<script type="text/javascript">
$( document ).ready(function() {
    Swal.fire({
            title: "Hi! <?=$user['fname']." ".$user['lname'];?>",
            text: "<?=$this->session->flashdata('ib_success_message')?>",
            icon: "success",
            confirmButtonClass: "btn btn-primary w-xs mt-2",
            buttonsStyling: !1
        })
     })
</script>
<?php } ?>
<?php $this->session->set_flashdata('ib_success_message',''); ?>
<script>
//     document.getElementById("activate-ib") && document.getElementById("activate-ib").addEventListener("click", function() {
//     Swal.fire({
//         title: "Are you sure ?",
//         text: "Now your IB account will be created!",
//         icon: "warning",
//         showCancelButton: !0,
//         confirmButtonText: "Yes, create it!",
//         cancelButtonText: "No, cancel!",
//         confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
//         cancelButtonClass: "btn btn-danger w-xs mt-2",
//         buttonsStyling: !1,
//         showCloseButton: !0
//     }).then(function(t) {
//         t.value ? Swal.fire({
//             title: "Hi! SM0001",
//             text: "Welcome to Square Markets, your IB account has created Successfully.",
//             icon: "success",
//             confirmButtonClass: "btn btn-primary w-xs mt-2",
//             buttonsStyling: !1
//         }) : t.dismiss === Swal.DismissReason.cancel && Swal.fire({
//             title: "Cancelled",
//             // text: "Your imaginary file is safe :)",
//             icon: "error",
//             confirmButtonClass: "btn btn-primary mt-2",
//             buttonsStyling: !1
//         })
//     })
// })
</script>




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

   <!-- prismjs plugin -->
   <script src="<?=BASEURL?>assets/libs/prismjs/prism.js"></script>

  <script src="<?=BASEURL?>assets/js/pages/form-validation.init.js"></script>

   <!-- Sweet Alerts js -->
   <script src="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.js"></script>

<!-- Sweet alert init js-->
<script src="<?=BASEURL?>assets/js/pages/sweetalerts.init.js"></script>

<?php include 'footer.php';?>